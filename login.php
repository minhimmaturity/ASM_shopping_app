<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="asm.css" />
  <title>Login</title>
</head>
<?php
include_once("dbasm.php");
$sql = "Select * From account";
$accounts = query($sql);
?>

<body>

  <body style="padding: 0; margin: 0">
    <div class="navBar">
      <div class="logoContainer">
        <a href="index.php">
          <img src="/ASM_shopping_app/Assets/Images/electric-shop.png" alt=" " />
        </a>
      </div>
      <p style="margin-right: 25%">Login Area</p>
    </div>
  </body>
  <form class="login-form" class="was-validate" method="post" action="">
    <div class="loginInputContainer">
      <input type="username" class="form-control" placeholder="Enter Username" name="username" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
      <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
      <button class="btn-primary" type="submit" value="login">Login</button>
      <img src="Assets/Images/borderlogin.png" />
      <div style="font-size: 12px;">
        Don't have account <a href="register.php">Register</a>
      </div>
      <div style="font-size: 12px;">
        Forgot password <a href="">Click Here</a>
      </div>
    </div>
  </form>
  <?php
  if (isset($_POST['username']) && $_POST['password']) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    for ($i = 0; $i < count($accounts); $i++) {
      if ($accounts[$i][1] == $username && $accounts[$i][2] == $password && $accounts[$i][1] != 'admin' && $accounts[$i][2] != 'admin') {
        header('location:user.php');
      } else if ($accounts[$i][1] == $username && $accounts[$i][2] == $password && $username == 'admin' && $password == 'admin') {
        header('location:admin.php');
      }
    }
  }
  ?>
  <?php
  ?>
</body>

</html>