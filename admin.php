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
      $sql = "select * from category";
      $device = query($sql);
      ?>
      <div class="devicesContainer">
        <?php
        for ($i = 0; $i < count($device); $i++) {
        ?>
          <a href="admin.php?catid=<?= $device[$i][0] ?>">
            <div class="dropdownItem"> <?= $device[$i][1] ?> </div> <br>
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
        $sql = "select * from product";
        $product = query($sql);
        ?>
        <?php
        for ($i = 0; $i < count($product); $i++) {
        ?>
          <thead>
            <tr>
              <th style="width: 150px"> <img class="imgSize" src="<?= $product[$i][2] ?>"> </th>
              <th > <?= $product[$i][1] ?> </th>
              <th > <?= $product[$i][3] ?> </th>
              <th > <?= $product[$i][4] ?> </th>
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
    <div class="addScreen">

    </div>
  </div>
</body>

</html>