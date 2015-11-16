$(document).ready(function(){
	
	$('#regForm').submit(function(e) {

		register();
		e.preventDefault();
		
	});
	
});


function register()
{
	hideshow('loading',1);
	error(0);
	
	$.ajax({
		type: "POST",
		url: "control/submit.php",
		data: $('#regForm').serialize(),
		dataType: "json",
		success: function(msg){
			
			if(parseInt(msg.status)==1)
			{
				window.location=msg.txt;
			}
			else if(parseInt(msg.status)==0)
			{
				error(1,msg.txt);
			}
			
			hideshow('loading',0);
		}
	});

}


function hideshow(el,act)
{
	if(act) $('#'+el).css('visibility','visible');
	else $('#'+el).css('visibility','hidden');
}

function error(act,txt)
{
	hideshow('error',act);
	if(txt) $('#error').html(txt);
}

function guardar_posicion(tid, tleft, ttop, talto, tancho, tzindex){

        var parametros = {
                "tid"	: tid,
                "tleft" : tleft,
                "ttop"	: ttop,
                "talto"	: talto,
                "tancho": tancho,
                "tzindex": tzindex
        };
        
        $.ajax({
                data:  parametros,
                url:   'control/actualiza_posicion.php',
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#resultado").html(response);
                }
        });
        
}

function nuevo_elemento(oid,ovalue){

   var parametros = {
                "oid" : oid,
                "ovalue"	: ovalue
        };
        
        $.ajax({
                data:  parametros,
                url:   'control/nuevo_objeto.php',
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("Creando nuevo elemento");
                },
                success:  function (response) {
                
				var random = Math.floor((Math.random() * 100000) + 1);
                var diva = document.createElement("div");
				diva.id = "elemento"+random;
				document.getElementById("espacio_room").appendChild(diva);
                $("#elemento"+random).html(response);
                }
        });

}

function elimina_elemento(oid){

   var parametros = {
                "oid"	: oid
        };
        
        $.ajax({
                data:  parametros,
                url:   'control/elimina_objeto.php',
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("Creando nuevo elemento");
                },
                success:  function (response) {
                
                $("#"+oid).remove();
                }
        });

}

//  FUINCION PARA EL MENU (SUBE Y BAJA)
$(function(){
    $('.slider').click(function () { 
        $('#nav').slideToggle(300);

        var img = $(this).find('img');
        if ($(img).attr('id') == 'bot') {
            $(img).attr('src', 'img/arrow_top.png');
            $(img).attr('id', 'top');
        } else {
            $(img).attr('src', 'img/arrow_bottom.png');
            $(img).attr('id', 'bot');
        }
    });

    $('.sub').click(function () { 
        var cur = $(this).prev();
        $('#nav li ul').each(function() {
            if ($(this)[0] != $(cur)[0])
                $(this).slideUp(300);
        });
        $(cur).slideToggle(300);
    });
});
