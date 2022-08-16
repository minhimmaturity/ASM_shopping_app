<?php
include_once('dbasm.php');
$sql = "select * from product";
$product = query($sql);
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