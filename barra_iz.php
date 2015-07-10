<table width="325" border="0" cellpadding="0" cellspacing="0" class="barra_iz">
  <!--DWLayoutTable-->
  <tr>
    <td height="209" colspan="5" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="43" height="100">&nbsp;</td>
        <td width="247">&nbsp;</td>
        <td width="35">&nbsp;</td>
      </tr>
      <tr>
        <td height="32">&nbsp;</td>
        <td valign="top"><span class="Titulos">&iexcl;Reg&iacute;strate en Roomba!
              Es GRATIS
            <br />
            y de
          libre acceso para todos.</span></td>
          <td>
			<form id="regForm" action="submit.php" method="post">
			
			  <tr>
			    <td><label for="fname">First Name:</label></td>
			    <td><div class="input-container"><input name="fname" id="fname" type="text" /></div></td>
			  </tr>
			  <tr>
			    <td><label for="lname">Last Name:</label></td>
			    <td><div class="input-container"><input name="lname" id="lname" type="text" /></div></td>
			  </tr>
			  <tr>
			    <td><label for="email">Your Email:</label></td>
			    <td><div class="input-container"><input name="email" id="email" type="text" /></div></td>
			  </tr>
			  <tr>
			    <td><label for="pass">Password:</label></td>
			    <td><div class="input-container"><input name="pass" id="pass" type="password" /></div></td>
			  </tr>
			  <tr>
			    <td><label for="sex-select">I am:</label></td>
			    <td>
			    <div class="input-container">
			    <select name="sex-select" id="sex-select">
			    <option value="0">Select Sex:</option>
			    <option value="1">Female</option>
			    <option value="2">Male</option>
			    </select>
			    </div>
			    
			    </td>
			  </tr>
			  <tr>
			    <td><label>Birthday:</label></td>
			    <td>
			    <div class="input-container">
			    <select name="month"><option value="0">Month:</option><?=generate_options(1,12,'callback_month')?></select>
			    <select name="day"><option value="0">Day:</option><?=generate_options(1,31)?></select>
				<select name="year"><option value="0">Year:</option><?=generate_options(date('Y'),1900)?></select>
			    </div>
			    </td>
			  </tr>
			  <tr>
			  <td>&nbsp;</td>
			  <td><input type="submit" class="greenButton" value="Sign Up" /><img id="loading" src="img/ajax-loader.gif" alt="working.." />
			</td>
			  </tr>
			</form>
			<div id="error">
			&nbsp;
			</div>
			</td>
          
          <!-- INICIO REGISTRO -->
          
			

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
    <td height="290">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" rowspan="3" valign="top"></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="28"></td>
    <td></td>
    <td></td>
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
