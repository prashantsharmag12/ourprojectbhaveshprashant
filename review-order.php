<?php
session_start();
?>

<html>
<head>
<title>Instamart | Review Order</title>
<link rel="stylesheet" type="text/css" href="main_css/my_index.css"/>
<link href="css/bootstrap.min.css" rel="stylesheet"> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: rgb(240,240,240)">
<div id="review-order">
    <div style="background-color: rgb(100,150,10); color: black; font: 40px bold arial; height: 125px; width: 980px; padding-top: 30px;">
      <p align="center">Review Order</p>
    </div>
    <div style="margin-top: -100px; margin-left: 25px;"><a href="instamart.php" class="login_arrow"><span class="glyphicon glyphicon-arrow-left"></span></a></div>

<div style="background-color: white; color: rgb(100,150,10); font: 32px arial; padding-top: 12px; padding-bottom: 5px;">
<?php

include_once("php/config.php");

//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?> 
   <p align="center" id="cart_btn"> 
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
	    echo "$add_product ITEM(S)-";
		echo "RS $total";
	    }
		
		else
		{
		    echo "0 ITEM(S)-";
		    echo "RS 0";			
		}
	  
	    ?>
   </p>
   <hr style="background-color: rgb(120,120,120); height: 0.2px;">
</div>

<?php

if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
{
if($total<250){
$delivery_charges = 39;
}

else if($total>=250){
$delivery_charges = 29;
}

echo '<div style="background-color: white; font: 32px arial; height: 105px;">
<p style="color: rgb(50,50,50);">&nbsp&nbsp&nbsp&nbspSub Total</p><p align="right" style="color: rgb(50,50,50); margin-top: -50px;"><i class="fa fa-inr"></i> '.$total.'&nbsp&nbsp&nbsp&nbsp</p>
<p style="color: rgb(50,50,50);">&nbsp&nbsp&nbsp&nbspDelivery Charges</p><p align="right" style="color: red; margin-top: -50px;">+ <i class="fa fa-inr"></i> '.$delivery_charges.'&nbsp&nbsp&nbsp&nbsp</p>
<hr style="background-color: rgb(120,120,120); height: 0.2px;">
</div>';

}

?>

<div style="background-color: white;">
</br></br>
<form method="post" action="php/cart-trend-fresh-vegetables.php">';
<?php

	if(isset($_SESSION["cart_products"])) //check session var
        {
	$total = 0; //set initial total value 
	foreach ($_SESSION["cart_products"] as $cart_itm)
        {
			//set variables to use in content below
			$product_name = $cart_itm["product_name"];
			$product_qty = $cart_itm["product_qty"];
                        $product_price = $cart_itm["product_price"];
                        $product_desc = $cart_itm["product_desc"];
                        $product_img_name = $cart_itm["product_img_name"];
			$product_code = $cart_itm["product_code"];
			$subtotal = ($product_price * $product_qty); //calculate Price x Qty
                        echo '<div class="media">';
                        echo '<div class="pull-left">'; 
                        echo '<img style="width: 300px; height: 300px;" class="media-object" src="images/'.$product_img_name.'" alt="Media Object">';
                        echo '</div>'; 
                        echo '<div class="media-body">';
                        echo '<h1 class="media-heading"><strong>'.$product_name.'</strong></h1>'; 
                        echo '<p align="right" style="color: black; font: 32px bold arial; margin-top: -50px;">Remove <input type="checkbox" name="remove_code[]" value="'.$product_code.'" />&nbsp&nbsp</p>';
	                echo '<p style="font: 32px bold arial;">'.$product_desc.'</p>';
	                echo '<p style="font: 32px arial;"><strong>Rs. '.$currency.$product_price.'</strong></p></br>';
                        echo '<fieldset style="font: 32px bold arial;">';
	                echo '<label>';
		        echo '<span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspQuantity';
		        echo '<input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" style="width: 90px;"/>';
                        echo '</label>';
	                echo '</fieldset>';
                        echo '<span class="glyphicon glyphicon-remove" style="font-size: 30px; margin-top: -58px; -webkit-text-stroke: 0.1px;"></span>';
                        echo '<p align="right" style="color: black; font: 32px arial; margin-top: -55px;"><strong>Rs. '.$currency.$subtotal.'</strong>&nbsp&nbsp&nbsp</p>';
                        echo '</br>';
                        echo '<p align="right"><button type="submit" class="btn btn-default" style="font-size: 32px; color: white; background-color: 003366;">Update</button></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>';
                        echo '</div>';
                        echo '</div>';
			$total = ($total + $subtotal); //add subtotal to total var  
                        echo '<hr style="background-color: rgb(120,120,120); height: 0.2px;">';
        }
        $grand_total=$total + $delivery_charges;
        $_SESSION['total']=$total;
        $_SESSION['grand_total']=$grand_total;
	}
    ?>
<input type="hidden" name="return_url" value="<?php 
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo $current_url; ?>" />
</form>
</div>
</br></br></br></br>
<?php

if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
{
echo '<footer style="position: fixed; bottom: 0px; width: 100%; height: 110px; background-color: rgb(80,80,80);">
<p align="center"><a href="checkout-login.php"><button type="button" class="btn btn-default" style="color: white; font-size : 38px; background-color: rgb(80,80,80); height: 110px; width: 930px; border: none;">
<p align="left" style="margin-top: 15px;">&nbsp&nbsp&nbsp&nbspCHECKOUT</p>
<p align="right" style="margin-top: -60px;"><i class="fa fa-inr"></i> '.$grand_total.' <span class="glyphicon glyphicon-menu-right"></span>&nbsp&nbsp&nbsp&nbsp</p>
</button></a></p>
</footer>';

}

else
{
echo '<div style="background-color: white; margin-top: -15px; padding-top: 100px; height: 100%">
<p align="center"><img src="images/my-account.png"/></p></br></br>
<p align="center" style="color: 003366; font: 40px georgia;"><strong>Your Shopping Cart Is Empty</strong></p>
</div>';
}

?>

</div>

</body>
</html>