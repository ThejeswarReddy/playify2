<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Playify</title>
    <link href="css/login.css" rel="stylesheet" media="screen">

  </head>
  <body>

    <div class="login-page">
      <div class="form">
        <form class="register-form" action="register.php" method="post">
          <input type="text" name="username" placeholder="username" value="" />
          <input type="password" name="password" value="" placeholder="password"/>
          <input type="text" placeholder="email address" name="email" value=""/>
          <button type="submit" value="Register" >create</button>
          <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form"action="login.php" method="post">
          <input type="text" name="username" value="<?php echo $submitted_username; ?>" />
          <input type="password" name="password" value="" />
          <button type="submit" value="Login">login</button>
          <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
      </div>
    </div>

    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
