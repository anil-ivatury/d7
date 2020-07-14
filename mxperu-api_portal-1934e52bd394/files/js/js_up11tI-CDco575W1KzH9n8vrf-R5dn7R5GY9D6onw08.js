(function ($) {

/**
 * Toggle the visibility of a fieldset using smooth animations.
 */
Drupal.toggleFieldset = function (fieldset) {
  var $fieldset = $(fieldset);
  if ($fieldset.is('.collapsed')) {
    var $content = $('> .fieldset-wrapper', fieldset).hide();
    $fieldset
      .removeClass('collapsed')
      .trigger({ type: 'collapsed', value: false })
      .find('> legend span.fieldset-legend-prefix').html(Drupal.t('Hide'));
    $content.slideDown({
      duration: 'fast',
      easing: 'linear',
      complete: function () {
        Drupal.collapseScrollIntoView(fieldset);
        fieldset.animating = false;
      },
      step: function () {
        // Scroll the fieldset into view.
        Drupal.collapseScrollIntoView(fieldset);
      }
    });
  }
  else {
    $fieldset.trigger({ type: 'collapsed', value: true });
    $('> .fieldset-wrapper', fieldset).slideUp('fast', function () {
      $fieldset
        .addClass('collapsed')
        .find('> legend span.fieldset-legend-prefix').html(Drupal.t('Show'));
      fieldset.animating = false;
    });
  }
};

/**
 * Scroll a given fieldset into view as much as possible.
 */
Drupal.collapseScrollIntoView = function (node) {
  var h = document.documentElement.clientHeight || document.body.clientHeight || 0;
  var offset = document.documentElement.scrollTop || document.body.scrollTop || 0;
  var posY = $(node).offset().top;
  var fudge = 55;
  if (posY + node.offsetHeight + fudge > h + offset) {
    if (node.offsetHeight > h) {
      window.scrollTo(0, posY);
    }
    else {
      window.scrollTo(0, posY + node.offsetHeight - h + fudge);
    }
  }
};

Drupal.behaviors.collapse = {
  attach: function (context, settings) {
    $('fieldset.collapsible', context).once('collapse', function () {
      var $fieldset = $(this);
      // Expand fieldset if there are errors inside, or if it contains an
      // element that is targeted by the URI fragment identifier.
      var anchor = location.hash && location.hash != '#' ? ', ' + location.hash : '';
      if ($fieldset.find('.error' + anchor).length) {
        $fieldset.removeClass('collapsed');
      }

      var summary = $('<span class="summary"></span>');
      $fieldset.
        bind('summaryUpdated', function () {
          var text = $.trim($fieldset.drupalGetSummary());
          summary.html(text ? ' (' + text + ')' : '');
        })
        .trigger('summaryUpdated');

      // Turn the legend into a clickable link, but retain span.fieldset-legend
      // for CSS positioning.
      var $legend = $('> legend .fieldset-legend', this);

      $('<span class="fieldset-legend-prefix element-invisible"></span>')
        .append($fieldset.hasClass('collapsed') ? Drupal.t('Show') : Drupal.t('Hide'))
        .prependTo($legend)
        .after(' ');

      // .wrapInner() does not retain bound events.
      var $link = $('<a class="fieldset-title" href="#"></a>')
        .prepend($legend.contents())
        .appendTo($legend)
        .click(function () {
          var fieldset = $fieldset.get(0);
          // Don't animate multiple times.
          if (!fieldset.animating) {
            fieldset.animating = true;
            Drupal.toggleFieldset(fieldset);
          }
          return false;
        });

      $legend.append(summary);
    });
  }
};

})(jQuery);
;
/**
 * @file
 *
 * Fivestar JavaScript behaviors integration.
 */

/**
 * Create a degradeable star rating interface out of a simple form structure.
 *
 * Originally based on the Star Rating jQuery plugin by Wil Stuckey:
 * http://sandbox.wilstuckey.com/jquery-ratings/
 */
(function($){ // Create local scope.

Drupal.behaviors.fivestar = {
  attach: function (context) {
    $(context).find('div.fivestar-form-item').once('fivestar', function() {
      var $this = $(this);
      var $container = $('<div class="fivestar-widget clearfix"></div>');
      var $select = $('select', $this);

      // Setup the cancel button
      var $cancel = $('option[value="0"]', $this);
      if ($cancel.length) {
        $('<div class="cancel"><a href="#0" title="' + $cancel.text() + '">' + $cancel.text() + '</a></div>')
          .appendTo($container);
      }

      // Setup the rating buttons
      var $options = $('option', $this).not('[value="-"], [value="0"]');
      var index = -1;
      $options.each(function(i, element) {
        var classes = 'star-' + (i+1);
        classes += (i + 1) % 2 == 0 ? ' even' : ' odd';
        classes += i == 0 ? ' star-first' : '';
        classes += i + 1 == $options.length ? ' star-last' : '';
        $('<div class="star"><a href="#' + element.value + '" title="' + element.text + '">' + element.text + '</a></div>')
          .addClass(classes)
          .appendTo($container);
        if (element.value == $select.val()) {
          index = i + 1;
        }
      });

      if (index != -1) {
        $container.find('.star').slice(0, index).addClass('on');
      }
      $container.addClass('fivestar-widget-' + ($options.length));
      $container.find('a')
        .bind('click', $this, Drupal.behaviors.fivestar.rate)
        .bind('mouseover', $this, Drupal.behaviors.fivestar.hover);

      $container.bind('mouseover mouseout', $this, Drupal.behaviors.fivestar.hover);

      // Attach the new widget and hide the existing widget.
      $select.after($container).css('display', 'none');

      // Allow other modules to modify the widget.
      Drupal.attachBehaviors($this);
    });
  },
  rate: function(event) {
    var $this = $(this);
    var $widget = event.data;
    var value = this.hash.replace('#', '');
    $('select', $widget).val(value).change();
    var $this_star = (value == 0) ? $this.parent().parent().find('.star') : $this.closest('.star');
    $this_star.prevAll('.star').andSelf().addClass('on');
    $this_star.nextAll('.star').removeClass('on');
    if(value==0){
      $this_star.removeClass('on');
    }

    event.preventDefault();
  },
  hover: function(event) {
    var $this = $(this);
    var $widget = event.data;
    var $target = $(event.target);
    var $stars = $('.star', $this);

    if (event.type == 'mouseover') {
      var index = $stars.index($target.parent());
      $stars.each(function(i, element) {
        if (i <= index) {
          $(element).addClass('hover');
        } else {
          $(element).removeClass('hover');
        }
      });
    } else {
      $stars.removeClass('hover');
    }
  }
};

})(jQuery);
;

/*
 * jQuery BBQ: Back Button & Query Library - v1.2.1 - 2/17/2010
 * http://benalman.com/projects/jquery-bbq-plugin/
 *
 * Copyright (c) 2010 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */
(function($,p){var i,m=Array.prototype.slice,r=decodeURIComponent,a=$.param,c,l,v,b=$.bbq=$.bbq||{},q,u,j,e=$.event.special,d="hashchange",A="querystring",D="fragment",y="elemUrlAttr",g="location",k="href",t="src",x=/^.*\?|#.*$/g,w=/^.*\#/,h,C={};function E(F){return typeof F==="string"}function B(G){var F=m.call(arguments,1);return function(){return G.apply(this,F.concat(m.call(arguments)))}}function n(F){return F.replace(/^[^#]*#?(.*)$/,"$1")}function o(F){return F.replace(/(?:^[^?#]*\?([^#]*).*$)?.*/,"$1")}function f(H,M,F,I,G){var O,L,K,N,J;if(I!==i){K=F.match(H?/^([^#]*)\#?(.*)$/:/^([^#?]*)\??([^#]*)(#?.*)/);J=K[3]||"";if(G===2&&E(I)){L=I.replace(H?w:x,"")}else{N=l(K[2]);I=E(I)?l[H?D:A](I):I;L=G===2?I:G===1?$.extend({},I,N):$.extend({},N,I);L=a(L);if(H){L=L.replace(h,r)}}O=K[1]+(H?"#":L||!K[1]?"?":"")+L+J}else{O=M(F!==i?F:p[g][k])}return O}a[A]=B(f,0,o);a[D]=c=B(f,1,n);c.noEscape=function(G){G=G||"";var F=$.map(G.split(""),encodeURIComponent);h=new RegExp(F.join("|"),"g")};c.noEscape(",/");$.deparam=l=function(I,F){var H={},G={"true":!0,"false":!1,"null":null};$.each(I.replace(/\+/g," ").split("&"),function(L,Q){var K=Q.split("="),P=r(K[0]),J,O=H,M=0,R=P.split("]["),N=R.length-1;if(/\[/.test(R[0])&&/\]$/.test(R[N])){R[N]=R[N].replace(/\]$/,"");R=R.shift().split("[").concat(R);N=R.length-1}else{N=0}if(K.length===2){J=r(K[1]);if(F){J=J&&!isNaN(J)?+J:J==="undefined"?i:G[J]!==i?G[J]:J}if(N){for(;M<=N;M++){P=R[M]===""?O.length:R[M];O=O[P]=M<N?O[P]||(R[M+1]&&isNaN(R[M+1])?{}:[]):J}}else{if($.isArray(H[P])){H[P].push(J)}else{if(H[P]!==i){H[P]=[H[P],J]}else{H[P]=J}}}}else{if(P){H[P]=F?i:""}}});return H};function z(H,F,G){if(F===i||typeof F==="boolean"){G=F;F=a[H?D:A]()}else{F=E(F)?F.replace(H?w:x,""):F}return l(F,G)}l[A]=B(z,0);l[D]=v=B(z,1);$[y]||($[y]=function(F){return $.extend(C,F)})({a:k,base:k,iframe:t,img:t,input:t,form:"action",link:k,script:t});j=$[y];function s(I,G,H,F){if(!E(H)&&typeof H!=="object"){F=H;H=G;G=i}return this.each(function(){var L=$(this),J=G||j()[(this.nodeName||"").toLowerCase()]||"",K=J&&L.attr(J)||"";L.attr(J,a[I](K,H,F))})}$.fn[A]=B(s,A);$.fn[D]=B(s,D);b.pushState=q=function(I,F){if(E(I)&&/^#/.test(I)&&F===i){F=2}var H=I!==i,G=c(p[g][k],H?I:{},H?F:2);p[g][k]=G+(/#/.test(G)?"":"#")};b.getState=u=function(F,G){return F===i||typeof F==="boolean"?v(F):v(G)[F]};b.removeState=function(F){var G={};if(F!==i){G=u();$.each($.isArray(F)?F:arguments,function(I,H){delete G[H]})}q(G,2)};e[d]=$.extend(e[d],{add:function(F){var H;function G(J){var I=J[D]=c();J.getState=function(K,L){return K===i||typeof K==="boolean"?l(I,K):l(I,L)[K]};H.apply(this,arguments)}if($.isFunction(F)){H=F;return G}else{H=F.handler;F.handler=G}}})})(jQuery,this);
/*
 * jQuery hashchange event - v1.2 - 2/11/2010
 * http://benalman.com/projects/jquery-hashchange-plugin/
 *
 * Copyright (c) 2010 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */
(function($,i,b){var j,k=$.event.special,c="location",d="hashchange",l="href",f=$.browser,g=document.documentMode,h=f.msie&&(g===b||g<8),e="on"+d in i&&!h;function a(m){m=m||i[c][l];return m.replace(/^[^#]*#?(.*)$/,"$1")}$[d+"Delay"]=100;k[d]=$.extend(k[d],{setup:function(){if(e){return false}$(j.start)},teardown:function(){if(e){return false}$(j.stop)}});j=(function(){var m={},r,n,o,q;function p(){o=q=function(s){return s};if(h){n=$('<iframe src="javascript:0"/>').hide().insertAfter("body")[0].contentWindow;q=function(){return a(n.document[c][l])};o=function(u,s){if(u!==s){var t=n.document;t.open().close();t[c].hash="#"+u}};o(a())}}m.start=function(){if(r){return}var t=a();o||p();(function s(){var v=a(),u=q(t);if(v!==t){o(t=v,u);$(i).trigger(d)}else{if(u!==t){i[c][l]=i[c][l].replace(/#.*/,"")+"#"+u}}r=setTimeout(s,$[d+"Delay"])})()};m.stop=function(){if(!n){r&&clearTimeout(r);r=0}};return m})()})(jQuery,this);
;
/**
 * @file
 * SEARCH AUTOCOMPLETE javascript mechanism.
 *
 * Sponsored by:
 * www.axiomcafe.fr
 */

(function ($) {

  function sanitizeHTML(str) {
    return $("<div>").html(str).text();
  }

  //Escape characters in html terms.
  function escapeHtml(text) {
    return text
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;");
  }
  
  // Escape characters in pattern before creating regexp.
  function escapeRegExp(str) {
    str = $.trim(str);
    return str.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");
  }

  // Autocomplete
  $.ui.autocomplete.prototype._renderItem = function (ul, item) {
    var term = escapeHtml(this.term);
    var first = ("group" in item)  ? 'first' : '';
    var innerHTML = '<div class="ui-autocomplete-fields ' + first + '">';
    item.value = sanitizeHTML(item.value);
    item.label = sanitizeHTML(item.label);
    if (item.fields) {
      $.each(item.fields, function(key, value) {
        var regex = new RegExp('(' + escapeRegExp(term) + ')', 'gi');
        var output = sanitizeHTML(value);
        if (value.indexOf('src=') == -1 && value.indexOf('href=') == -1) {
          output = output.replace(regex, "<span class='ui-autocomplete-field-term'>$1</span>");
          innerHTML += ('<div class="ui-autocomplete-field-' + key + '">' + output + '</div>');
        } else {
          innerHTML += ('<div class="ui-autocomplete-field-' + key + '">' + value + '</div>');
        }
      });
    } else {
      innerHTML += ('<div class="ui-autocomplete-field">' + item.label + '</div>');
    }
    innerHTML += '</div>';

    var group = '';
    if ("group" in item) {
    	groupId = typeof(item.group.group_id) !== 'undefined' ? item.group.group_id : '';
    	groupName = typeof(item.group.group_name) !== 'undefined' ? item.group.group_name : '';
      group += ('<div class="ui-autocomplete-field-group ' + groupId + '">' + groupName + '</div>');
      $(group).appendTo(ul);
    }
    var elem =  $("<li class=ui-menu-item-" + first + "></li>" )
    .append("<a>" + innerHTML + "</a>");
    if (item.value == '') {
    	elem = $("<li class='ui-state-disabled ui-menu-item-" + first + " ui-menu-item'>" + item.label + "</li>" );
    }
    elem.data("item.autocomplete", item).appendTo(ul);
    
    Drupal.attachBehaviors(elem);
    return elem;
  };

  $.ui.autocomplete.prototype._resizeMenu = function() {
    var ul = this.menu.element;
    ul.outerWidth(Math.max(ul.width("").outerWidth() + 5, this.options.position.of == null ? this.element.outerWidth() : this.options.position.of.outerWidth()));
  };

  Drupal.behaviors.search_autocomplete = {
    attach: function(context) {
      if (Drupal.settings.search_autocomplete) {
        $.each(Drupal.settings.search_autocomplete, function(key, value) {
          $(Drupal.settings.search_autocomplete[key].selector).bind("mouseover", function() {
             $(Drupal.settings.search_autocomplete[key].selector).addClass('form-autocomplete ui-autocomplete-processed').attr('data-sa-theme', Drupal.settings.search_autocomplete[key].theme).autocomplete({
            	 	minLength: Drupal.settings.search_autocomplete[key].minChars,
            	 	source: function(request, response) {
                 $(Drupal.settings.search_autocomplete[key].selector).addClass('throbbing');
		              // External URL:
		              if (Drupal.settings.search_autocomplete[key].type == 'external') {
		                $.getJSON(Drupal.settings.search_autocomplete[key].datas, { q: encodeURIComponent(request.term) }, function (results) {
		                  // Only return the number of values set in the settings.
		                  if (results.length) {
		                  	results.slice(0, Drupal.settings.search_autocomplete[key].max_sug);
		                  }
		                  response(results);
		                });
		              }
		              // Internal URL:
		              else if (Drupal.settings.search_autocomplete[key].type == 'internal' || Drupal.settings.search_autocomplete[key].type == 'view') {
		                $.getJSON(Drupal.settings.search_autocomplete[key].datas, request, function (results) {
		                  // Only return the number of values set in the settings.
		                  if (results.length) {
	                	    results.slice(0, Drupal.settings.search_autocomplete[key].max_sug);
		                  }
		                  response(results);
		                });
		              }
		              // Static resources:
		              else if (Drupal.settings.search_autocomplete[key].type == 'static') {
		                var results = $.ui.autocomplete.filter(Drupal.settings.search_autocomplete[key].datas, request.term);
	                  if (results.length) {
	                    results.slice(0, Drupal.settings.search_autocomplete[key].max_sug);
	                  }
	                  response(results);
		              }
		            },
		            open: function(event, ui) {
                              $(".ui-autocomplete").css('right', '20px');
                              $(".ui-autocomplete").css('left', '-200px');
                              $(".ui-autocomplete").css('width', '330px');
		              $(".ui-autocomplete li.ui-menu-item:odd").addClass("ui-menu-item-odd");
		              $(".ui-autocomplete li.ui-menu-item:even").addClass("ui-menu-item-even");
		              $(Drupal.settings.search_autocomplete[key].selector).removeClass('throbbing');
		            },
		            select: function(event, ui) {
		              if (Drupal.settings.search_autocomplete[key].auto_redirect == 1 && ui.item.link) {
		                document.location.href = ui.item.link;
		              } else if (Drupal.settings.search_autocomplete[key].auto_submit == 1 && ui.item.value) {
		                  $(this).val(ui.item.value);
		                  $(this).closest("form").submit();
		              }
                  $(this).val(sanitizeHTML(ui.item.value));
		            },
		            focus: function (event, ui) {
		              if (typeof ui.item.group != 'undefined') {
  		              if (ui.item.group.group_id == 'no_results' || ui.item.group.group_id == 'all_results') {
  		                  event.preventDefault();
  		              }
		              }
		            },
		            appendTo: $(Drupal.settings.search_autocomplete[key].selector).parent()
             }).autocomplete("widget").attr("data-sa-theme", Drupal.settings.search_autocomplete[key].theme);
        	});
          $(Drupal.settings.search_autocomplete[key].selector).trigger('mouseover');
       });
      }
    }
  };
})(jQuery);
;
