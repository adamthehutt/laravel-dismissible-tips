/* Dismissable tips */
$(document).on("click", "a.dismiss-tip", function() {
  let link = $(this);
  let data = {
    tip: link.data("tip"),
    _token: $('meta[name="csrf-token"]').attr('content')
  };
  $.post("/dismissible-tips/dismiss", data, function() {
    link.hide();
  });
});
