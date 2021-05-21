<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Sign In</title>
  </head>
  <body>
    <div class="signin">
      <form  action="verfiyUser.php"   method="POST" onsubmit="return  validateSignIn()" >
        <!-- <p class="h1">Login</p> -->
       
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input
            type="text"
            class="form-control"
            id="username"
            name="username"
          />
          <div id="usernameError"></div>
        </div>
        <div  class="mb-3">
          <label for="pwd" class="form-label">Password</label>
          <input
            type="password"
            class="form-control"
            id="pwd"
            name="password"
          />
          <div id="pwdError"></div>
        </div>
        <div class="mb-3 form-check" style="font-size: small">
          <input type="checkbox" class="form-check-input" id="rememberMe" />
          <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
      
        <button type="submit" class="btn btn-primary" id="login" name="login">
          Login Now
        </button>
        <hr />
        <p style="font-size: smaller">
          Don't have an account?<a href="signUp.php">Get Registered</a>
        </p>
        <?php
         if (!empty($_GET['message']))
         {
          echo "<div><h6>". $_GET['message'] ."</h6></div>";
         }
        ?>
       
      </form>
    </div>
    <script src="js/index.js"></script>
  </body>
</html>
