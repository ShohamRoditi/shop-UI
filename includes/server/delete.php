<?php
    include '../db/db.php';

    $id = intval($_POST['id']);
    $sql = "SELECT name FROM cart_214 WHERE item_id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $sql = "DELETE FROM cart_214 WHERE item_id = $id";
    if (mysqli_query($conn, $sql)) {
      echo $row['name'] .  " deleted successfully";
  } else {
      echo "Error deleting record: " . mysqli_error($conn);
  }

  mysqli_close($conn);
?>