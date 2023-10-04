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
    <title>Signup</title>
</head>

<body>
    <div class="container">

        <div class="bg-image">
            <img src="assets/signup_background.jpg">
        </div>

        <div class="form_container">
            <div class="form">
                <div class="form_head">
                    <h2>Create Your Account</h2>
                    <p>Eager to savor? Sign up and let the flavors begin!</p>
                </div>
                <form action="signup-in.php" method="post">
                    <input type="text" placeholder="First name" class="text" name="fname">
                    <input type="text" placeholder="Last name" class="text" name="lname">
                    <input type="text" placeholder="Contact No." class="text" name="no">
                    <input type="text" placeholder="Hostel (villa 1, villa2) / Address" class="text" name="addr">
                    <input type="text" placeholder="Username" class="text" name="user" >
                    <input type="password" placeholder="Password" class="text" name="pass" id="password1">
                    <input type="password" placeholder="Confirm Password" class="text" id="password2">
                    <p id="result" style="font-size:12px; color:#fb8500;"></p>
                    <input type="submit" class="submit_btn" value="Register">
                </form>
                <div class="form_footer">
                    <p>Already have an account? <a class="foo_link" href="login.php"> &nbsp;Login</a></p>
                </div>
            </div>
        </div>

    </div>
    <script>
    
    function checkPasswords() {
      var password1 = document.getElementById("password1").value;
      var password2 = document.getElementById("password2").value;
      var resultMessage = document.getElementById("result");

      if (password1 === password2) {
        resultMessage.textContent = "Passwords match!";
      } else {
        resultMessage.textContent = "Passwords do not match!";
      }
    }

    // Attach the checkPasswords function to the input events of both password fields
    document.getElementById("password1").addEventListener("input", checkPasswords);
    document.getElementById("password2").addEventListener("input", checkPasswords);
  </script>
</body>


</html>