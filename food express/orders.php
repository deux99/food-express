<?php
    session_start();
    if(empty($_SESSION['id'])){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="orders.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Yaldevi:wght@200&display=swap"
        rel="stylesheet">
    <title>Orders</title>
</head>

<body>

    <div class="container">
        <div class="navbar_container">
            <div class="navbar">
                <div class="nav_item1"><i class="fa-solid fa-utensils" style="color: #808080;"></i><a class="selected"
                        href="dashboard.php">Restaurants</a>
                </div>
                <div class="nav_item2"><a href="" class="not_selected">Orders</a></div>
                <div class="nav_item3"><a href="" class="not_selected">Contact</a></div>
                <div class="logout">
                <a href="logout.php" class="not_selected">logout</a>
            </div>
            </div>
            
        </div>
        <div class="content">
            <div class="card">
                <img src="assets/AFC-logo.jpeg">
                <h3>AFC</h3>
                <p>Always Fresh</p>
                <a class="links" href="afc-order.php">Order Now</a>
        </div>
    </div>
    <script>
        alert("welcome! Treat yourself by placing an order.")
    </script>
</body>

</html>