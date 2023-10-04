<?php
session_start();

include 'connection.php';


    $item = $_POST['item'];
    $rest = $_POST['rest'];
    $misc = $_POST['misc'];
    $user = $_SESSION["id"];
    $id = random_int(1, 2000);
    $orderid =  $user.$rest.$item.$id;

    $sql =  "SELECT UserId, Firstname, Contact, Address FROM user WHERE Username = '$user'";

    $result = mysqli_query($conn, $sql);

    $check = mysqli_fetch_array($result);

    $userid = $check[0];
    $name = $check[1];
    $contact = $check[2];
    $address = $check[3]; 

    echo $userid;

    $sql2 = "INSERT INTO placings (orderid, userid, menuitem, Restaurant, name, contact, address, notes)
    VALUES ('$orderid', '$userid', '$item', '$rest', '$name', '$contact', '$address', '$misc')";

    $result2 = mysqli_query($conn, $sql2);
    header('Location: success.html');

;


    

    
    
?>