<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Skeleton 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130902

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Roswal Hotel, Trujillo,Perú</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Raleway:400,700,200,300,900,800" rel="stylesheet" type="text/css">
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<link rel="stylesheet" type="text/css" href="tkahn-Smooth-Div-Scroll/css/smoothDivScroll.css"/>
	<style type="text/css">

		#makeMeScrollable
		{
			width:100%;
			height: 286px;
			position: relative;
		}
		
		/* Replace the last selector for the type of element you have in
		   your scroller. If you have div's use #makeMeScrollable div.scrollableArea div,
		   if you have links use #makeMeScrollable div.scrollableArea a and so on. */
		#makeMeScrollable div.scrollableArea img
		{
			position: relative;
			float: left;
			margin: 0;
			padding: 0;
			/* If you don't want the images in the scroller to be selectable, try the following
			   block of code. It's just a nice feature that prevent the images from
			   accidentally becoming selected/inverted when the user interacts with the scroller. */
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-o-user-select: none;
			user-select: none;
		}
		</style>
</head>
<body>
<div id="wrapper" class="container">
	<div id="header">
		<div id="logo">
			<img src="archivos/logo.png" alt="" width="149" height="138" />
		</div>
		<div id="menu">
				<?php include "menu.php";?>
		</div>
	</div>
	<div id="page" class="portada_habitaciones">
		<div class="content"> <span><!--Mauris vulputate dolor --></span>
			<!--<h2>Nulla luctus eleifend purus</h2>-->
			<!--<p>Pellentesque viverra vulputate enim. Aliquam erat volutpat. Pellentesque  ante ut risus. Quisque dictum.</p>-->
			<a href="reservas.php" class="button-style button-style-alt">RESERVAS</a> </div>
	</div>
  <div id="featured-wrapper">
	<div id="box1" >
	  <h2>HABITACIONES<br />
	  </h2>
	  <p><a href="habitacion_simple.php">HABITACIÓN SIMPLE</a><br />
	    <a href="habitacion_doble.php">HABITACIÓN DOBLE</a><br />
	    <a href="habitacion_matrimonial.php">HABITACIÓN MATRIMONIAL</a><a href="habitacion_triple.php"></a><a href="suite_junior.php"> </a>	    <br />
	    <a href="suite_junior.php">SUITE JUNIOR<br />
      </a><a href="suite_ejecutiva.php">SUITE EJECUTIVA</a></p>
	</div>
		<div id="box2" style="width:400px; margin-left:20px; ">
        
         <div id="makeMeScrollable">
         	<div class="scrollingHotSpotLeft" style="display: block; opacity: 0;"></div>

			<div class="scrollingHotSpotRight" style="opacity: 0;"></div>
	        <div class="scrollWrapper">
	        	<div class="scrollableArea" style="width: 2150px;">

	         	<img src="fotos/suiteejecutiva09.jpg" alt="" width="430" height="286" />
	            <img src="fotos/suiteejecutiva01.jpg" alt="" width="430" height="286" />
	            <img src="fotos/matrimonial01.jpg" alt="" width="430" height="286" />
	            <img src="fotos/doble02.jpg" alt="" width="430" height="286" />
	       	    <img src="fotos/doble03.jpg" alt="" width="430" height="286" />
	       		</div>
	       	</div>
        
       </div>
       </div>
      

<div id="box3" > 
  <h2>ROSWAL HOTEL</h2>
  <p> CONTAMOS CON 20 HABITACIONES HABILITADAS.</p>
</div>







      
  </div>
</div>
<?php include "pie.php";?>
		<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="tkahn-Smooth-Div-Scroll/js/jquery-ui-1.8.23.custom.min.js"></script>
        <script type="text/javascript" src="tkahn-Smooth-Div-Scroll/js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="tkahn-Smooth-Div-Scroll/js/jquery.kinetic.js"></script>
        <script type="text/javascript" src="tkahn-Smooth-Div-Scroll/js/jquery.smoothdivscroll-1.3-min.js"></script>
        
        <script type="text/javascript">
		$(document).ready(function () {
			$("div#makeMeScrollable").smoothDivScroll({
				autoScrollingMode: "onStart"
			});
		});
	</script>
</body>
</html>
