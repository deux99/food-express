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
    <link rel="stylesheet" href="signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Yaldevi:wght@200&display=swap"
        rel="stylesheet">
    <title>KFC-Order</title>
</head>

<body>
    <div class="container">

        <div class="bg-image">
            <img src="assets/kfc-menu.jpg">
        </div>

        <div class="form_container">
            <div class="form">
                <div class="form_head">
                    <h2>Make Your Order</h2>
                    <p>We'll cook and send it quick</p>
                </div>
                <form action="order.php" method="POST">
                    
                   
                    <input type="text" placeholder="Menu Item No (Refer From Menu)" class="text" name="item">
                    <input type="text" placeholder="Extra Notes" class="text" name="misc"> 
                    
                    <input type="hidden" placeholder="Menu Item No" class="text" value="KFC" name="rest">
                    <input type="submit" class="submit_btn" value="Place Order">
                </form>
                <div class="form_footer">
                    <p>Order from another Restaurant? <a class="foo_link" href="dashboard.php"> &nbsp;Back to
                            Dashboard</a>
                    </p>
                </div>
            </div>
        </div>

    </div>

</body>

</html>