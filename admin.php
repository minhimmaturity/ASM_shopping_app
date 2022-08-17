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
  <title>
    Admin
  </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body style="padding: 0; margin: 0">
  <div class="navBar">
    <div class="logoContainer">
      <img src="Assets/Images/electric-shop.png" alt="" />
    </div>
    <p style="margin-right: 45%">Admin Area</p>
    <div class="customerAreaContainer">
      <a href="login.php" class="logoutButton">
        <button style="border: none" type="button"> Logout </button>
      </a>
    </div>
  </div>
  <div class="adminScreen">
    <div class="sideNavBarAdmin">
      <?php
      include_once('dbasm.php');
      $sql = "select * from brand";
      $brand = query($sql);
      ?>
      <div class="devicesContainer">
        <a href="admin.php">Home</a>
        <?php
        for ($i = 0; $i < count($brand); $i++) {
        ?>
          <a href="admin.php?brandid=<?= $brand[$i][0] ?>">
            <div class="dropdownItem"> <?= $brand[$i][1] ?> </div> <br>
          </a>
        <?php
        }
        ?>
      </div>
    </div>
    <div class="actionScreen">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 150px">IMG</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>
        <?php
        $conditions = "1 = 1";
        $sql = "select * from product where $conditions";
        if (isset($_GET['brandid'])) {
          $sql = "Select * From `product` WHERE `brandid` = '" . $_GET['brandid'] . "' ";
          $conditions = "brandid = " . $_GET['brandid'];
        }
        $product = query($sql);
        for ($i = 0; $i < count($product); $i++) {
        ?>
          <thead>
            <tr>
              <th style="width: 150px"> <img class="imgSize" src="<?= $product[$i][2] ?>"> </th>
              <th> <?= $product[$i][1] ?> </th>
              <th> <?= $product[$i][3] ?> </th>
              <th> <?= $product[$i][4] ?> </th>
              <th>
                <a href="admin.php?updateid=<?= $rows[$i][0] ?>">Edit</a>
                <a href="admin.php?deleteid=<?= $rows[$i][0] ?>">Delete</a>
              </th>
            </tr>
          </thead>
        <?php
        }
        ?>
      </table>
    </div>
    <div class="abilityScreen">
      <form action="" method="POST" style="width: 100%;">
        <div class="addHeader">
          Add New Device
        </div>
        <input type="text" class="insertForm" name="id" value="" placeholder="Enter device ID">
        <input type="text" class="insertForm" name="deviceName" value="" placeholder="Enter device name">
        <input type="file" class="insertForm" name="deviceIMG" value="" placeholder="choose file">
        <input type="text" class="insertForm" name="devicePrice" value="" placeholder="Enter device price">
        <input type="text" class="insertForm" name="description" value="" placeholder="Enter device description">
        <div>
          <select class="brandForm" name="categogy">
            <option>category</option>
            <?php
            $sql = "select * from category";
            $cat = query($sql);
            for ($i = 0; $i < count($cat); $i++) {
            ?>
              <option value="<?= $cat[$i][0] ?>"><?= $cat[$i][1] ?></option>
            <?php
            }
            ?>
          </select>
        </div>
        <div>
          <select class="brandForm" name="brand">
            <option>Brand</option>
            <?php
            $sql = "select * from brand";
            $brand = query($sql);
            for ($i = 0; $i < count($brand); $i++) {
            ?>
              <option value="<?= $brand[$i][0] ?>"><?= $brand[$i][1] ?></option>
            <?php
            }
            ?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary" id="submitButton" name="submit">Submit</button>
      </form>
    </div>
  </div>
  <?php
  if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $deviceName = $_POST['deviceName'];
    if ($_FILES) {
      $image = $_FILES['deviceIMG']['name'];
      $path = "images/" . $image;
      move_uploaded_file($_FILES['deviceIMG']['tmp_name'], $path);
    }
    $devicePrice = $_POST['devicePrice'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $sql = "INSERT INTO `product`(`productID`, `productName`, `productIMG`, `productPrice`, `description`, `catid`, `brandid`) 
    VALUES ('$id','$deviceName','$path','$devicePrice','$description','$category','$brand')";
    query($sql);
  }
  ?>
</body>

</html>