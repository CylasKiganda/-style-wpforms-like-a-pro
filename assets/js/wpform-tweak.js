jQuery(document).ready(function ($) {
  $("#wpforms-form-5057  .wpforms-field label.wpforms-field-label").each(
    function () {
      if (!$(this).find(".wpforms-required-label").length) {
        $(this).append('<span   class="wpforms-any-label">OPT</span>');
      }
    }
  );
});
