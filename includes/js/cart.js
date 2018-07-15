let table = document.getElementsByTagName("tbody");
let total = 0;

$(document).ready(function() {
  $.ajax({
    url: "includes/server/select.php",
    type: "GET",
    success: function(data) {
      table[0].innerHTML += data;
      $(".removeBtn").click(delete_item);
      $(".updateBtn").click(fetch_item);
      $("#confirm").click(update_item);
      $("#checkout").click(checkout);
      getSum();
    },
    error: function(request, error) {
      console.log("Request: " + JSON.stringify(request));
    }
  });
});

function delete_item() {
  var id = $(this).attr("data-id");
  let el = $(this);

  $.ajax({
    url: "includes/server/delete.php",
    type: "POST",
    data: {
      id: id
    },
    success: function(msg) {
      el.closest("tr").fadeOut("slow", function() {
        $(this).remove();
        getSum();
      });
    },
    error: function(msg) {
      alert("ERROR: " + msg);
    }
  });
  return false;
}

function fetch_item() {
  var id = $(this).attr("data-id");
  $.ajax({
    url: "includes/server/select.php",
    type: "POST",
    dataType: "JSON",
    data: {
      method: "update",
      id: id
    },
    success: function(data) {
      console.log(data);
      $(".modal-contant h5").text(data[0].name);
      $(".modal-contant h6").text(data[0].price + "$");
      $("#item_id").text(id);
    },
    error: function(msg) {
      alert("ERROR: " + msg);
    }
  });
}

function update_item() {
  var id = parseInt($("#item_id").html());
  var size = $("select").val();
  color = $("input[name=group2]:checked").val();
  $.ajax({
    url: "includes/server/insert.php",
    type: "POST",
    data: {
      method: "update",
      id: id,
      color: color,
      size: size
    },
    success: function(data) {
      console.log(data);
      var trr = $("tr");
      $(`[data-id=${id}]`)[0].closest("tr").children[2].innerHTML = color;
      $(`[data-id=${id}]`)[0].closest("tr").children[3].innerHTML = size;
    }
  });
}

function getSum() {
  total = 0;
  let totalItems = document.getElementsByClassName("itemPrice");
  for (let i of totalItems) {
    total += Number(i.innerHTML.split("$")[0]);
  }
  $("#totalSum").text(total + "$");
}

function checkout() {
  console.log("in checkout");
  var discount = $("#coupon").val();
  $.ajax({
    url: "includes/server/select.php",
    type: "POST",
    data: {
      discount: discount
    },
    success: function(data) {
      console.log(data);
      if (data === "success") {
        alert("Coupon is Valid! ");
      } else {
        alert("Coupon is not Valid!");
      }
    }
  });
}
