$("document").ready(function() {
  console.log("test");
  var toAdd = document.getElementById("addItems");
  if (!toAdd) {
    console.log("ERROR");
    return;
  }

  $.getJSON("includes/db/items.json", function(items) {
    console.log(items);
    for (let i = 0; i < items.length; i++) {
      toAdd.innerHTML +=
        "<div class='col s6 m6 l4'>" +
        "<div class='card itmCard hoverable'><a href='item.html?id=" +
        items[i].id +
        "&name=" +
        items[i].name +
        "&price=" +
        items[i].price +
        "'><div class='card-image'><img src='" +
        items[i].url +
        "'></div><div class='card-content'><p class='center'>" +
        items[i].name +
        "</p><p class='center'>" +
        items[i].price +
        "$</p></div></a></div></div>";
    }
  });
});
