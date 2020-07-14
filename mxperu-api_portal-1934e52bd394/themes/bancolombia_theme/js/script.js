(function ($) {

// Store our function as a property of Drupal.behaviors.
Drupal.behaviors.bancolombia = {
  attach: function (context, settings) {
 $("#user-login .form-actions .form-submit").addClass("g-btn g-btn--primary");
 $("#user-login  .form-item-name").addClass("block-input");
 $("#user-login  .form-item-pass").addClass("block-input");
$("#user-login  .form-item-name label").addClass("label");
$("#user-login  .form-item-name input").addClass("input");
$("#user-login  .form-item-name input").attr("required","required");
$("#user-login  .form-item-pass input").attr("required","required");
 $("#user-login  .form-item-pass").addClass("block-input");

 
 $("#user-login  .form-item-pass label").insertAfter("#user-login  .form-item-pass .form-text");
 $("#user-login  .form-item-name label").insertAfter("#user-login  .form-item-name .form-text");
  }
};




}(jQuery));