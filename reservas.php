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
	<div id="page" class="portada_reservas">
		<div class="content"> <span><!--Mauris vulputate dolor --></span>
			<!--<h2>Nulla luctus eleifend purus</h2>-->
			<!--<p>Pellentesque viverra vulputate enim. Aliquam erat volutpat. Pellentesque  ante ut risus. Quisque dictum.</p>-->
			<a href="reservas.php" class="button-style button-style-alt">RESERVAS</a> </div>
	</div>
  <div id="featured-wrapper" class="padding">
    <div class="contenedor">
    	<div id="box1-reserva">
    		  <h2>RESERVAS<br />
    		  </h2>
          <p>• Cóctel de bienvenida<br />
            • Desayuno buffet        <br />
            • Traslado del aeropuerto al hotel<br />
            • Servicio de estacionamiento privado<br />
            • Incluye impuestos y servicios<br />
            • Exoneración del IGV (18%) para pasajeros<br />
            internacionales<br />
            • Las tarifas en US$ son referenciales, pueden<br />
            cambiar de acuerdo al tipo de cambio del día.</p>
          <p>&nbsp;</p>
    	</div>

      <div id="box2-reserva">
        <fieldset>
        <legend><h2>FORMULARIO DE RESERVAS</h2></legend>
        <div class="form-box-1">          
          <div id="formulario">
            <div class="layout-50 margen">
              <label>Nombres y Apellidos(*)</label>
            </div>
            <div class="layout-50 margen">
              <input type="text" class="caja_text_2" id="txt_nombres" name="txt_nombres" placeholder="Nombres y Apellidos">
            </div>
            <div class="layout-50 margen">
              <label>Email</label>
            </div>
            <div class="layout-50 margen">
              <input type="email" class="caja_text_2" id="txt_email" name="txt_email" placeholder="Email">
            </div>
            <div class="layout-50 margen">
             <label>Teléfono o Celular(*)</label>
            </div>
            <div class="layout-50 margen">
              <input type="text" class="caja_text_2" id="txt_telefono" name="txt_telefono" placeholder="Teléfono o Celular">
            </div>

            <div class="layout-50 margen">
              <label>Llegada(*)</label>
            </div>
            <div class="layout-50 margen">
              <input type="date" class="caja_text_2" id="txt_in" name="txt_in">
            </div>
            <div class="layout-50 margen">
              <label>Salida(*)</label>
            </div>
            <div class="layout-50 margen">
              <input type="date" class="caja_text_2" id="txt_out" name="txt_out">
            </div>
            <!--<div class="layout-50 margen">
              <label for="spinner">N° de Días</label>
            </div>
            <div class="layout-50 margen dias">
              <input type="text" placeholder="1" class="caja_text_2" id="caja-dias" name="value">
            </div>-->
            <div class="layout-100 margen2">
              <p>Información adicional</p>
            </div>
            <div class="layout-100 margen">
              <textarea  class="caja_text_3" id="txt_info" name="txt_info"></textarea>
            </div>
          </div>
        </div>
        <div class="form-box-2">
          <div id="formulario">
              <div class="layout-100 margen">
                <div class="layout-40 margen">
                  <label>Tipo de Habitación</label>
                </div>
                <div class="layout-30 margen centro">
                  <label>Cantidad</label>
                </div>
                <div class="layout-30 margen centro">
                  <label>Precio</label>
                </div>
              </div>
              <div class="layout-100">
                <div class="layout-40 margen">
                  <label>Hab. Simple</label>
                </div>
                <div class="layout-30 margen centro">
                  <input type="number" min="0" class="caja_text_2" id="costo-simple-cant" name="txt_cant" value="1">
                </div>
                <div class="layout-30 margen centro t_costo">
                    <span class="bloque">S/.<span class="precio" id="costo-simple">225.00</span></span>
                </div>
              </div>
              <div class="layout-100">
                <div class="layout-40 margen">
                  <label>Hab. Doble</label>
                </div>
                <div class="layout-30 margen centro">
                  <input type="number" min="0" class="caja_text_2" id="costo-doble-cant" name="txt_cant" value="0">
                </div>
                <div class="layout-30 margen centro t_costo">
                  <span class="bloque">S/.<span class="precio" id="costo-doble">285.00</span></span>
                </div>
              </div>
              <div class="layout-100">
                <div class="layout-40 margen">
                  <label>Hab. Matrimonial</label>
                </div>
                <div class="layout-30 margen centro">
                  <input type="number" min="0" class="caja_text_2" id="costo-matrimonial-cant" name="txt_cant" value="0">
                </div>
                <div class="layout-30 margen centro t_costo">
                  <span class="bloque">S/.<span class="precio" id="costo-matrimonial">260.00</span></span>
                </div>
              </div>
              <div class="layout-100">
                <div class="layout-40 margen">
                  <label>Suite Junior</label>
                </div>
                <div class="layout-30 margen centro">
                  <input type="number" min="0" class="caja_text_2" id="costo-suite-junior-cant" name="txt_cant" value="0">
                </div>
                <div class="layout-30 margen centro t_costo">
                  <span class="bloque">S/.<span class="precio" id="costo-suite-junior">415.00</span></span>
                </div>
              </div>
              <div class="layout-100">
                <div class="layout-40 margen">
                  <label>Suite Ejecutiva</label>
                </div>
                <div class="layout-30 margen centro">
                  <input type="number" min="0" class="caja_text_2" id="costo-suite-ejecutiva-cant" name="txt_cant" value="0">
                </div>
                <div class="layout-30 margen centro t_costo">
                  <span class="bloque">S/.<span class="precio" id="costo-suite-ejecutiva">426.00</span></span>
                </div>
              </div>
              <div class="layout-100">
                <div class="layout-40 margen">
                </div>
                <div class="layout-30 margen centro">
                  <label id="bloque-costo-total">TOTAL (*)</label>
                </div>
                <div class="layout-30 margen centro t_costo">    
                    <span class="bloque" id="bloque-costo-total">S/.<span class="precio" id="costo-total">225.00</span></span>
                </div>
              </div>
              <div class="layout-100">
                <div class="boton">
                  <button class="enfasis" id="button">Reservar</button>
                  <span class="valide">Campos obligarorios (*)</span>
                </div>
              </div>
          </div> 
        </div>
    </fieldset>
</div>
    
<!-- <div id="box3">
	  <h2><img src="archivos/habitacion_reservas.jpg" alt="" width="250" height="166" /></h2>
	  <p><img src="archivos/habitacion_reservas2.jpg" alt="" width="250" height="167" /></p>
	</div> -->
      
  </div>
</div>
<?php include "pie.php";?>
    <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript"  src="js/validaciones.js"> </script>
    <!-- // <script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script> -->
    <script type="text/javascript" src="js/modernizr.custom.71248.js"></script>
   	<script>
    a();
    $('#txt_in').change(b);
    $('#txt_in').change(c);

    $('#costo-simple-cant').on('change', cantidad);
    $('#costo-doble-cant').on('change', cantidad);
    $('#costo-matrimonial-cant').on('change', cantidad);
    $('#costo-suite-junior-cant').on('change', cantidad);
    $('#costo-suite-ejecutiva-cant').on('change', cantidad);

    function cantidad(){

      var simple = parseFloat($('#costo-simple').text());
      var doble = parseFloat($('#costo-doble').text());
      var matrimonial = parseFloat($('#costo-matrimonial').text());
      var suiteJunior = parseFloat($('#costo-suite-junior').text());
      var suiteEjecutiva = parseFloat($('#costo-suite-ejecutiva').text());
      
      var mulSimple = Number($('#costo-simple-cant').val());
      var mulDoble = Number($('#costo-doble-cant').val());
      var mulMatrimonial = Number($('#costo-matrimonial-cant').val());
      var mulSuiteJunior = Number($('#costo-suite-junior-cant').val());
      var mulSuiteEjecutiva = Number($('#costo-suite-ejecutiva-cant').val());

     

      $('#costo-total').text(String(mulSimple*simple+mulDoble*doble+mulMatrimonial*matrimonial+mulSuiteJunior*suiteJunior+mulSuiteEjecutiva*suiteEjecutiva)); 

    }

    $('#txt_nombres').validCampo(' abcdefghijklmnñopqrstuvwxyzáéíóú');
    $('#txt_ciudad').validCampo(' abcdefghijklmnñopqrstuvwxyzáéíóú');
    $('#txt_empresa').validCampo(' abcdefghijklmnñopqrstuvwxyzáéíóú');
    $('#txt_telefono').validCampo('0123456789');

</script> 

</body>
</html>
