<!DOCTYPE html>
 
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Convertir Contenido en Imagen</title>

    <!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script src="js/filesaver.js" type="text/javascript"></script>
    <script src="js/html2canvas.js" type="text/javascript"></script>    

    <script type="text/javascript">
      $(function() { 
          $("#crearimagen").click(function() { 
              html2canvas($("#contenido"), {
                  onrendered: function(canvas) {
                      theCanvas = canvas;
                      var datax = theCanvas.toDataURL();
        
                      //document.body.appendChild(canvas);
						/*
                      canvas.toBlob(function(blob) {
                        saveAs(blob, "Dashboard.png"); 
                      
                      });*/
                     var parametros = {
				                "datax"	: datax
				        };
				        $.ajax({
				                data:  parametros,
				                url:   'guarda.php',
				                type:  'post',
				                beforeSend: function () {
				                        $("#resultado").html("Procesando, espere por favor...");
				                },
				                success:  function (response) {
				                        $("#resultado").html(response);
				                }
				                
				        });
                      
                  }
              });
          });
      });
    </script>


</head>
<body>
<div id="resultado"></div>
	<div class="container">

    <h1>Convertir Contenido en Imagen</h1>   

	    <div class="row" id="contenido">

	        <div class="col-md-4">
            <h5 style="font-weight:bold; color:pink;">Torta de Chocolate</h5>
            <p>
              La deliciosa Torta de Chocolate es uno de los postres mas ricos del mundo, estos estan en los mejores comensales.              
              <img src="img/torta_chocolate.jpg" class="img-responsive" />
            </p>
          </div>

          <div class="col-md-4">
            <h5 style="font-weight:bold; color:pink;">Arroz con Leche</h5>
            <p>
              Este suculento postre es muy saboreado en los comensales del Perú, esta exquisitez es un Postre típico del País.              
              <img src="img/arroz_leche.jpg" class="img-responsive" />
            </p>
          </div>

          <div class="col-md-4">
            <h5 style="font-weight:bold; color:pink;">Arroz Zambito</h5>
            <p>
              Un derivado del arroz con leche pero acompañado de pasas e higos, delicioso para servir al gusto del degustador.              
              <img src="img/arroz_zambito.jpg" class="img-responsive" />
            </p>
          </div>

          <footer>
            <div class="container text-center">
              <p class="text-muted credit">
                Desarrollado por <a href="http://www.collectivecloudperu.com" target="blank">Collective Cloud Peru</a>
              </p>
            </div>        
          </footer>

			</div>


      <button id="crearimagen" class="form-control"/>Crear Imagen</button>

      <div class="row">
        <div class="col-md-12" id="img-out" align="center">
          <h5 style="font-weight:bold; color:purple;">Imagen:</h5>
          <span style="font-size:11px;">Puedes hacer click con el botón derecho del Mouse para Guardar la imagen.</span>        
        </div>
      </div>     
        

	</div>  

</body>
</html>