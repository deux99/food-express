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
    <link rel="stylesheet" href="placed_orders.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Yaldevi:wght@200&display=swap"
        rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>

    <div class="container">
        <div class="navbar_container">
            <div class="navbar">
                <div class="nav_item4"><a class="not_selected"
                        href="dashboard.php">Restaurants</a>
                </div>
                <div class="nav_item1"><a href="" class="selected">Orders</a></div>
                <div class="nav_item3"><a href="" class="not_selected">Contact</a></div>
                <div class="nav_item3">
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
    </div>
    
</body>

</html>