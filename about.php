<?php
session_start();
include_once 'php/config.php';
?>


<html>
<head>
<title>Instamart | About</title>
<link rel="stylesheet" type="text/css" href="main_css/instamart4.css" />
<link rel="stylesheet" type="text/css" href="main_css/sidenavbar.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script> 
<script src="js/dropdown.js"></script>
</head>
<body style="background-color: rgb(240,240,240)">
<div id="instamart_header">
<p align="center">Instamart</p>
</div>


<div id="mySidenav" class="sidenav">
<div style="background-color: rgb(80,80,80); height: 90px">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span class="glyphicon glyphicon-remove"></span></a>
  <p align="center"><a href="my-account.php"><button type="button" class="btn btn-default" style="margin-top: 13px; font-size: 30px; color: white; background-color: rgb(80,80,80);"><span class="glyphicon glyphicon-user"></span> MY ACCOUNT</button></a></p>
</div>
<div style="background-color: white; height: 100%;">
  </br><a href="account.php">HOME</a></br>
  <span onclick="opensubNav()"  style="padding: 8px 8px 8px 32px; text-decoration: none; font-size: 30px; color: black; display: block; transition: 0.3s;"><strong>SHOP BY CATEGORY&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-menu-right"></span></strong></span></br>
  <a href="terms-privacy.php">TERMS & PRIVACY</a></br>
  <a href="career.php">CAREER</a></br>
  <a href="news.php">IN NEWS</a></br>
  <a href="about.php">ABOUT</a>
</div>
</div>

<div id="mysubSidenav" class="sidenav">
<div style="background-color: rgb(80,80,80); height: 120px;">
  <a href="javascript:void(0)" onclick="closesubNav()" style="padding: 8px 8px 8px 32px; font-size: 30px; color: white; text-decoration: none; display: block; transition: 0.3s;"><span class="glyphicon glyphicon-arrow-left"></span> Main Menu</a>
  <p style="padding: 8px 8px 8px 32px; font-size: 30px; color: white; width: 500px"><strong>SHOP BY CATEGORY</strong></p>
</div>
<div style="background-color: white; height: 100%;">
</br><div class="dropdown"> 
   <a class="dropdown-toggle" data-toggle="dropdown"><strong>Vegetables & Fruits&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-menu-down"></span></strong></a> 
   <ul class="dropdown-menu" role="menu"> 
      <li role="presentation"> 
         <a role="menuitem" href="Fresh-Vegetables.php">Fresh Vegetables</a> 
      </li> 
	  <li role="presentation" class="divider"></li>
      <li role="presentation"> 
         <a role="menuitem" href="Fresh-Fruits.php">Fresh Fruits</a> 
      </li> 
   </ul>
</div>
</br><div class="dropdown"> 
   <a class="dropdown-toggle" data-toggle="dropdown"><strong>Groceries&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-menu-down"></span></strong></a> 
   <ul class="dropdown-menu multi-column columns-2">
   <div class="row">
      <div class="col-sm-6">
      <ul class="multi-column-dropdown">
	  <li role="presentation"> 
         <a role="menuitem" href="Groceries.php">Dals & Pules</a> 
      </li> 
	  <li class="divider"></li>
      <li role="presentation"> 
         <a role="menuitem" href="Groceries.php">Dry Fruits</a> 
      </li> 
	  <li class="divider"></li>
      <li role="presentation"> 
         <a role="menuitem" href="Groceries.php">Edible Oils & Ghee</a> 
      </li> 
	  <li class="divider"></li>
      <li role="presentation"> 
         <a role="menuitem" href="Groceries.php">Salt, Sugar & Jaggery</a> 
      </li> 
	  <li class="divider"></li>
	  <li role="presentation"> 
         <a role="menuitem" href="Groceries.php">Masalas & Spices</a> 
      </li>
	  <li class="divider"></li>
	  <li role="presentation"> 
         <a role="menuitem" href="Groceries.php">Tea & Coffee</a> 
      </li>
	  <li class="divider"></li>
	  <li role="presentation"> 
         <a role="menuitem" href="Groceries.php">Flours & Sooji</a> 
      </li>
		    </ul>
			</div>
			<div class="col-sm-6">
		    <ul class="multi-column-dropdown">
	  <li role="presentation"> 
         <a role="menuitem" href="Groceries.php">Rice & Poha</a> 
      </li>
	  <li class="divider"></li>
	  <li role="presentation"> 
         <a role="menuitem" href="Groceries.php">Noodles & Pasta</a> 
      </li>
	  <li class="divider"></li>
	  <li role="presentation"> 
         <a role="menuitem" href="Groceries.php">Sauces & Ketchup</a> 
      </li>
	  <li class="divider"></li>
	  <li role="presentation"> 
         <a role="menuitem" href="Groceries.php">Soft Drinks</a> 
      </li>
	  <li class="divider"></li>
	  <li role="presentation"> 
         <a role="menuitem" href="Groceries.php">Biscuits & Cookies</a> 
      </li>
	  <li class="divider"></li>
	  <li role="presentation"> 
         <a role="menuitem" href="Groceries.php">Chocolates</a> 
      </li>
			</ul>
			</div>
    </div>
    </ul> 
</div>
</br><div class="dropdown"> 
   <a class="dropdown-toggle" data-toggle="dropdown"><strong>Bread Dairy&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-menu-down"></span></strong></a> 
    <ul class="dropdown-menu" role="menu"> 
      <li role="presentation"> 
         <a role="menuitem" href="Bread-Dairy.php">Bread & Bakery</a> 
      </li> 
	  <li role="presentation" class="divider"></li>
      <li role="presentation"> 
         <a role="menuitem" href="Bread-Dairy.php">Milk</a> 
      </li> 
	  <li role="presentation" class="divider"></li>
      <li role="presentation"> 
         <a role="menuitem" href="Bread-Dairy.php">Yougurt, Lassi & Cheese</a> 
      </li>
   </ul> 
</div>
</br><div class="dropdown"> 
   <a class="dropdown-toggle" data-toggle="dropdown"><strong>Household&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-menu-down"></span></strong></a> 
    <ul class="dropdown-menu" role="menu"> 
      <li role="presentation"> 
         <a role="menuitem" href="Household.php">Liquid Soaps & Bars</a> 
      </li> 
	  <li role="presentation" class="divider"></li>
      <li role="presentation"> 
         <a role="menuitem" href="Household.php">Toothpaste</a> 
      </li> 
	  <li role="presentation" class="divider"></li>
      <li role="presentation"> 
         <a role="menuitem" href="Household.php">Detergents</a>
      </li>
	  <li role="presentation" class="divider"></li>
      <li role="presentation"> 
         <a role="menuitem" href="Household.php">Dishwash Bars</a> 
      </li> 
	  <li role="presentation" class="divider"></li>
      <li role="presentation"> 
         <a role="menuitem" href="Household.php">Sampoo & Conditioner</a> 
      </li>	  
	  <li role="presentation" class="divider"></li>
      <li role="presentation"> 
         <a role="menuitem" href="Household.php">Repellents & Freshners</a>
      </li>
	  <li role="presentation" class="divider"></li>
      <li role="presentation"> 
         <a role="menuitem" href="Household.php">Toilet, Floor & Other Cleaners</a> 
      </li> 
	  <li role="presentation" class="divider"></li>
      <li role="presentation"> 
         <a role="menuitem" href="Household.php">Pooja Needs & Match-Box</a> 
      </li>
   </ul> 
</div>
</br><div class="dropdown"> 
   <a class="dropdown-toggle" data-toggle="dropdown"><strong>Stationary&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-menu-down"></span></strong></a> 
    <ul class="dropdown-menu" role="menu"> 
      <li role="presentation"> 
         <a role="menuitem" href="Stationary.php">Cycle</a> 
      </li> 
	  <li role="presentation" class="divider"></li>
      <li role="presentation"> 
         <a role="menuitem" href="Stationary.php">Notebook</a> 
      </li> 
	  <li role="presentation" class="divider"></li>
      <li role="presentation"> 
         <a role="menuitem" href="Stationary.php">Pen & Staionaries</a> 
      </li>
   </ul> 
</div>
</div>
</div>

<div id="navbarbtn">
<span onclick="openNav()"><span class="glyphicon glyphicon-align-justify"></span></span>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "520px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
function opensubNav() {
    document.getElementById("mysubSidenav").style.width = "520px";
}

function closesubNav() {
    document.getElementById("mysubSidenav").style.width = "0";
}
</script>


<div style="margin-top: -55px; float: right;">

<?php
include_once("php/config.php");

//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?> 

   <a href="account-order.php"><button type="button" class="btn btn-default" style="color: black; font-size : 40px; background-color: rgb(100,150,10); height: 60px; border: none;"> 
        <span class="glyphicon glyphicon-shopping-cart"></span>
	    <?php
	    
		if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>=0)
		{
	  	$total=0;
		$add_product=0;
	    foreach ($_SESSION["cart_products"] as $cart_itm)
	    {
		$product_name = $cart_itm["product_name"];
		$product_qty = $cart_itm["product_qty"];
		$product_price = $cart_itm["product_price"];
		$add_product=$add_product+$product_qty;
		$subtotal = ($product_price * $product_qty);
		$total = ($total + $subtotal);
	    }
	    echo "$add_product";
	    }
		
		else
		{
			echo "0";			
		}
	  
	    ?>
            </button></a>
</div>
</br>

<div style="background-color: #FFDEAD; color: 003366; font-size: 40px;  padding-top: 5px; padding-bottom: 5px;">
<p align="center"><strong>About</strong></p>
</div>

<div>
</div>

<div style="background-color: 3399FF; color: white; font-size: 30px; padding-top: 10px; padding-bottom: 10px;">
<h1>You can track your order by calling or sending <strong>SMS INSTAMART ORDER YOURORDER WITH DISCRIPTION</strong> to 8896585605.</h1>
<h1>Share your valuable feedback by sending <strong>SMS INSTAMART FEEDBACK YOURFEEDBACK</strong> to <strong>8896585605</strong> or send email to </h1>
<h1><strong>instamart.ecommerce@gmail.com.</strong></h1>
<h1><img src="images/whatsapp.jpg" alt="Whatsapp" style="width: 7%; border-radius: 50%;"/> Whatsapp Number: <strong>8290049156.<strong></h1>
</div>

<div style="background-color: rgb(22,22,22);">
</br>
<ul  align="center"> 
     <p style="font-size: 35px; color: rgb(190,190,190);"><strong>GET IN TOUCH WITH US</strong><p>
     <p style="font-size: 32px; color: rgb(190,190,190);">Indian Institute Of Technology(BHU) Varanasi</br>
     Varanasi, Uttar-Pradesh 303030</p>
     <p style="font-size: 32px; color: rgb(190,190,190);"><img src="images/call.png" alt="Call" class="call"/> <strong>8896585605</strong></p>
     <p style="font-size: 32px; color: rgb(190,190,190);"><img src="images/emaillogo.png" alt="Email" class="email"/> <strong>instamart.ecommerce@gmail.com</strong></p>
</ul>
<p align="center">
         <a href="#"><img src="images/facebook.png" alt="Facebook" class="facebook"/><a>
	 <a href="#"><img src="images/twitter.png" alt="Twitter" class="twitter"/><a>
	 <a href="#"><img src="images/instagram.png" alt="Instagram" class="instagram"/><a>
	 <a href="#"><img src="images/google.jpg" alt="Google+" class="google"/><a>
	 <a href="#"><img src="images/youtube.png" alt="Youtube" class="youtube"/><a>
	 <a href="#"><img src="images/linkedin.png" alt="Linkedin" class="linkedin"/><a>
</p></br>
</div>

<div style="font-size: 32px; color: white; background-color: rgb(32,32,32); padding-top: 35px;">
<p align="center">Copyright © 2017 Instamart. All Rights Reserved.</p> 
</br>
</div>

</body>
</html>