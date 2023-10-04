<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Yaldevi:wght@200&display=swap"
        rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="container">

        <div class="bg-image">
            <img src="assets/login_background.jpg">
        </div>

        <div class="form_container">
            <div class="form">
                <div class="form_head">
                    <h2>Hello Again!</h2>
                    <p>Feast awaits! Log in and satisfy your cravings</p>
                </div>
                <form action="authentication.php" method="post">

                    <input type="text" placeholder="Username" class="text" name="user">
                    <input type="password" placeholder="Password" class="text" name="pass">
                    <input type="submit" class="submit_btn" value="Login">
                </form>
                <div class="form_footer">
                    <p>Don't have an account yet? <a class="foo_link" href="signup.php"> &nbsp;Signup</a></p>
                </div>
            </div>
        </div>

    </div>

</body>


</html>