<?php
  include 'includes/db/db.php';
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
    crossorigin="anonymous">
  <link rel="stylesheet" href="includes/style.css">

  <title>Clothes-Up</title>
</head>

<body>
  <nav class="nav-extended">
    <div id="mainNav" class="nav-wrapper">
      <a href="index.html" class="brand-logo center"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger">
        <i class="fas fa-bars"></i>
      </a>
      <ul id="nav-mobile" class="right">
        <li>
          <a href="#">
            <i class="fas fa-search"></i>
          </a>
        </li>
        <li>
          <a href="login.php">
            <i class="fas fa-clipboard"></i>
          </a>
        </li>
        <li>
          <a href="cart.php">
            <i class="fas fa-shopping-cart"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-bell"></i>
          </a>
        </li>
      </ul>
    </div>
    <div class="nav-content white">
      <ul class="tabs tabs-transparent">
        <li class="tab">
          <a class="black-text active" href="index.html" target="_self">ALL</a>
        </li>
        <li class="tab">
          <a class="black-text" href="items.html" target="_self">MEN</a>
        </li>
        <li class="tab">
          <a class="black-text" href="items.html" target="_self">WOMEN</a>
        </li>
        <li class="tab">
          <a class="black-text" href="items.html" target="_self">KIDS</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- BREAD CRUMBS -->
  <div>
    <a href=""></a>
    <a href=""></a>
    <a href=""></a>
  </div>
  <!-- SIDE NAVBAR     -->
  <ul class="sidenav" id="mobile-demo">
    <li>
      <div class="asymmetric">
        <img src="images/face.jpg" id='profile-pic' alt="">
      </div>
    </li>
    <li>
      <a href="sass.html">friends</a>
    </li>
    <li>
      <a href="badges.html">gallery</a>
    </li>
    <li>
      <a href="collapsible.html">history</a>
    </li>
    <li>
      <a href="collapsible.html">closet</a>
    </li>
    <li>
      <a href="collapsible.html">premium</a>
    </li>
    <li>
      <a href="collapsible.html">help center</a>
    </li>
  </ul>
  <main>
    <div class="section container">
      <h1>
        <i class="fas fa-shopping-cart"></i> <?php if(isset($_SESSION["name"])) {echo $_SESSION["name"];} else {echo "My ";}?> Cart</h1>
      <table class="highlight responsive-table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Color</th>
            <th>Size</th>
            <th>Update</th>
            <th>Remove</th>
          </tr>
        </thead>

        <tbody>
        </tbody>
      </table>
      <div class="row">
        <div class="col s6 m4 l4 section sum">
          <span>TOTAL  </span><span id="totalSum"></span>
          <div class="divider"></div>
          <input id="coupon" type="text" placeholder="coupon">
          <a id="checkout" class="col s12 l12 waves-effect waves-light btn-large white-text amber darken-1">CHECK OUT</a>
        </div>
      </div>
    <!-- Modal Structure -->
    <div id="modal1" class="item modal">
      <div class="modal-img">
        <img src="images/model1.jpg" alt="">
      </div>
      <div class="modal-contant container">
        <h5></h5>
        <h6></h6>
        <span>Catalog number: </span>
        <span id="item_id" class="section"></span>
        <div class="section row">
          <p class="col l2">
            <label>
              <input name="group2" type="radio" value="blue" checked />
              <span id="blue"></span>
            </label>
          </p>
          <p class="col l2">
            <label>
              <input name="group2" type="radio" value="yellow" />
              <span class="checkmark" id="yellow"></span>
            </label>
          </p>
          <p class="col l2">
            <label>
              <input name="group2" type="radio" value="red" />
              <span id="red"></span>
            </label>
          </p>
          <div class="section input-field col s12">
            <select>
              <option value="" disabled selected>Choose Size</option>
              <option value="S">S</option>
              <option value="M">M</option>
              <option value="L">L</option>
            </select>
          </div>
          <a id="confirm" class="col s12 m12 l12 modal-close waves-effect waves-light btn white-text center">CONFIRM</a>
        </div>
      </div>
    </div>

  </main>

           
  <footer class="page-footer ">
    <div class="container">
      <div class="row">
        <div class="col l6 s6">
          <h5 class="white-text">HELP AND INFORMATION</h5>
          <ul>
            <li>
              <a class="grey-text text-lighten-3" href="#!">Help</a>
            </li>
            <li>
              <a class="grey-text text-lighten-3" href="#!">Delivery Information</a>
            </li>
            <li>
              <a class="grey-text text-lighten-3" href="#!">Student Discount</a>
            </li>
            <li>
              <a class="grey-text text-lighten-3" href="#!">Size Guide</a>
            </li>
          </ul>
        </div>
        <div class="col l4 offset-l2 s6">
          <h5 class="white-text">ABOUT US</h5>
          <ul>
            <li>
              <a class="grey-text text-lighten-3" href="#!">Privacy Policy</a>
            </li>
            <li>
              <a class="grey-text text-lighten-3" href="#!">About Clothes-Up</a>
            </li>
            <li>
              <a class="grey-text text-lighten-3" href="#!">Contact</a>
            </li>
            <li>
              <a class="grey-text text-lighten-3" href="#!">Offices</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2018 Clothes-Up
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      </div>
    </div>
  </footer>
  <script src="includes/js/app.js"></script>
  <script src="includes/js/cart.js"></script>

</body>

</html>