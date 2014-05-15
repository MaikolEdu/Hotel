(function( $ ) {
	$.fn.validCampo = function(cadena) {
    	$(this).on({
			keypress : function(e){
    			var key = e.which,
    				keye = e.keyCode,
    				tecla = String.fromCharCode(key).toLowerCase(),
    				letras = cadena;
			    if(letras.indexOf(tecla)==-1 && keye!=9&& (key==37 || keye!=37)&& (keye!=39 || key==39) && keye!=8 && (keye!=46 || key==46) || key==161){
			    	e.preventDefault();
			    }
			}
		});
	};
})( jQuery );


function fecha(){
	var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
    return today;
}

function diasEnMes(humanMonth, year) {
  return new Date(year || new Date().getFullYear(), humanMonth, 0).getDate();
}

function fechaNext(nuevoDate){
	var now = new Date();
	
	var diaFalso = now.getDate()+1;
	var mesFalso = now.getMonth()+1;
	var anoFalso = now.getFullYear();
	var diaSiguiente, mesSiguiente, anoSiguiente;

	if(diaFalso>diasEnMes(mesFalso, anoFalso)){
		diaSiguiente = ("0" + (1)).slice(-2);
		mesSiguiente = ("0" + (mesFalso+1)).slice(-2);
	}
	else{
		diaSiguiente = ("0" + (diaFalso)).slice(-2);
		mesSiguiente = ("0" + (mesFalso)).slice(-2);
	}

    var todayNext = now.getFullYear()+"-"+(mesSiguiente)+"-"+(diaSiguiente);
    return todayNext;
}



function a (){
	$('*').bind("cut copy paste",function(e) {
      e.preventDefault();
    });

	var f = fecha();
    console.log(fechaNext(f));
 
    $('#txt_in').attr({
    	'min':fecha(),
    	'value':fecha(),
    });

    $('#txt_out').attr({
    	'min':fechaNext(f),
    	'value':fechaNext(f),
    });


}

function b (){
	var inicio = $('#txt_in').val();
	var fin = $('#txt_out').val();

	var dateFin = new Date(fin);
	var diaFin = dateFin.getDate();
	console.log(fin);

	var date = new Date(inicio);

    //redundancia de codigo----------
	var diaFalso = date.getDate()+2;
	var mesFalso = date.getMonth()+1;
	var anoFalso = date.getFullYear();
	var diaSiguiente, mesSiguiente, anoSiguiente;

	if(diaFalso>diasEnMes(mesFalso, anoFalso)){
		diaSiguiente = ("0" + (1)).slice(-2);
		mesSiguiente = ("0" + (mesFalso+1)).slice(-2);
	}
	else{
		diaSiguiente = ("0" + (diaFalso)).slice(-2);
		mesSiguiente = ("0" + (mesFalso)).slice(-2);
	}

    var todayNext = date.getFullYear()+"-"+(mesSiguiente)+"-"+(diaSiguiente);
    //-----------------------------------------------------------------------

	
	if (Date.parse(inicio) >= Date.parse(fin) )
	{
		$('#txt_out').attr({
			'min' : todayNext
		});

		$('#txt_out').val(todayNext);
	}
	else{
		$('#txt_out').attr({
			'min' : todayNext
		});
	}
}

function c(){
	var inicioC = $('#txt_in').val();
	var finC = $('#txt_out').val();

	var dateI = new Date(inicioC);
	var dateF = new Date(finC);

	$('#caja-dias').val(dateF.getDate()-dateI.getDate());
}


//validando boton reservar

$('#button').on('click', validarRegistrar);

function validarRegistrar(){

     if (validacionform() && ! ($('#costo-total').text() ==="0" )) {
			$('.valide').hide();
			parametros = {
				nombres : $('#txt_nombres').val(),
				email : $('#txt_email').val(),
				telefono : $('#txt_telefono').val(),
				entrada : $('#txt_in').val(), 
				salida : $('#txt_out').val(), 
				info : $('#txt_info').val(),

				simple : $('#costo-simple-cant').val(),
				doble : $('#costo-doble-cant').val(),
				matrimonial : $('#costo-matrimonial-cant').val(),
				junior : $('#costo-suite-junior-cant').val(),
				ejecutiva : $('#costo-suite-ejecutiva-cant').val()
			}
			
			$.ajax({
					data:parametros,
					url:"enviar_reservas.php",
					type:"POST",
					success: function(data){
						if (data){
							console.log(data);
							console.log("jajaja");
						}
						console.log(data);

					},
					error: function(){

					}
				});
		}
		else{

			$('.valide').show();
		}
}


function validacionform(){
	nombres = $('#txt_nombres').val(); 
	email = $('#txt_email').val();
	telefono = $('#txt_telefono').val();
	entrada = $('#txt_in').val(); 
	salida = $('#txt_out').val();
	if (nombres && (telefono || email ) && entrada && salida){

		return true;
	}
	else{
		return  false;	
	} 
}



