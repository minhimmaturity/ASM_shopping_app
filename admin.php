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
      <a href="user.php">
        <img src="Assets/Images/electric-shop.png" alt="" />
      </a>
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
            <th>Specific Description</th>
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
              <th> <?= $product[$i][7] ?> </th>
              <th>
                <a href="admin.php?updateid=<?= $product[$i][0] ?>">Edit</a>
                <a href="admin.php?deleteid=<?= $product[$i][0] ?>">Delete</a>
              </th>
            </tr>
          </thead>
        <?php
        }
        ?>
      </table>
    </div>
    <div class="abilityScreen">
      <?php
      if (isset($_GET['updateid'])) {
        $id = $_GET['updateid'];
        $sql = "select * from product where productID = '" . $id . "'";
        $update = query($sql);
      ?>
        <form action="" method="POST" style="width: 100%;" enctype="multipart/form-data">
          <div class="addHeader">
            Update Device
          </div>
          <input type="text" class="insertForm" name="iddisplay" value="<?= $update[0][0] ?>" disabled>
          <input type="hidden" id="id" value="<?= $update[0][0] ?>" name="id">

          <input type="text" class="insertForm" name="name" value="<?= $update[0][1] ?>">

          <input type="text" class="insertForm" name="imageold" id="imageold" value="<?= $update[0][2] ?>">
          <input type="file" class="insertForm" name="image" value="">


          <input type="text" class="insertForm" name="price" value="<?= $update[0][3] ?>">

          <input type="text" class="insertForm" name="description" value="<?= $update[0][4] ?>">

          <div>
            <select class="brandForm" name="category">
              <option>category</option>
              <?php
              $sql = "select * from category";
              $cat = query($sql);
              for ($i = 0; $i < count($cat); $i++) {
                if ($update[0][5] == $cat[$i][0]) {
              ?>
                  <option value="<?= $cat[$i][0] ?>" selected><?= $cat[$i][1] ?></option>
                <?php
                } else {
                ?>
                  <option value="<?= $cat[$i][0] ?>"><?= $cat[$i][1] ?></option>
                <?php
                }
                ?>
              <?php
              }
              ?>
            </select>
          </div>
          <div>
            <select class="brandForm" name="brand">
              <option>brand</option>
              <?php
              $sql = "select * from brand";
              $brand = query($sql);
              for ($i = 0; $i < count($brand); $i++) {
                if ($update[0][6] == $brand[$i][0]) {
              ?>
                  <option value="<?= $brand[$i][0] ?>" selected><?= $brand[$i][1] ?></option>
                <?php
                } else {
                ?>
                  <option value="<?= $brand[$i][0] ?>"><?= $brand[$i][1] ?></option>
                <?php
                }
                ?>
              <?php
              }
              ?>
            </select>
          </div>
          <input type="text" class="insertForm" name="specificDescription" value="<?= $update[0][7] ?>">
          <button type="submit" class="btn btn-primary" id="submitButton" name="update">Update</button>
        </form>
      <?php
      } else {
      ?>
        <form action="" method="POST" style="width: 100%;" enctype="multipart/form-data">
          <div class="addHeader">
            Add New Device
          </div>
          <input type="text" class="insertForm" name="id" value="" placeholder="Enter device ID">
          <input type="text" class="insertForm" name="name" value="" placeholder="Enter device name">
          <input type="file" class="insertForm" name="image" value="">
          <input type="text" class="insertForm" name="price" value="" placeholder="Enter device price">
          <input type="text" class="insertForm" name="description" value="" placeholder="Enter device description">
          <div>
            <select class="brandForm" name="category">
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
              <option>brand</option>
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
          <input type="text" class="insertForm" name="specificDescription" value = "" placeholder = "Please enter specific description">
          <button type="submit" class="btn btn-primary" id="submitButton" name="submit">Submit</button>
        </form>
      <?php
      }
      ?>
    </div>
  </div>
  <?php
  if (
    isset($_POST['submit'])
  ) {
    $id = $_POST['id'];
    $name = $_POST['name'];

    if ($_FILES) {
      $image = $_FILES['image']['name'];
      $path = "./upload/image/" . $image;
      move_uploaded_file($_FILES['image']['tmp_name'], $path);
    }

    $price = $_POST['price'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $specificDescription = $_POST['specificDescription'];
    $sql = "INSERT INTO `product`(`productID`, `productName`, `productIMG`, `productPrice`, `description`, `catid`, `brandid`, 'specific description') 
    VALUES ('$id','$name','$path','$price','$description','$category','$brand', '$specificDescription')" or die('cannot insert');
    query($sql);
  }
  if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    echo "<script> '" . $id . "' </script>";
    $sql = "delete from product where productId = '" . $id . "'";
    query($sql);
  }

  if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $path = $_POST['imageold'];

    if ($_FILES) {
      if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        $image = $_FILES['image']['name'];
        $path = "./upload/image/" . $image;
        move_uploaded_file($_FILES['image']['tmp_name'], $path);
      }
    }
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $specificDescription = $_POST['specificDescription'];
    $sql = "UPDATE `product` SET `productName`='$name',`productIMG`='$path'
    ,`productPrice`='$price',`description`='$description',`catid`='$category',`brandid`='$brand', `specific description`='$specificDescription' WHERE `productID` = '" . $id . "' ";
    query($sql);
  }
  ?>
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