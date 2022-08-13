<?php
include_once ('dbasm.php');
$sql = "select * from category";
$device = query($sql);
?>

<div class="devicesContainer">
    <?php
    for ($i = 0; $i < count($device); $i++) {
    ?>
        <input type="checkbox" class="dropdownItem"> <?=$device[$i][1]?> </input> <br>
    <?php
    }
    ?>
</div>
