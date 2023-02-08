$(document).ready(function () {
  $("#uname").keyup(function () {
    var search_text = $("#uname").val();
    if (search_text != "") {
      $.ajax({
        url: "dbc.php",
        method: "post",
        data: { query: search_text },
        success: function (response) {
          $("#show_name").html(response);
        },
      });
    } else {
      $("#show_name").html("");
    }
  });
  $(document).on('click','a',function(){
    $("#uname").val($(this).text());
    $("#show_name").html('');
  });
});
