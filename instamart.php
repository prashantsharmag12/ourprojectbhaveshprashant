<?php
session_start();
?>

<html>
<head>
<title>Instamart</title>
<link rel="stylesheet" type="text/css" href="main_css/instamart4.css" />
<link rel="stylesheet" type="text/css" href="main_css/sidenavbar.css" />
<link href="css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="main_css/tab.css"/>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script> 
<script src="js/dropdown.js"></script>
<link href="owl-carousel/owl.carousel.css" rel="stylesheet"> 
<link href="owl-carousel/owl.theme.default.css" rel="stylesheet">
<script src="owl-carousel/owl.carousel.js"></script>
<style>
#owl-demo #owl-trending .item img{
    display: block;
    width: 100%;
    height: auto;
}
</style>
</head>
<body style="background-color: rgb(240,240,240)">
<div id="instamart_header">
<p align="center">Instamart</p>
</div>


<div id="mySidenav" class="sidenav">
<div style="background-color: rgb(80,80,80); height: 90px">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span class="glyphicon glyphicon-remove"></span></a>
  <p align="center"><a href="login.php"><button type="button" class="btn btn-default" style="margin-top: 13px; font-size: 30px; color: white; background-color: rgb(80,80,80);">LOGIN</button></a></p>
</div>
<div style="background-color: white; height: 100%;">
  </br><a href="instamart.php">HOME</a></br>
  <span onclick="opensubNav()"  style="padding: 8px 8px 8px 32px; text-decoration: none; font-size: 30px; color: black; display: block; transition: 0.3s;"><strong>SHOP BY CATEGORY&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-menu-right"></span></strong></span></br>
  <a href="login.php">TERMS & PRIVACY</a></br>
  <a href="login.php">CAREER</a></br>
  <a href="login.php">IN NEWS</a></br>
  <a href="login.php">ABOUT</a>
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

   <a href="review-order.php"><button type="button" class="btn btn-default" style="color: black; font-size : 40px; background-color: rgb(100,150,10); height: 60px; border: none;"> 
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


</br></br>
<div id="owl-demo" class="owl-carousel owl-theme">
 
  <div class="item"><img src="images/outside1.jpg"></div>
  <div class="item"><img src="images/outside2.png"></div>
  <div class="item"><img src="images/outside3.jpg"></div>
 
</div>

<script>
$(document).ready(function() {

var owl = $('#owl-demo');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})

});
</script>

<div>
<p align="center" style="font-size: 40px; color: black;"><strong>Shop By Category</strong></p>
<table width="100%">
<tr>
<td width="33%"><a href="Fresh-Vegetables.php" style="text-decoration: none; color: black;"><img src="images/Fresh Vegetables.jpg" height="60%" width="100%"/><p align="center" style="background-color: white; font-size: 28px; padding-bottom: 6px;">Fresh Vegetables</p></a></td>
<td width="0.5%"></td>
<td width="33%"><a href="Fresh-Fruits.php" style="text-decoration: none; color: black;"><img src="images/Fresh Fruits.jpg" height="60%" width="100%"/><p align="center" style="background-color: white; font-size: 28px; padding-bottom: 6px;">Fresh Fruits</p></a></td>
<td width="0.5%"></td>
<td width="33%"><a href="Groceries.php" style="text-decoration: none; color: black;"><img src="images/Groceries.png" height="60%" width="100%"/><p align="center" style="background-color: white; font-size: 28px; padding-botttom: 6px;">Groceries</p></a></td>
</tr>
<tr>
<td width="33%"><a href="Bread-Dairy.php" style="text-decoration: none; color: black;"><img src="images/Bread Dairy.jpg" height="60%" width="100%"/><p align="center" style="background-color: white; font-size: 28px; padding-bottom: 6px;">Bread Dairy</p></a></td>
<td width="0.5%"></td>
<td width="33%"><a href="Household.php" style="text-decoration: none; color: black;"><img src="images/Household.jpg" height="60%" width="100%"/><p align="center" style="background-color: white; font-size: 28px; padding-bottom: 6px;">Household</p></a></td>
<td width="0.5%"></td>
<td width="33%"><a href="Stationary.php" style="text-decoration: none; color: black;"><img src="images/Stationary.jpg" height="60%" width="100%"/><p align="center" style="background-color: white; font-size: 28px; padding-bottom: 6px;">Stationary</p></a></td>
</tr>
</table>
</div></br>

<div>
<p align="center" style="font-size: 40px; color: black;"><strong>WHAT'S TRENDING</strong></p><hr style="width: 200px; background-color: black; border-style: inset; border-width: 1px; margin-top: -35px; margin-left: 100px; "><hr style="width: 200px; background-color: black; border-style: inset; border-width: 1px; margin-top: -25px; margin-right: 100px;">
</div></br> 

<div class="tab">
<div id="owl-trending" class="owl-carousel owl-theme">
  <div class="item"><button class="tablinks" onclick="openCity(event, 'Fresh Fruits')" id="defaultOpen">Fresh Fruits</button></div>
  <div class="item"><button class="tablinks" onclick="openCity(event, 'Fresh Vegetables')">Fresh Vegetables</button></div>
  <div class="item"><button class="tablinks" onclick="openCity(event, 'Groceries')">Groceries</button></div>
  <div class="item"><button class="tablinks" onclick="openCity(event, 'Bread Dairy')">Bread Dairy</button></div>
  <div class="item"><button class="tablinks" onclick="openCity(event, 'Household')">Household</button></div>
  <div class="item"><button class="tablinks" onclick="openCity(event, 'Stationary')">Stationary</button></div>
</div>  
</div>

<script>
$(document).ready(function() {
 
  $("#owl-trending").owlCarousel({
      slideSpeed : 300,
      paginationSpeed : 400,
      items : 3, 
  });
 
});
</script>

<div id="Fresh Fruits" class="tabcontent">

<div>
<div style="background-color: white; color: 003366; font-size: 40px; height: 100px;">
<p style="padding-top: 22px;"><strong>&nbsp&nbsp&nbsp&nbsp&nbspFresh Fruits</strong></p>
<p align="right"><a href="Fresh-Fruits.php"><button type="button" class="btn btn-default" style="font-size: 32px; color: white; background-color: 003366; margin-top: -140px;">View All</button></a>&nbsp&nbsp&nbsp&nbsp</p>
</div></br>

<div style="background-color: white;"> 
<?php
$results = $mysqli->query("SELECT product_code, product_name, product_img_name, price1, price500, price250, price2 FROM TrendFreshFruits ORDER BY id ASC");
if($results){ 
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	<form method="post" action="php/cart-trend-fresh-fruits.php">
	<div class="media">
        <div class="pull-left"> 
           <img style="width: 300px; height: 300px;" class="media-object" src="images/{$obj->product_img_name}" alt="Media Object">
        </div> 
        <div class="media-body">
        <h1 class="media-heading"><strong>{$obj->product_name}</strong></h1></br>
        <fieldset style="font: 32px arial;">
        <label>
                <select name="product_desc" style="width: 500px; height: 55px; background-color: transparent; color: 003366; border-color: 003366;">
		<option value="1 kg">1 kg &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price1}</option>
		<option value="500 gm">500 gm &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price500}</option>
                <option value="250 gm">250 gm &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price250}</option>
		<option value="2 kg">2 kg &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price2}</option>
		</select>
	</label>
        </fieldset>
        </br></br>
	<fieldset style="font: 32px bold arial;">
	<label>
		<span>Quantity</span>
		<input type="text" size="2" maxlength="2" name="product_qty" value="1" />
	</label>
	</fieldset>

	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
        <p align="right"><button type="submit" class="btn btn-default" style="font-size: 32px; color: white; background-color: 003366; margin-top: px;">Add</button>&nbsp&nbsp&nbsp&nbsp&nbsp</p>
        </div>
        </div>
	</form>
     </br>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>  
</div>  
</div>

</div>


<div id="Fresh Vegetables" class="tabcontent">

<div>
<div style="background-color: white; color: 003366; font-size: 40px; height: 100px;">
<p style="padding-top: 22px;"><strong>&nbsp&nbsp&nbsp&nbsp&nbspFresh Vegetables</strong></p>
<p align="right"><a href="Fresh-Vegetables.php"><button type="button" class="btn btn-default" style="font-size: 32px; color: white; background-color: 003366; margin-top: -140px;">View All</button></a>&nbsp&nbsp&nbsp&nbsp</p>
</div></br>

<div style="background-color: white;"> 
<?php
$results = $mysqli->query("SELECT product_code, product_name, product_img_name, price1, price500, price250, price2 FROM TrendFreshVegetables ORDER BY id ASC");
if($results){ 
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	<form method="post" action="php/cart-trend-fresh-vegetables.php">
	<div class="media">
        <div class="pull-left"> 
           <img style="width: 300px; height: 300px;" class="media-object" src="images/{$obj->product_img_name}" alt="Media Object">
        </div> 
        <div class="media-body">
        <h1 class="media-heading"><strong>{$obj->product_name}</strong></h1></br>
        <fieldset style="font: 32px arial;">
        <label>
		<select name="product_desc" style="width: 500px; height: 55px; background-color: transparent; color: 003366; border-color: 003366;">
		<option value="1 kg">1 kg &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price1}</option>
		<option value="500 gm">500 gm &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price500}</option>
                <option value="250 gm">250 gm &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price250}</option>
		<option value="2 kg">2 kg &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price2}</option>
		</select>
	</label>
        </fieldset>
        </br></br>
	<fieldset style="font: 32px bold arial;">
	<label>
		<span>Quantity</span>
		<input type="text" size="2" maxlength="2" name="product_qty" value="1" />
	</label>
	</fieldset>

	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
        <p align="right"><button type="submit" class="btn btn-default" style="font-size: 32px; color: white; background-color: 003366; margin-top: px;">Add</button>&nbsp&nbsp&nbsp&nbsp&nbsp</p>
        </div>
        </div>
	</form>
     </br>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>  
</div>  
</div>

</div>


<div id="Groceries" class="tabcontent">

<div>
<div style="background-color: white; color: 003366; font-size: 40px; height: 100px;">
<p style="padding-top: 22px;"><strong>&nbsp&nbsp&nbsp&nbsp&nbspGroceries</strong></p>
<p align="right"><a href="Groceries.php"><button type="button" class="btn btn-default" style="font-size: 32px; color: white; background-color: 003366; margin-top: -140px;">View All</button></a>&nbsp&nbsp&nbsp&nbsp</p>
</div></br>

<div style="background-color: white;"> 
<?php
$results = $mysqli->query("SELECT product_code, product_name, product_img_name, price1, price500, price250, price2 FROM TrendGroceries ORDER BY id ASC");
if($results){ 
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	<form method="post" action="php/cart-trend-groceries.php">
	<div class="media">
        <div class="pull-left"> 
           <img style="width: 300px; height: 300px;" class="media-object" src="images/{$obj->product_img_name}" alt="Media Object">
        </div> 
        <div class="media-body">
        <h1 class="media-heading"><strong>{$obj->product_name}</strong></h1></br>
        <fieldset style="font: 32px arial;">
        <label>
		<select name="product_desc" style="width: 500px; height: 55px; background-color: transparent; color: 003366; border-color: 003366;">
		<option value="1 kg">1 kg &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price1}</option>
		<option value="500 gm">500 gm &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price500}</option>
                <option value="250 gm">250 gm &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price250}</option>
		<option value="2 kg">2 kg &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price2}</option>
		</select>
	</label>
        </fieldset>
        </br></br>
	<fieldset style="font: 32px bold arial;">
	<label>
		<span>Quantity</span>
		<input type="text" size="2" maxlength="2" name="product_qty" value="1" />
	</label>
	</fieldset>

	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
        <p align="right"><button type="submit" class="btn btn-default" style="font-size: 32px; color: white; background-color: 003366; margin-top: px;">Add</button>&nbsp&nbsp&nbsp&nbsp&nbsp</p>
        </div>
        </div>
	</form>
     </br>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>  
</div>  
</div>
<div style="padding-top: 40px; padding-bottom: 40px;">
<p align="center"><img src="images/not-available.jpg" style="width: 100%;"/></p>
</div>

</div>

<div id="Bread Dairy" class="tabcontent">

<div>
<div style="background-color: white; color: 003366; font-size: 40px; height: 100px;">
<p style="padding-top: 22px;"><strong>&nbsp&nbsp&nbsp&nbsp&nbspBread Dairy</strong></p>
<p align="right"><a href="Bread-Dairy.php"><button type="button" class="btn btn-default" style="font-size: 32px; color: white; background-color: 003366; margin-top: -140px;">View All</button></a>&nbsp&nbsp&nbsp&nbsp</p>
</div></br>

<div style="background-color: white;"> 
<?php
$results = $mysqli->query("SELECT product_code, product_name, product_img_name, price1, price500, price250, price2 FROM TrendBreadDairy ORDER BY id ASC");
if($results){ 
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	<form method="post" action="php/cart-trend-bread-dairy.php">
	<div class="media">
        <div class="pull-left"> 
           <img style="width: 300px; height: 300px;" class="media-object" src="images/{$obj->product_img_name}" alt="Media Object">
        </div> 
        <div class="media-body">
        <h1 class="media-heading"><strong>{$obj->product_name}</strong></h1></br>
        <fieldset style="font: 32px arial;">
        <label>
		<select name="product_desc" style="width: 500px; height: 55px; background-color: transparent; color: 003366; border-color: 003366;">
		<option value="1 kg">1 kg &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price1}</option>
		<option value="500 gm">500 gm &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price500}</option>
                <option value="250 gm">250 gm &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price250}</option>
		<option value="2 kg">2 kg &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price2}</option>
		</select>
	</label>
        </fieldset>
        </br></br>
	<fieldset style="font: 32px bold arial;">
	<label>
		<span>Quantity</span>
		<input type="text" size="2" maxlength="2" name="product_qty" value="1" />
	</label>
	</fieldset>

	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
        <p align="right"><button type="submit" class="btn btn-default" style="font-size: 32px; color: white; background-color: 003366; margin-top: px;">Add</button>&nbsp&nbsp&nbsp&nbsp&nbsp</p>
        </div>
        </div>
	</form>
     </br>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>  
</div>  
</div>
<div style="padding-top: 40px; padding-bottom: 40px;">
<p align="center"><img src="images/not-available.jpg" style="width: 100%;"/></p>
</div>

</div>

<div id="Household" class="tabcontent">

<div>
<div style="background-color: white; color: 003366; font-size: 40px; height: 100px;">
<p style="padding-top: 22px;"><strong>&nbsp&nbsp&nbsp&nbsp&nbspHousehold</strong></p>
<p align="right"><a href="Household.php"><button type="button" class="btn btn-default" style="font-size: 32px; color: white; background-color: 003366; margin-top: -140px;">View All</button></a>&nbsp&nbsp&nbsp&nbsp</p>
</div></br>

<div style="background-color: white;"> 
<?php
$results = $mysqli->query("SELECT product_code, product_name, product_img_name, price1, price500, price250, price2 FROM TrendHousehold ORDER BY id ASC");
if($results){ 
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	<form method="post" action="php/cart-trend-household.php">
	<div class="media">
        <div class="pull-left"> 
           <img style="width: 300px; height: 300px;" class="media-object" src="images/{$obj->product_img_name}" alt="Media Object">
        </div> 
        <div class="media-body">
        <h1 class="media-heading"><strong>{$obj->product_name}</strong></h1></br>
        <fieldset style="font: 32px arial;">
        <label>
		<select name="product_desc" style="width: 500px; height: 55px; background-color: transparent; color: 003366; border-color: 003366;">
		<option value="1 kg">1 kg &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price1}</option>
		<option value="500 gm">500 gm &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price500}</option>
                <option value="250 gm">250 gm &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price250}</option>
		<option value="2 kg">2 kg &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rs. {$currency}{$obj->price2}</option>
		</select>
	</label>
        </fieldset>
        </br></br>
	<fieldset style="font: 32px bold arial;">
	<label>
		<span>Quantity</span>
		<input type="text" size="2" maxlength="2" name="product_qty" value="1" />
	</label>
	</fieldset>

	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
        <p align="right"><button type="submit" class="btn btn-default" style="font-size: 32px; color: white; background-color: 003366; margin-top: px;">Add</button>&nbsp&nbsp&nbsp&nbsp&nbsp</p>
        </div>
        </div>
	</form>
     </br>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>  
</div>  
</div>
<div style="padding-top: 40px; padding-bottom: 40px;">
<p align="center"><img src="images/not-available.jpg" style="width: 100%;"/></p>
</div>

</div>

<div id="Stationary" class="tabcontent">

<div>
<div style="background-color: white; color: 003366; font-size: 40px; height: 100px;">
<p style="padding-top: 22px;"><strong>&nbsp&nbsp&nbsp&nbsp&nbspStationary</strong></p>
<p align="right"><a href="Stationary.php"><button type="button" class="btn btn-default" style="font-size: 32px; color: white; background-color: 003366; margin-top: -140px;">View All</button></a>&nbsp&nbsp&nbsp&nbsp</p>
</div></br>

<div style="background-color: white;"> 
<?php
$results = $mysqli->query("SELECT product_code, product_name, product_desc, product_img_name, price FROM TrendStationary ORDER BY id ASC");
if($results){ 
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	<form method="post" action="php/cart-trend-stationary.php">
	<div class="media">
        <div class="pull-left"> 
           <img style="width: 300px; height: 300px;" class="media-object" src="images/{$obj->product_img_name}" alt="Media Object">
        </div> 
        <div class="media-body">
        <h1 class="media-heading"><strong>{$obj->product_name}</strong></h1></br>
        <p name="product_desc" style="width: 500px; height: 55px; background-color: transparent; color: 003366; border-color: 003366;">{$obj->product_name}</p>
        <p name="price" style="width: 500px; height: 55px; background-color: transparent; color: 003366; border-color: 003366;">Rs. {$currency}{$obj->price1}</p>
        </br>
	<fieldset style="font: 32px bold arial;">
	<label>
		<span>Quantity</span>
		<input type="text" size="2" maxlength="2" name="product_qty" value="1" />
	</label>
	</fieldset>

	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
        <p align="right"><button type="submit" class="btn btn-default" style="font-size: 32px; color: white; background-color: 003366; margin-top: px;">Add</button>&nbsp&nbsp&nbsp&nbsp&nbsp</p>
        </div>
        </div>
	</form>
     </br>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>  
</div>  
</div>
<div style="padding-top: 40px; padding-bottom: 40px;">
<p align="center"><img src="images/not-available.jpg" style="width: 100%;"/></p>
</div>

</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

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