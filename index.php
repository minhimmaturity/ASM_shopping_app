<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="asm.css" />
    <title>
      ElectricShop (Phone, Laptop, PC and electric devices to everyone)
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body style="padding: 0; margin: 0">
    <div class="navBar">
      <div class="logoContainer">
        <img src="Assets/Images/electric-shop.png" alt="" />
      </div>
      <div class="dropdownContainer">
        <div class="dropdown">
          <button class="dropbtn" id="deviceDropdownBtn">Devices</button>
          <div class="dropdown-content" id="deviceDropdownContent">
            <label class="dropdownItem"> Smart Phone</label>
            <label class="dropdownItem"> Laptop</label>
            <label class="dropdownItem"> Tablet</label>
            <label class="dropdownItem"> HeadPhone</label>
            <label class="dropdownItem"> Watch</label>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn" id="brandDropdownBtn">Brand</button>
          <div class="dropdown-content" id="brandDropdownContent">
            <label class="dropdownItem"> Apple </label>
            <label class="dropdownItem"> Samsung </label>
            <label class="dropdownItem"> Xiaomi  </label>
            <label class="dropdownItem"> MSI </label>
            <label class="dropdownItem"> Microsoft </label>
            <label class="dropdownItem"> DELL </label>
            <label class="dropdownItem"> Coros </label>
          </div>
        </div>
      </div>
      <form class="inputForm">
        <input type="text" placeholder="Enter devices" />
        <img src="Assets/Icons/search_icon.png" />
      </form>
      <div class="customerAreaContainer">
        <a href = "login.php">
        <img style = "margin-left: 420px"1 src="Assets/Icons/user_icon.png" alt=""/>
        </a>
        <img src="Assets/Icons/shopping-cart_icon.png" alt="" />
      </div>
    </div>
    <script src="index.js"></script>
    <!-- <div class = "chooseItemContainer"> --> 
      <!-- <label class="dropdownItem"> Smart Phone</label> <br> -->
      <!-- <label class="dropdownItem"> Laptop </label> <br> -->
      <!-- <label class="dropdownItem"> Tablet</label> <br> -->
      <!-- <label class="dropdownItem"> HeadPhone</label> <br> -->
      <!-- <label class="dropdownItem"> Watch</label> <br> -->
    <!-- </div> -->
  </body>
  <body></body>
</html>
