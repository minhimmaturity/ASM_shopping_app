<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
      <a href="user.php">
        <img src="Assets/Images/electric-shop.png" alt="" />
      </a>
    </div>
    <p>Admin Area</p>
    <form id="searchForm" class="inputForm" action="" method="GET">
      <input type="text" name="search" placeholder="Enter devices" />
      <button name="submit" type="button">
        <img src="Assets/Icons/search_icon.png" />
      </button>
    </form>
    <div class="customerAreaContainer">
      <a href="login.php">
        <img style="margin-left: 420px" 1 src="Assets/Icons/login_success.png" alt="" />
      </a>
      <img src="Assets/Icons/shopping-cart_icon.png" alt="" />
    </div>
  </div>
  <div class="contentContainer">
    <div class="sideNavBar" id="sideNavBar">
      <img src="./Assets/Icons/menu.png" class="hamButton" id="hamButton">
      <p>Device</p>
      <?php
      include_once('device.php');
      ?>
      <p> Brand List </p>
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
    <div class="productDisplayArea" id="productDisplayArea">
      <?php
      include_once("product.php");
      ?>
    </div>
  </div>
  <script>
    const hamButton = document.getElementById('hamButton');
    const sideNavBar = document.getElementById('sideNavBar');
    let opened = false;
    hamButton.addEventListener("click", () => {
      if (!opened) {
        sideNavBar.classList.add("open");
        hamButton.src = "./Assets/Icons/close.png";
        opened = true;
      } else {
        sideNavBar.classList.remove("open");
        hamButton.src = "./Assets/Icons/menu.png";
        opened = false;
      }
    })
  </script>
</body>

</html>