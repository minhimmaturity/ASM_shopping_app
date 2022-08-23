<?php
session_start();
?>

<?php
$conditions = "1 = 1";
$sql = "select * from product where $conditions";
if (isset($_GET['brandid'])) {
    $sql = "Select * From `product` WHERE `brandid` = '" . $_GET['brandid'] . "' ";
    $conditions = "brandid = " . $_GET['brandid'];
}
if (isset($_GET['catid'])) {
    $sql = "Select * From `product` WHERE `catid` = '" . $_GET['catid'] . "' ";
    $conditions = "catid = " . $_GET['catid'];
}
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "Select * From `product` WHERE `productName` like '%$search%'";
    query($sql);
}
include_once('dbasm.php');
$product = query($sql);
?>

<?php
for ($i = 0; $i < count($product); $i++) {
?>
    <form action="" method="POST">
        <a href="productdetail.php?productID=<?= $product[$i][0] ?>" style="text-decoration: none">
            <div class="productContainer">
                <div class="productIMG">
                    <img src="<?= $product[$i][2] ?>">
                </div>
                <div class="productName"> <?= $product[$i][1] ?> </div>
                <div class="productPrice"> <?= $product[$i][3] ?>$</div>
                <div class="description"> <?= $product[$i][4] ?> </div>
                <input type="hidden" name="product_id" value="<?= $product[$i][0] ?>">
                <input type="hidden" name="product_name" value="<?= $product[$i][1] ?>">
                <input type="hidden" name="product_price" value="<?= $product[$i][3] ?>">
        </a>
        <button id="cartButton" type="button" name="addCart" class="btn btn-danger">Add to cart</button>
        </div>
    </form>
<?php
}
?>

<?php
// if (isset($_POST['addCart'])) {
//     if (isset($_SESSION['cart'])) {
//         $item_array_id = array_column($_SESSION['cart'], 'product_id');
//         if (in_array($_POST['product_id'], $item_array_id)) {
//             echo "<script>alert('Product is already added in the cart...!')</script>";
//             echo "<script>window.location='product.php'</script>";
//         } else {
//             $count = count($_SESSION['cart']);
//             $item_array = array(
//                 'product_id' => $_POST['product_id'],
//                 'product_name' => $_POST['product_name'],
//                 'product_price' => $_POST['product_price']
//             );
//             $_SESSION['cart'][$count] = $item_array;
//             print_r($_SESSION['cart']);
//         }
//     } else {
//         $item_array = array(
//             'product_id' => $_POST['product_id'],
//             'product_name' => $_POST['product_name'],
//             'product_price' => $_POST['product_price']
//         );
//         $_SESSION['cart'][0] = $item_array;
//         print_r($_SESSION['cart']);
//     }
// }
// if (isset($_POST['addCart'])) {
//     $product_name = $_POST['product_name'];
//     $product_price = $_POST['product_price'];
//     $sql = "INSERT INTO `cart`(`name`, `price`) VALUES ('$product_name','$product_price')";
//     query($sql);
// }
// if (isset($_POST['addCart'])) {
//     $sql = "INSERT INTO `cart`(`name`, `price`) VALUES ('iPhone 12 Pro Max 128GB | VN/A','999')";
//     query($sql);
// }
?>