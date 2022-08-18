<?php
include_once('dbasm.php');
$sql = "select * from brand";
$brand = query($sql);
?>

<div class="brandContainer">
    <?php
    for ($i = 0; $i < count($brand); $i++) {
    ?>
        <a href="user.php?brandid=<?= $brand[$i][0] ?>">
            <input type="checkbox" class="dropdownItem"> <?= $brand[$i][1] ?> </input> <br>
        </a>
    <?php
    }
    ?>
</div>