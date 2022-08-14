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

<body class="body" style="padding: 0; margin: 0; overflow-y: scroll">
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
          <label class="dropdownItem"> Xiaomi </label>
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
      <a href="login.php">
        <img style="margin-left: 420px" 1 src="Assets/Icons/user_icon.png" alt="" />
      </a>
      <img src="Assets/Icons/shopping-cart_icon.png" alt="" />
    </div>
  </div>
  <script src="index.js"></script>
  <div class="sideNavigationBar">
    <p>Device</p>
    <?php
    include_once('device.php');
    ?>
    <p> Brand </p>
    <?php
    include_once('brand.php');
    ?>
    <div class="moneyContainer">
      <p> Limit Price</p>
      <input type="text" placeholder="Min"> -
      <input type="text" placeholder="Max"></input></input>
    </div>
    <div class="starRating">
      <p>Star rating</p>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <input type="checkbox" class="oneStar">
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star "></span>
      <span class="fa fa-star "></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      </input> <br>
      <input type="checkbox" class="twoStar">
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star "></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      </input> <br>
      <input type="checkbox" class="threeStar">
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      </input> <br>
      <input type="checkbox" class="fourStar">
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      </input> <br>
      <input type="checkbox" class="fiveStar">
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      </input> <br>
    </div>
  </div>
  <div class="screenContainer">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum unde ad voluptatibus minus fugiat voluptatem provident sequi vero corporis? Ratione animi deserunt explicabo neque dolorem delectus ducimus obcaecati tempore.</p>
  </div>
</body>
</html>