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
    <a href="productdetail.php?productID=<?= $product[$i][0] ?>" style = "text-decoration: none">
        <div class="productContainer">
            <div class="productIMG">
                <img src="<?= $product[$i][2] ?>">
            </div>
            <div class="productName"> <?= $product[$i][1] ?> </div>
            <div class="productPrice"> <?= $product[$i][3] ?> </div>
            <div class="description"> <?= $product[$i][4] ?> </div>
    </a>
    <a href = "#">
    <button id="cartButton" type="button" class="btn btn-danger">Add to cart</button>
    </a>
    </div>


<?php
}
?>