<?php 

$server = 'http://' . $_SERVER['SERVER_NAME'] . '/ofc/';

?>
<!DOCTYPE html>
<html lang ="en">
<head>
	<title>index.html</title>

	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
    <link rel="stylesheet" href="<?php echo $server; ?>css/style.css" >
 
<!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
    	body{
    		background-color: black;
    	}
    	.wrapper{
    		width: 50px
    		padding: 10px;
    		text-align: center;
    		background-color: orange;
    	}
    	.marque{
    		color: gold;
    	}
    	ul
    	{
    		list-style-type:square;
    		margin: 0;
    		padding: 0;
    		width: 200px;
    		background-color: #f1f1f1;
    		border:1px solid #555;
    	}
    	li a{
    		display: block;
    		color:#000;
    		padding: 16px 32px;
    		text-decoration: none;
    	}
    	li{
    		text-align: center;
    		border-bottom:none;
    	}
    	li:last-child{
    		border-bottom:none;
    	}
    	li a.active{
    		background-color: orange;
    		color: white;
    	}
    	li a:hover:not(.active){
    		background-color: #555;
    		color: white;
    	}

    	</style>
    </style>

</head>
<body>
	<!-- header -->
	<div>

	<h4 class="wrapper">Welcome to the store</h4>
	<input type="button" name="Home" value="Home" action="index.html" style="position:absolute; top:0; left:0; background-color: black; color: orange" onclick="css.html" action="css.html">

	<!-- <input  type="button" name="About" value="About" action="" style="position: absolute; top: 0;left: : 200"> -->
	<input  type="button" name="Signin" value="Sign In" action="" style="position: absolute; top: 0;right: 0; background-color: black; color: orange;" onclick="css.html" action="css.html"  >
	</div>

	<marquee class="marque"><h5> Promocode: Firstpay100 </h5></marquee>

<!-- Body -->
<ul>

	<li><a class="active" href="#Dashboard">Dashboard</a></li>
	<li><a href="#Men">Men</a></li>
	<li><a href="#Women">Women</a></li>
	<li><a href="#Kids">Kids</a></li>
	<li><a href="#Electronics">Electronics</a></li>
	<li><a href="#Gadgets">Gadgets</a></li>
    <li><a href="#Kitchen">Kitchen</a></li>
	<li><a href="#News">News</a></li>
	<li><a href="#Contact">Contact</a></li>
	<li><a href="#About">About</a></li>

</ul>


<!-- footer -->

	<div class="row bg-dark justify-content-center mt-4 py-3">
		<marquee><footer class="text-white">All Rights Reserved 2022 | ZYRN Technologies | Online Clothing Shop
		</marquee>
		</footer>
	</div>
</div>


</body>
<br>
</html>