<?php

    include '../db/db.php';

    if(isset($_POST['method']))
    {
        $id = $_POST["id"];
        $color=  $_POST['color'];
        $size=$_POST['size'];
        $sql = "UPDATE cart_214 SET color='$color', size='$size' WHERE item_id = $id";
        $result = mysqli_query($conn, $sql);
        echo "item was updated in db";
        return;
    }

    $id = $_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $color=  $_POST['color'];
    $size=$_POST['size'];

    $sql="INSERT INTO cart_214 (`item_id`, `name`, `price`, `color`, `size`) VALUES ('$id', '$name', $price, '$color', '$size')";

    if (mysqli_query($conn, $sql)) {
        echo "Item successfully added to your cart";
    } else {
        echo "Item is already in your cart";
    }

    mysqli_close($conn);
?>