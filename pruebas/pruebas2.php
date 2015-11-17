[color=#000000]
<!doctype html>
<html lang="es">
<!-- Link de Origen: http://jqueryui.com/slider/#side-scroll -->
<!-- Galeria de imagenes -->

<head>
<meta charset="utf-8">
<title>Barra Horizontal de Guchi</title>
</head>

<body>
<style>
  /* Barra Horizontal de Corrimiento */
.barra-panel {overflow:auto; position:absolute; left:10px; top:80%; width:95%; right:20; height:140px; z-index:1; }
.borde-Panel {border: 1px solid RGB(0,0,0); background: RGB(215,201,168); }
.punta-Izq {border-top-left-radius: 5px;}
.punta-Der {border-top-right-radius: 5px;}
.barra-Scroll {width: 3700px;} /* Aca entran 20 fotos con un incremento de 130px por fotograma +/-			Multiplicar por cantidad de fotos el whidt de c/u */
.contiene-Item {border: 1px solid RGB(0,0,0); width: 150px; height: 100px; float: left; margin: 10px;}
</style>

<div class="barra-panel borde-Panel punta-Izq punta-Der">
<div class="barra-Scroll">
<div class="contiene-Item"><img src='./img01.jpg' width="150px" height="100px"></div>
<div class="contiene-Item"><img src='./img02.jpg' width="150px" height="100px"></div>
<div class="contiene-Item"><img src='./img03.jpg' width="150px" height="100px"></div>
<div class="contiene-Item"><img src='./img01.jpg' width="150px" height="100px"></div>
<div class="contiene-Item"><img src='./img02.jpg' width="150px" height="100px"></div>
<div class="contiene-Item"><img src='./img03.jpg' width="150px" height="100px"></div>
</div>
</div>

</body>

<script>
</script>

</html>
[/color]