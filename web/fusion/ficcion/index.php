<html>
<head>
<title>Fusion - Ficci&oacute;n</title>
<meta name="description" content="Proyecto, Fusion, Revista Digital, Saltillo, Coahuila">
<link href="../fusioncss.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body bgcolor="#000000" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<?php include("../scripts/headder.inc") ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr valign="top"> 
    <td width="1%"><table width="250" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td><img src="images/main_04.jpg" alt="fusion ficci&oacute;n" width="220" height="264" border="0"></td>
        </tr>
        <tr> 
          <td height="35" align="center" class="contenido"><font color="#FFFFFF"> 
            <?php include("../scripts/msgpublic.inc"); ?>
            </font></td>
        </tr>
        <tr> 
          <td><form name="frmVerboCine" action="index.php" method="post">
              <table width="190" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                <tr> 
                  <td><table width="100%" height="16" border="0" cellpadding="0" cellspacing="0">
                      <tr> 
                        <td width="95%" align="center" bgcolor="#666666" class="contbold"><font color="#FFFFFF">Dejanos 
                          tus comentarios</font></td>
                        <td width="5%"><img src="images/arrow01.gif" width="14" height="14" border="0"></td>
                      </tr>
                    </table></td>
                </tr>
                <tr> 
                  <td bgcolor="#333333"> 
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr valign="top"> 
                        <td height="3" colspan="2"></td>
                      </tr>
                      <tr valign="top"> 
                        <td width="4%" height="14" align="right" nowrap class="contenido2"><font color="#CCCCCC">&nbsp;&nbsp;&nbsp;Nombre:&nbsp; 
                          </font></td>
                        <td width="96%" class="contenido"><font color="#FFFFFF"> 
                          <input name="msg_name" type="text" id="msg_name" style="font-size:10px; font-family:verdana; color:000000;" size="21" maxlength="40">
                          </font></td>
                      </tr>
                      <tr valign="top"> 
                        <td height="3" colspan="2"></td>
                      </tr>
                      <tr valign="top"> 
                        <td align="right" class="contenido2"><font color="#CCCCCC">Verbo:&nbsp;</font></td>
                        <td class="contenido"> <textarea name="msg_verbo" cols="20" rows="2" id="msg_verbo" style="font-size:10px; font-family:verdana; color:000000;"></textarea></td>
                      </tr>
                      <tr valign="top"> 
                        <td height="6" colspan="2"></td>
                      </tr>
                      <tr valign="top"> 
                        <td align="right" class="contbold">&nbsp;</td>
                        <td class="contenido"><input type="submit" name="cmdAceptar" value=" Aceptar " style="font-size:10px; font-family:verdana;"></td>
                      </tr>
                      <tr valign="top"> 
                        <td height="3" colspan="2"></td>
                      </tr>
                    </table></td>
                </tr>
              </table>
            </form></td>
        </tr>
      </table></td>
    <td width="90%"><br> 
      <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#333333">
        <tr> 
          <td width="1%" valign="top"><a href="piglet.php" target="_top"><img src="images/cine_08.jpg" alt="Piglet's Big Movie" width="150" height="80" border="0"></a></td>
          <td width="1%" valign="top">&nbsp;&nbsp;</td>
          <td width="97%" valign="top" class="contenido"><font color="#CCCCCC"><br>
            <strong> <a href="piglet.php" target="_top">PIGLET'S BIG MOVIE</a></strong><br>
            La primer Gran Pel&iacute;cula de Puerquito nos propone una historia 
            en la que nuestro &quot;peque&ntilde;o amiguito rosado&quot; protagoniza 
            un cuento de amistad y de cari&ntilde;o.</font></td>
          <td width="1%" valign="top">&nbsp;&nbsp;</td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td height="12" colspan="4"></td>
        </tr>
        <tr> 
          <td valign="top"><a href="fastfurious2.php" target="_top"><img src="images/cine_07.jpg" alt="2 Fast 2 Furious" width="150" height="80" border="0"></a></td>
          <td valign="top">&nbsp;&nbsp;</td>
          <td valign="top" class="contenido"><font color="#CCCCCC"><br>
            <strong> <a href="fastfurious2.php" target="_top">2 FAST 2 FURIOUS</a></strong><br>
            Dave Buznik (Adam Sandler) es sujeto tranquilo, un poco amanerado, 
            no busca problemas. Pero despu&eacute;s de un altercado a bordo de 
            un aeroplano, solicit&oacute; ayuda de un terapista, el Dr. Buddy 
            Rydell (Jack Nicholson), quien probablemente deber&aacute; de requerir 
            aplicar sus terapias en s&iacute; mismo.</font></td>
          <td valign="top">&nbsp;</td>
        </tr>
      </table>
      <br>
      <table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="#999999">
        <tr> 
          <td height="16" bgcolor="#666666" class="contbold"><font color="#FFFFFF">&nbsp;&nbsp;//Sinopsiseses 
            anteriores</font></td>
        </tr>
        <tr>
          <td bgcolor="#666666">
		  <iframe src="allsinopsis.php" width="100%" height="150" frameborder="0"></iframe>
		  </td>
        </tr>
      </table>
	  <br> 
      <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#333333">
        <tr> 
          <td colspan="2" class="contenido"><strong><font color="#FFCC00">//Comentarios:</font></strong></td>
        </tr>
        <?php
		$fl="msgpublic.txt";
		$fp=fopen($fl, "r");
		$fr=fread($fp, filesize($fl));
		$line=explode("\n", $fr);
		for($i=0; $i<(count($line) - 1); $i++) {
			$col=explode("|", $line[count($line) - $i - 2]);
			echo "        <tr> \n";
			echo "          <td width=\"10%\" valign=\"top\" class=\"contenido\" align=\"right\" nowrap><strong><font color=\"#FFFFFF\" size=\"1\">&nbsp;&nbsp;$col[0]</font></strong></td>\n";
			echo "          <td width=\"90%\" valign=\"top\" class=\"contenido\"><font color=\"#FFFFFF\" size=\"1\">&nbsp;$col[1]</font></td>\n";
		  }
		?>
      </table>
      <br> </td>
  </tr>
</table>
<?php include("../scripts/footer.inc") ?>
</body>
</html>
