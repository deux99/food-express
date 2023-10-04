<?php
session_start();
    ini_set('session.cookie_lifetime', 60 * 60 * 24 * 100);
    ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 100);

require_once 'connection.php';

$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM user WHERE Username = '$user' AND Password = '$pass'";

$result = mysqli_query($conn, $sql);

$check = mysqli_fetch_array($result);

if(isset($check)){
    header('Location: dashboard.php');
    $_SESSION["id"] = $user;    

} else{
    header('Location: login.php');
    
}


?>