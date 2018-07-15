<?php

    include '../db/db.php';

    session_start();

    if(isset($_POST['method']))
    {
        $id = $_POST["id"];
        $sql = "SELECT * FROM cart_214 WHERE item_id = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $return_arr[] = array("name" => $row['name'],
        "price" => $row['price']); 

        echo json_encode($return_arr);
        return;
    }

    if(isset($_POST['discount']))
    {
        if(!isset($_SESSION["name"])){
            echo "Please login";
            return;
        }

        $discount = $_POST["discount"];
        $sql = "SELECT * FROM users_214 WHERE coupon = '$discount'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if($row['coupon']){
            echo "success";

        }else{
            echo "fail";
        }
        return;
    }

    $sql = "SELECT * FROM cart_214";
    $result = mysqli_query($conn, $sql);
  
  
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . "<a href='item.html?id=" . $row['item_id'] . "&name=" . $row['name'] . "&price=" . $row['price'] . "'>"
        . $row["name"] . "</a></td>";
            echo "<td class='itemPrice'>" . $row["price"] . "$</td>";
            echo "<td>" . $row["color"] . "</td>";
            echo "<td>" . $row["size"] . "</td>" ;
            echo '<td><a class="waves-effect waves-light btn-small modal-trigger updateBtn" data-id=' .$row["item_id"] . ' href="#modal1"><i class="fas fa-pen"></i>update</a></td>';
            echo '<td><a class="red accent-2 waves-effect waves-light btn-small removeBtn "data-id=' .$row["item_id"] . '><i class="fas fa-trash-alt"></i>remove</a></td>';
        echo "</tr>";
    }
  
    mysqli_close($conn);
?>