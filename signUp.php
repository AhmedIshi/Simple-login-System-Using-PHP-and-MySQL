<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style1.css" />
    <!-- <script src="js/index.js"></script> -->
    <title>Sign up</title>
  </head>
  <body>
    <div class="signUp">
      <h1 id = "signUp">Sign Up</h1>
      <form class="row g-3" action="AddNewUser.php" method="POST" onsubmit="return validateSignUp()">
        <div class="col-md-6">
          <label for="fName" class="form-label">First Name</label>
          <input
            type="text"
            class="form-control"
            name="firstname"
            id="fName"
            placeholder="First Name"
          />
          <div id="fNameError"></div>
        </div>
       
        <div class="col-md-6">
          <label for="lName" class="form-label">Last Name</label>
          <input
            type="text"
            class="form-control"
            id="lName"
            name="lastname"
            placeholder="Last Name"
          />
          <div id="lNameError"></div>
        </div>
       
        <div class="col-md-12">
          <label for="email" class="form-label">Email</label>
          <input
            type="email"
            class="form-control"
            name="email"
            id="email"
            placeholder="Email"
          />
        <div id="emailError"></div>
        </div>
        <div class="col-md-12">
          <label for="username" class="form-label">Username</label>
          <input
            type="text"
            class="form-control"
            name="username"
            id="username"
            placeholder="Username"
          />
          <div id="usernameError"></div>
        </div>
       
        <div class="col-md-12">
          <label for="pwd" class="form-label">Password</label>
          <input
            type="password"
            class="form-control"
            name="password"
            id="pwd"
            placeholder="Password"
          />
        <div id="pwdError"></div>
        </div>
        <div class="col-md-12">
          <label for="confirmPwd" class="form-label">Confirm Password</label>
          <input
            type="password"
            class="form-control"
            id="confirmPwd"
            placeholder="Retype Password"
          />
           <div id="cPwdError"></div>
        </div>
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary" name="submit">
            Sign up
          </button>
        </div>
        <p style="font-size: smaller; align-items: center">
          Already have an account?<a href="signIn.php" >Login here</a>
        </p>
      </form>
    </div>
    <script src="js/index.js"></script>
  </body>
</html>
