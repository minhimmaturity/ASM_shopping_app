<?php
session_start();
?>
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
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
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
      <a href="cart.php" style="margin-right: 40px">
        <img src="Assets/Icons/shopping-cart_icon.png" alt="" style="width: 15px; height: 15px" />
      </a>
    </div>
  </div>
  <div class="contentContainer">
    <style>
      .carousel-item {
        height: 430px;
        border: 1px solid black;
        overflow: hidden;
      }
    </style>
    <div id="#shopCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#shopCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#shopCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#shopCarousel" data-bs-slide-to="2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./Assets/Images/carousel1.jpg" alt="Los Angeles" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="./Assets/Images/carousel1.jpg" alt="Chicago" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="./Assets/Images/carousel1.jpg" alt="New York" class="d-block w-100">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#shopCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#shopCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
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
<footer class="footer">
  <div class="footerContainer">
    <div class="row">
      <div class="footer-col">
        <h4 style="margin-left: 30px"> Company </h4>
        <ul>
          <li> <a href="#">About Us</a> </li>
          <li> <a href="#">Our Services</a> </li>
          <li> <a href="#"> Privacy Policy</a> </li>
          <li> <a href="#"> Affiliate program </a> </li>
        </ul>
      </div>
      <div class="footer-col">
        <h4 style="margin-left: 30px"> Get help </h4>
        <ul>
          <li> <a href="#">FAQ</a> </li>
          <li> <a href="#">Payment Options</a> </li>
          <li> <a href="#">Returns</a> </li>
          <li> <a href="#">Order Status</a> </li>
        </ul>
      </div>
      <div class="footer-col">
        <h4> Follow us </h4>
        <div class="social-links">
          <a href="https://www.facebook.com/minhtran0612/"> <i class="fab fa-facebook-f"> </i> </a>
          <a href="#"> <i class="fab fa-instagram"> </i> </a>
          <a href="#"> <i class="fab fa-youtube"> </i> </a>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php
include_once('dbasm.php');
if (isset($_POST['addCart'])) {
  if (isset($_SESSION['cart'])) {
    $item_array_id = array_column($_SESSION['cart'], 'product_id');
    if (in_array($_POST['product_id'], $item_array_id)) {
      echo "<script>alert('Product is already added in the cart...!')</script>";
      echo "<script>window.location='user.php'</script>";
    } else {
      $count = count($_SESSION['cart']);
      $item_array = array(
        'product_id' => $_POST['product_id'],
        'product_name' => $_POST['product_name'],
        'product_price' => $_POST['product_price']
      );
      $_SESSION['cart'][$count] = $item_array;
      print_r($_SESSION['cart']);
    }
  } else {
    $item_array = array(
      'product_id' => $_POST['product_id'],
      'product_name' => $_POST['product_name'],
      'product_price' => $_POST['product_price']
    );
    $_SESSION['cart'][0] = $item_array;
    print_r($_SESSION['cart']);
  }
}
?>
<?php
// echo "<script> '" . $_SESSION['cart'] . "' </script>";
?>

</html>