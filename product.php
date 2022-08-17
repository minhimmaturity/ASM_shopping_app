<?php
if(isset($_GET['brandid'])) {
    $sql = "Select * From `product` WHERE `brandid` = '".$_GET['brandid']. "' ";
} else if (isset($_GET['keyword'])) {
    $sql = "Select * From product WHERE productName like '%".$_GET['keyword']."%'";
} else {
include_once('dbasm.php');
$sql = "select * from product";
$product = query($sql);
}
?>

<?php
for ($i = 0; $i < count($product); $i++) {
?>
    <div class="productContainer">
        <div class="productIMG">
            <img src="<?= $product[$i][2] ?>">
        </div>
        <div class="productName"> <?= $product[$i][1] ?> </div>
        <div class="productPrice"> <?= $product[$i][3] ?> </div>
        <div class="description"> <?= $product[$i][4] ?> </div>
    </div>
<?php
}
?>