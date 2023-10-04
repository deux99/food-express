<?php
    include 'connection.php';

    $first= $_POST['fname'];
    $last= $_POST['lname'];
    $no= $_POST['no'];
    $address= $_POST['addr'];
    $user= $_POST['user'];
    $pass= $_POST['pass'];

    $userid = $first.$no;


    $sql = "INSERT INTO user (UserId, Firstname, Lastname, Contact, Address, Username, Password)
    VALUES ('$userid', '$first', '$last', '$no', '$address', '$user', '$pass')";

    if (mysqli_query($conn, $sql) === TRUE) {
        echo "New record created successfully";
        header('Location: login.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
    

?>