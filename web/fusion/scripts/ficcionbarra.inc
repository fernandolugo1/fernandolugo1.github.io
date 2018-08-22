<table width="130" border="0" cellpadding="0" cellspacing="1">
  <tr> 
    <td align="center" valign="top" bgcolor="#000000" class="contenido2"> 
	  <?php include("../scripts/ficcionsinopsis.inc"); ?>
      <?php echo "<form action=\"$PHP_SELF\" method=\"post\" name=\"frmSendSinopsis\" id=\"frmSendSinopsis\"> \n"; ?> 
      <table width="125" border="0" cellpadding="0" cellspacing="0">
        <tr bgcolor="#FFFFFF"> 
          <td width="99%" height="16" bgcolor="#333333" class="contenido2"><font color="#FFFFFF"> Manda 
            esta sinopsis</font></td>
          <td width="1%" bgcolor="#333333" class="contenido2"><img src="images/arrow01.gif" width="14" height="14" border="0"></td>
        </tr>
        <tr> 
          <td colspan="2"><table width="100%" border="0" cellpadding="1" cellspacing="0" bgcolor="#FFFFFF">
              <tr> 
                <td bgcolor="#336699" class="contenido2"><font color="#FFFFFF"> Tu 
                  nombre o e-mail</font></td>
              </tr>
              <tr> 
                <td align="center" bgcolor="#6699CC"> <input name="ficcion_from" type="text" id="ficcion_from" style="font-size:10px; font-family:verdana;" size="20"> 
                </td>
              </tr>
              <tr> 
                <td bgcolor="#336699" class="contenido2"><font color="#FFFFFF"> E-mail 
                  de tu amigo:</font></td>
              </tr>
              <tr> 
                <td align="center" bgcolor="#6699CC"> <input name="ficcion_mail" type="text" id="ficcion_mail" style="font-size:10px; font-family:verdana;" size="20"> 
                </td>
              </tr>
              <tr valign="bottom" bgcolor="#6699CC"> 
                <td height="30" align="center" bgcolor="#666666" class="contbold"> 
                  <input name="cmd_sendsinopsis" type="submit" id="cmd_sendsinopsis" style="font-size:10px; font-family:verdana;" value=" Enviar"> 
                </td>
              </tr>
            </table></td>
        </tr>
      </table>
      <?php echo "</form>"; ?> <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="99%" height="16" bgcolor="#333333" class="contenido2"><font color="#FFFFFF">Ver 
            otras sinopsiseses</font></td>
          <td width="1%" bgcolor="#333333" class="contenido2"><img src="images/arrow01.gif" width="14" height="14" border="0"></td>
        </tr>
        <tr> 
          <td colspan="2" bgcolor="#666666" class="contenido2"><a href="8mile.php"> + 
            8Mile</a><br> <a href="daredevil.php"> + Daredevil</a><br> <a href="terminator3.php"> + 
            Terminator 3</a><br> <a href="x2.php"> + X2</a><br> <a href="matrix2.php"> + 
            Matrix Reloaded</a></td>
        </tr>
      </table></td>
  </tr>
</table>