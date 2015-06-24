<?php require_once('config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bienvenido a ROOMBA!!</title><style type="text/css">
<!--
body {
	margin-top: 0px;
	background-image: url();
	background-repeat: no-repeat;
}
-->
</style>
<link href="estilo.css" rel="stylesheet" type="text/css" />
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
