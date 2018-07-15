<?php
  include 'includes/db/db.php';
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	if(isset($_SESSION['name']))
		header('Location: http://shenkar.html5-book.co.il/2017-2018/web1/dev_214/form.html');
		
  if(!empty($_POST["email"])){
    $query = "SELECT * FROM users_214 WHERE email='"
    . $_POST['email']
    . "'and password = '"
    . $_POST["password"]
    . "'";
    
    $result = mysqli_query($conn , $query);
    $row = mysqli_fetch_array($result);

    if(is_array($row)) {
      $_SESSION["name"] = $row["name"];
      $_SESSION["coupon"] = $row["coupon"];
      header('Location: http://shenkar.html5-book.co.il/2017-2018/web1/dev_214/form.html');
      //echo $_SESSION['user_id'];//not relavent because we redirect the page
    } else {
      header('Location: http://shenkar.html5-book.co.il/2017-2018/web1/dev_214/login.html');
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
	 crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="includes/style.css">
	<title>Clothes-Up</title>
</head>

<body class='login'>
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
          <a href="form.html">
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
	<div class="container">
		<form action="login.php" method="post">
			<div class="row">
				<div class="input-field col s6  offset-s3">
					<input id="email" type="email" name="email" class="validate">
					<label for="email">Email</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6  offset-s3">
					<input id="password" type="password" name="password" class="validate">
					<label for="password">Password</label>
				</div>
			</div>
			<div class="row">
				<button class="col s6 offset-s3 btn waves-effect waves-light" type="submit" name="action">Submit
				</button>
			</div>
		</form>
	</div>
	</div>
	</form>
	</div>
</body>

</html>