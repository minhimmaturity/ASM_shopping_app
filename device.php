<?php
include_once('dbasm.php');
$sql = "select * from category";
$device = query($sql);
?>

<div class="devicesContainer">
    <?php
    for ($i = 0; $i < count($device); $i++) {
    ?>
        <a href = "index.php?catid=<?= $device[$i][0] ?>"> 
            <div class="dropdownItem" > <?= $device[$i][1] ?> </div> <br>
        </a>
    <?php
    }
    ?>
</div>