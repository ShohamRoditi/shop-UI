var id;
var name;
var price;
var color;
var size;

$(document).ready(function() {
  fetch_data();
  $("#submitBtn").click(function() {
    color = $("input[name=group2]:checked").val();
    size = $("select").val();
    $.ajax({
      url: "includes/server/insert.php",
      type: "POST",
      data: {
        id: id,
        name: name,
        price: price,
        color: color,
        size: size
      },
      success: function(msg) {
        //alert(msg);
        M.toast({ html: msg });
      }
    });
    return false;
  });
});

function fetch_data() {
  var Params = new URLSearchParams(window.location.search);
  id = Params.get("id");
  name = Params.get("name");
  price = Params.get("price");
  $("#name").text(this.name);
  $("#price").text(this.price + "$");
  //get size
}
