<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="asm.css" />
  <title>
    ElectricShop (Phone, Laptop, PC and electric devices to everyone)
  </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body class="body" style="padding: 0; margin: 0">
  <div class="navBar">
    <div class="logoContainer">
      <img src="Assets/Images/electric-shop.png" alt="" />
    </div>
    <div id="hamburgerIcon">
      <button type = "image" style = "border:none"> <img src="./Assets/Icons/menu.png"> </button>
    </div>
    <form class="inputForm">
      <input type="text" placeholder="Enter devices" />
      <img src="Assets/Icons/search_icon.png" />
    </form>
    <div class="customerAreaContainer">
      <a href="login.php">
        <img style="margin-left: 420px" 1 src="Assets/Icons/user_icon.png" alt="" />
      </a>
      <img src="Assets/Icons/shopping-cart_icon.png" alt="" />
    </div>
    <script src="index.js"></script>
  </div>
  <div class="contentContainer">
    <div id="sideNavBar">
      <p>Device</p>
      <?php
      include_once('device.php');
      ?>
      <p> Brand </p>
      <?php
      include_once('brand.php');
      ?>
      <div class="moneyContainer">
        <p> Limit Price</p>
        <input type="text" placeholder="Min"> -
        <input type="text" placeholder="Max"></input></input>
      </div>
      <div class="starRating">
        <p>Star rating</p>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <input type="checkbox" class="oneStar">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        </input> <br>
        <input type="checkbox" class="twoStar">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        </input> <br>
        <input type="checkbox" class="threeStar">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        </input> <br>
        <input type="checkbox" class="fourStar">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        </input> <br>
        <input type="checkbox" class="fiveStar">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        </input> <br>
      </div>
    </div>
    <div class="productDisplayArea">
      <?php
      include_once("product.php");
      ?>
    </div>
  </div>
</body>

</html>