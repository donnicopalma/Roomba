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

function guardar_posicion(ttitle, tid, tleft, ttop){

        var parametros = {
        		"ttitle" : ttitle,
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

function nuevo_elemento(oid,ovalue){

   var parametros = {
                "oid" : oid,
                "pvalue"	: ovalue
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
        

	var diva = document.createElement("div");
	diva.id = "elemento"+oid;
	diva.className = "nuevo_objeto";
	document.getElementById("espacio_room").appendChild(diva);
	
	$("#elemento"+oid).html("<img id='1"+oid+"' onmouseup='guardar_posicion(this.title, this.id, this.style.left, this.style.top);return false;'"+
	"style='position: absolute; cursor: move; border: 0px none; height: 30%; z-index: 0; left:'100px'; top: '0px';' src='"+ovalue+"'  title='"+ovalue+"'></a>"+
	"<script> $(function() {"+
	"	 $( '#1"+oid+"' ).draggable({ containment: '#espacio_room' }); });"+
	"</script>");

}
