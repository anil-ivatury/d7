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
$(".page-user-login #messages").addClass("g-alert");
$("#block-views-line-of-business-block .view-line-of-business").addClass("row mt-4 mb-2");
$("#block-views-line-of-business-block .view-line-of-business .view-content").addClass("d-flex g-box-scoll");
$("#block-views-line-of-business-block .view-line-of-business .view-content .views-row").addClass("h-ph--15 h-w-md--100");
$("#block-views-line-of-business-block").addClass("container");
//$(".dropdown-content  .g-btn").append('<div>I am new here</div>'); ;
 
 $("#user-login  .form-item-pass label").insertAfter("#user-login  .form-item-pass .form-text");
 $("#user-login  .form-item-name label").insertAfter("#user-login  .form-item-name .form-text");
  }
};




}(jQuery));