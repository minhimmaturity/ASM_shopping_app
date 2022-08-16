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
  <title>Register</title>
</head>

<body>

  <body style="padding: 0; margin: 0">
    <div class="navBar">
      <div class="logoContainer">
        <a href="index.php">
          <img src="/ASM_shopping_app/Assets/Images/electric-shop.png" alt=" " />
        </a>
      </div>
      <p style="margin-right: 85%">Register Area</p>
    </div>
  </body>
  <form class="login-form" class="was-validate" method="POST" action="">
    <!-- <div class = "shopImgContainer"> 
        <img src = "Assets/Images/shop.png" class = "shopIMG">
      </div> -->
    <div class="loginInputContainer">
      <input type="email" class="form-control" placeholder="Enter Email" name="Email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
      <input type="phone_number" class="form-control" placeholder="Enter Phone Number" name="PhoneNumber" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
      <label for="birthday">
        <input type="date" class="form-control" placeholder="Enter birthdate" name="birthday" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </label>
      <input type="username" class="form-control" placeholder="Enter Username" name="userName" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
      <input type="password" class="form-control" placeholder="Enter Password" name="UserPassword" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
      <input type="password" class="form-control" placeholder="Confirm Password" name="cPassword" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
      <button name="submit" type="submit" class="btn-primary">Register</button>
      <div style="font-size: 12px;">
        Have an account <a href="login.php">Login</a>
      </div>
    </div>
  </form>
  <?php
  include_once("dbasm.php");
  if (
    $_POST['userName'] != "" && $_POST['Email'] != "" && $_POST['PhoneNumber'] != "" && $_POST['birthday']  != ""
    && $_POST['UserPassword'] != ""  && $_POST['cPassword'] != ""
  ) {
    $userName = $_POST['userName'];
    $Email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $birthday = $_POST['birthday'];
    $UserPassword = $_POST['UserPassword'];
    $cPassword = $_POST['cPassword'];
    $sql = "INSERT INTO `account`( `username`, `password`, `email`, `birthdate`, `phone_number`) 
    VALUES ('$userName','$UserPassword','$Email','$birthday','$PhoneNumber')";
    query($sql);
  }
  ?>
</body>
</html>