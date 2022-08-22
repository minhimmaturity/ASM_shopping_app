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
<?php
include_once("dbasm.php");
?>

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
        <div class="productDisplayArea" id="productDisplayArea" style="margin-left: 180px">
            <?php
            $conditions = "1 = 1";
            $sql = "select * from product where $conditions";
            if (isset($_GET['productID'])) {
                $sql = "Select * From `product` WHERE `productID` = '" . $_GET['productID'] . "' ";
                $conditions = "brandid = " . $_GET['brandid'];
                $product = query($sql);
                for ($i = 0; $i < count($product); $i++) {
            ?>
                    <div class="productDetails">
                        <div class="specificIMG">
                            <img src="<?= $product[$i][2] ?>">
                        </div>
                        <div class="specificContainer">
                            <div class="specificName"> <?= $product[$i][1] ?> </div>
                            <div class="productDescription"> <?= $product[$i][7] ?> </div>
                            <div class="specificPrice"> <?= $product[$i][3] ?> </div>
                            <button id="cartButton" type="button" class="btn btn-danger" style="margin-left: 200px">Add to cart</button>
                        </div>
                    </div>
            <?php
                }
            }
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

</html>