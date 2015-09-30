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

function guardar_posicion(tid, tleft, ttop){

        var parametros = {
                "tid"	: tid,
                "tleft" : tleft,
                "ttop"	: ttop
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