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
<?php
include_once("dbasm.php");
$sql = "select sum(price) from cart";
$total_money = query($sql);
?>

<body class="body" style="padding: 0; margin: 0">
    <div class="navBar">
        <div class="logoContainer">
            <a href="user.php">
                <img src="Assets/Images/electric-shop.png" alt="" />
            </a>
        </div>
        <div class="customerAreaContainer">
            <a href="user.php">
                <img style="margin-left: 420px" 1 src="Assets/Icons/login_success.png" alt="" />
            </a>
            <img src="Assets/Icons/shopping-cart_icon.png" alt="" />
        </div>
    </div>
    <div class="contentContainer">
        <?php
        ?>
        <div class="productDisplayArea" id="productDisplayArea">
            <table style="width: 100%" class="cartTable">
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <?php
                $sql = "select * from cart";
                $cart = query($sql);
                for ($i = 0; $i < count($cart); $i++) {
                ?>
                    <tr>
                        <td> <?= $cart[$i][1] ?> </td>
                        <td> <?= $cart[$i][2] ?> $ </td>
                        <td>
                            <a href="cart.php?deleteid=<?= $cart[$i][0] ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
                <td colspan="2"> Total price </td>
                <td> <?= $total_money[0][0] ?> $ </td>

            </table>
        </div>
    </div>
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
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    echo "<script> '" . $id . "' </script>";
    $sql = "delete from cart where id = '" . $id . "'";
    query($sql);
}
?>

</html>