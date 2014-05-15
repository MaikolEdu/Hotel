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
	<div id="page" class="portada_contacto">
		<div class="content"> <span><!--Mauris vulputate dolor --></span>
			<!--<h2>Nulla luctus eleifend purus</h2>-->
			<!--<p>Pellentesque viverra vulputate enim. Aliquam erat volutpat. Pellentesque  ante ut risus. Quisque dictum.</p>-->
			<a href="reservas.php" class="button-style button-style-alt">RESERVAS</a> </div>
	</div>
  <div id="featured-wrapper">
	<div id="box1">
		  <h2>CONTACTO<br />
		  </h2>
		  <p>recepcion@roswalhotel.com<br />
          <br />
          Tf. ] 44 423137<br />
          Nextel ] 41*341*2194<br />
Mov. ] 978405419<br />
RPM ] #978405419 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
RPC ] 949172275<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.facebook.com/pages/Roswal-Hotel/156587624529505?fref=ts" target="_blank"><img src="archivos/icono_face.png" alt="" width="43" height="40" /></a><br />
      </p>
	  <ul class="style4">
	    <li><br />
Av. Victor Larco 924<br />
Trujillo<br />
La Libertad - Perú</li>
</ul>
	</div>
		<div id="box2" style="width:400px;">
<h2>ubÍquenos</h2>
<iframe width="438" height="297" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=206935197730575590994.0004e15b04b178232dfe9&amp;ie=UTF8&amp;t=m&amp;ll=-8.118034,-79.031267&amp;spn=0.025236,0.037508&amp;z=14&amp;output=embed"></iframe>
	  </div>
      

<div id="box3">
	  <h2>ESCRÍBANOS</h2>
      <div id="formulario">
	  <form id="form_contactos" name="form_contactos" action="javascript:enviar_correo()">
	    <table  border="0">
	      <tr>
	        <td>Nombre y Apellidos</td>
          </tr>
	      <tr>
	        <td><input type="text" id="txt_nombres" name="txt_nombres" class="caja_text_4" /></td>
          </tr>
	      <tr>
	        <td>E-mail</td>
          </tr>
	      <tr>
	        <td><input type="text" id="txt_email" name="txt_email" class="caja_text_4" /></td>
          </tr>
	      <tr>
	        <td>Asunto</td>
          </tr>
	      <tr>
	        <td><input type="text" id="txt_asunto" name="txt_asunto" class="caja_text_4" /></td>
          </tr>
	      <tr>
	        <td>Mensaje</td>
          </tr>
	      <tr>
	        <td><textarea  class="caja_text_5" id="txt_mensaje" name="txt_mensaje"></textarea></td>
          </tr>
	      <tr>
	        <td><input type="submit" value="Enviar" id="button" name="button" /></td>
          </tr>
        </table>
      </form>
      </div>
	  <p>&nbsp;</p>
	</div>







      
  </div>
</div>
<?php include "pie.php";?>
    <script type="text/javascript" language="javascript" src="js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript">

    $(window).load(function() {


		$("#form_contactos").validate({
			rules:{	
					txt_nombres:{required:true},				
					txt_asunto:{required:true},					
					txt_email:{
						required:true,
						email:true
						},					
					txt_mensaje:{required:true},					
			},
			messages: {
					txt_nombres: "<br>Nombres requeridos",			
					txt_asunto: "<br>Asunto requerido",						
					txt_email: {
						required:"<br>E-mail requerido",
						email:"<br>Ingrese un E-mail válido"
						},										
					txt_mensaje: "<br>Comentario Requerido",										
			},
			
			onkeyup: false,
			submitHandler: function(form) {
				
					form.submit();
			}
		});			
		
    });
	
function enviar_correo(){
	var str = $("#form_contactos").serialize();
	$.ajax({
		url: 'enviar_contactos.php',
		data: str,
		type: 'post',
		success: function(data){
		        $("#formulario").html(data)
		}
	});
};	

	</script>    

</body>
</html>
