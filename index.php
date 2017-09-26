<html>
<head>
<title>Instamart</title>
<link rel="stylesheet" type="text/css" href="main_css/my_index.css" />
<link href="css/bootstrap.min.css" rel="stylesheet"> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>  
<script src="js/dropdown.js"></script> 
<script src="js/modal.js"></script>
<link href="owl-carousel/owl.carousel.css" rel="stylesheet"> 
<link href="owl-carousel/owl.theme.default.css" rel="stylesheet">
<script src="owl-carousel/owl.carousel.js"></script>
<style>
#owl-demo .item img{
    display: block;
    width: 100%;
    height: auto;
}
</style>
</head>
<body>
<div id="index_container">

<div id="divtag"> 
<marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
<p id="tag">Now buy groceries online. Available on Instamart</p>
</marquee>
</div>

<div id="logo">
<p class="logo_image" align="center"><img src="images/logo.png"/></p>
<p class="logo_name" align="center">Instamart</p>
<p class="logo_line" align="center">Instant Online Grocery Provider</p>
</div></br></br>

<div id="owl-demo" class="owl-carousel owl-theme">
 
  <div class="item"><img src="images/outside1.jpg"></div>
  <div class="item"><img src="images/Groceries.png"></div>
  <div class="item"><img src="images/outside3.jpg"></div>
  <div class="item"><img src="images/Household.jpg"></div>
  <div class="item"><img src="images/Stationary.jpg"></div>
 
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

<div id="index_login_signup" style="padding-top: 120px;">
<p align="center"><a href="login.php"><button type="button" class="btn btn-default" id="index_login">LOGIN</button></a></p></br>
<p align="center"><a href="signup.php"><button type="button" class="btn btn-default" id="index_signup">SIGN UP</button></a></p></br>
<p align="center" class="skip"><a href="instamart.php" id="skip">Skip</a></p></br>
</div>

</div>
</body>
</html>