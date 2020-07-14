/**
 * @file
 * Linkit field ui functions
 */
(function($, behavior) {
  'use strict';

  Drupal.behaviors[behavior] = {
    attach: function(context, settings) {
      // If there is no fields, just stop here.
      if (undefined === settings.linkit || undefined === settings.linkit.fields || null === settings.linkit.fields) {
        return false;
      }

      $.each(settings.linkit.fields, function(i, instance) {
        $('#' + instance.source, context).once(behavior, function() {
          var element = this;

          $('.linkit-field-' + instance.source).click(function(event) {
            event.preventDefault();

            // Only care about selection if the element is a textarea.
            if ('textarea' === element.nodeName.toLowerCase()) {
              instance.selection = Drupal.linkit.getDialogHelper('field').getSelection(element);
            }

            Drupal.settings.linkit.currentInstance = instance;
            Drupal.linkit.createModal();
          });
        });
      });
    }
  };

  /**
   * Linkit field dialog helper.
   */
  Drupal.linkit.registerDialogHelper('field', {
    afterInit: function() {},

    /**
     * Insert the link into the field.
     *
     * @param {Object} data
     *   The link object.
     */
    insertLink: function(data) {
      var instance = Drupal.settings.linkit.currentInstance,
          // Call the insert plugin.
          link = Drupal.linkit.getInsertPlugin(instance.insertPlugin).insert(data, instance);

      if (instance.hasOwnProperty('selection')) {
        // Replace the selection and insert the link there.
        this.replaceSelection(instance.source, instance.selection, link);
      }
      else if (instance.hasOwnProperty('titleField')) {
        // The "linkContent" property will always be present when AJAX used.
        // Otherwise, if you use simple insert without autocomplete, then this
        // property will be undefined and title field should not be filled in.
        //
        // @see Drupal.behaviors.linkitSearch.attach
        if (instance.hasOwnProperty('linkContent')) {
          this.replaceFieldValue(instance.titleField, instance.linkContent);
        }

        // The "path" property will always be present after dialog was
        // opened and contain raw URL.
        //
        // @see Drupal.behaviors.linkitDashboard.attach
        this.replaceFieldValue(instance.source, data.path);
      }
      else {
        // Replace the field value.
        this.replaceFieldValue(instance.source, link);
      }
    },

    /**
     * Get field selection.
     */
    getSelection: function(element) {
      var object = {
        start: element.value.length,
        end: element.value.length,
        length: 0,
        text: ''
      };

      // Mozilla and DOM 3.0.
      if ('selectionStart' in element) {
        var length = element.selectionEnd - element.selectionStart;

        object = {
          start: element.selectionStart,
          end: element.selectionEnd,
          length: length,
          text: element.value.substr(element.selectionStart, length)
        };
      }
      // IE.
      else if (document.selection) {
        element.focus();

        var range = document.selection.createRange(),
            textRange = element.createTextRange(),
            textRangeDuplicate = textRange.duplicate();

        textRangeDuplicate.moveToBookmark(range.getBookmark());
        textRange.setEndPoint('EndToStart', textRangeDuplicate);

        if (!(range || textRange)) {
          return object;
        }

        // For some reason IE doesn't always count the \n and \r in the length.
        var text_part = range.text.replace(/[\r\n]/g, '.'),
            text_whole = element.value.replace(/[\r\n]/g, '.'),
            the_start = text_whole.indexOf(text_part, textRange.text.length);

        object = {
          start: the_start,
          end: the_start + text_part.length,
          length: text_part.length,
          text: range.text
        };
      }

      return object;
    },

    /**
     * Replace the field selection.
     */
    replaceSelection: function(id, selection, text) {
      var field = this.getField(id);
      field.value = field.value.substr(0, selection.start) + text + field.value.substr(selection.end, field.value.length);
    },

    /**
     * Replace the field value.
     */
    replaceFieldValue: function(id, text) {
      this.getField(id).value = text;
    },

    getField: function(id) {
      return document.getElementById(id);
    }
  });
})(jQuery, 'linkitField');
;
/**
 * @file
 * Linkit tinymce dialog helper.
 */
(function ($) {

// Abort if Drupal.linkit is not defined.
if (typeof Drupal.linkit === 'undefined') {
  return ;
}

Drupal.linkit.registerDialogHelper('tinymce', {
  init : function() {},

  /**
   * Prepare the dialog after init.
   */
  afterInit : function () {
    var editor = Drupal.settings.linkit.currentInstance.editor;
    var element, link;

    // Restore the selection if the browser is IE.
    if (tinymce.isIE) {
      editor.selection.moveToBookmark(editor.windowManager.bookmark);
    }

    // If we have selected a link element, lets populate the fields in the
    // dialog with the values from that link element.
    if (element = editor.dom.getParent(editor.selection.getNode(), 'A')) {
      link = {
        path: editor.dom.getAttrib(element, 'href'),
        attributes: {}
      };

      // Get all attributes that have fields in the modal.
      var additionalAttributes = Drupal.linkit.additionalAttributes();

      // Add attributes to the link object, but only those that are enabled in Linkit.
      tinymce.each(additionalAttributes, function(attribute) {
        var value = editor.dom.getAttrib(element, attribute);
        if (value) {
          link.attributes[attribute] = value;
        }
      });
    }

    // Populate the fields.
    Drupal.linkit.populateFields(link);
  },

  /**
   * Insert the link into the editor.
   *
   * @param {Object} link
   *   The link object.
   */
  insertLink : function(data) {
    var editor = Drupal.settings.linkit.currentInstance.editor,
    element = editor.dom.getParent(editor.selection.getNode(), 'A');

    // Restore the selection if the browser is IE.
    if (tinymce.isIE) {
      editor.selection.moveToBookmark(editor.windowManager.bookmark);
    }

    // Set undo begin point.
    editor.execCommand("mceBeginUndoLevel");
    data.attributes.href = data.path;
    // No link element selected, create a new anchor element.
    if (element == null) {
      // If there is no selection, lets inser a new element.
      if (editor.selection.isCollapsed()) {
        var content = (Drupal.settings.linkit.currentInstance.linkContent) ? Drupal.settings.linkit.currentInstance.linkContent : data.path;
        editor.execCommand('mceInsertContent', false,
          editor.dom.createHTML('a', data.attributes, content));
      } else {
        editor.execCommand("mceInsertLink", false, data.attributes);
      }
    }
    // We are editing an existing link, so just overwrite the attributes.
    else {
      editor.dom.setAttribs(element, data.attributes);
    }

    // Don't move caret if selection was image
    if(element != null) {
      if (element.childNodes.length != 1 || element.firstChild.nodeName != 'IMG') {
        editor.focus();
        editor.selection.select(element);
        editor.selection.collapse(0);
        // Restore the selection if the browser is IE.
        if (tinymce.isIE) {
          editor.selection.moveToBookmark(editor.windowManager.bookmark);
        }
      }
    }
    // Set undo end point.
    editor.execCommand("mceEndUndoLevel");
  }
});

})(jQuery);;
