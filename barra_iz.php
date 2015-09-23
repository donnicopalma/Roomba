<table width="325" border="0" cellpadding="0" cellspacing="0" class="barra_iz">
  <!--DWLayoutTable-->
  <tr>
    <td height="209" colspan="5" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      
        <div class="Titulos"><span>&iexcl;Reg&iacute;strate en Roomba!
              Es GRATIS
            <br />
            y de
          libre acceso para todos.</span></div>
         
         
<!-- INICIO REGISTRO -->
                
               
          <div style="margin-left: 40px; margin-top: 15px;">
			<form id="regForm" action="control/submit.php" method="post">
			
			  <div>
			    <label for="fname">Nombres:</label>
			    <div class="input-container"><input name="fname" id="fname" type="text" /></div>
			  </div>
			  <div>
			    <label for="lname">Apellidos:</label>
			    <div class="input-container"><input name="lname" id="lname" type="text" /></div>
			  </div>
			  <div>
			    <label for="email">Email:</label>
			    <div class="input-container"><input name="email" id="email" type="text" /></div>
			  </div>
			  <div>
			    <label for="pass">Password:</label>
			    <div class="input-container"><input name="pass" id="pass" type="password" /></div>
			  </div>
			  <div>
			    <label for="sex-select">Sexo:</label>
			    
			    <div class="input-container">
			    <select name="sex" id="sex">
			    <option value="1">Masculino</option>
			    <option value="2">Femenino</option>
			    </select>
			    </div>
			    
			    
			  </div>
			  <div>
			    <label>Fecha de nacimiento:</label>
			    
			    <div class="input-container">
			    <select name="dia"><option value="0">D&iacute;a:</option><?=generate_options(1,31)?></select>
			    <select name="mes"><option value="0">Mes:</option><?=generate_options(1,12,'callback_month')?></select>
				<select name="ano"><option value="0">A&ntilde;o:</option><?=generate_options(date('Y'),1900)?></select>
			    </div>
			    
			  </div>
			  <div>
			  <input type="submit" class="greenButton" value="Reg&iacute;strate" /><img id="loading" src="img/ajax-loader.gif" alt="Trabajando.." />
			
			  </div>
			</form>
			<div id="error">
			&nbsp;
			</div>
			
          </div>
          
          
			

<!-- FIN REGISTRO -->
          
          
          
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="15" height="19">&nbsp;</td>
    <td width="8">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="213">&nbsp;</td>
    <td width="9">&nbsp;</td>
  </tr>

  
  <tr>
    <td height="127" colspan="5" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="325" height="127">&nbsp;</td>
      </tr>
    </table>    </td>
  </tr>
  <tr>
    <td height="60"></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td height="19"></td>
    <td></td>
    <td></td>
    <td colspan="2" valign="top" class="Estilo10">&copy; 2008 Roomba, M.R.</td>
  </tr>
  <tr>
    <td height="6"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
