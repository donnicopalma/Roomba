
<?php require_once('control/config.php'); ?>
<?php
	define('INCLUDE_CHECK',1);
	require "control/functions.php";
	
	session_start();
	
	if(isset($_SESSION['user_room'])) {
	header('Location: home.php');
} else {
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>

<link href="estilos/estilo.css" rel="stylesheet" type="text/css" />
<link href="estilos/demo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="64" border="0" align="center" cellpadding="0" cellspacing="0" class="fondo" background-repeat: no-repeat >
  <!--DWLayoutTable-->
  <tr>
    <td width="64" height="30" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" >
      <!--DWLayoutTable-->
      <tr>
        <td width="32" height="30" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="32" height="30" valign="top"><?php include("barra_iz.php"); ?></td>
              </tr>
          </table></td>
          <td width="32" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="32" height="30" valign="top"><?php include("centro.php"); ?></td>
              </tr>
              
          </table></td>
        </tr>
      
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
}
?>
