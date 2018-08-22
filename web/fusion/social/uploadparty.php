<html>
<head>
<title>Fusion - Social - Registra Tu Evento</title>
<meta name="description" content="Proyecto, Fusion, Revista Digital, Saltillo, Coahuila">
<link href="../fusioncss.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#000000" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<?php include("../scripts/headder.inc") ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr valign="top"> 
    <td width="1%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td width="98%" class="contenido3"><img src="images/index_title.gif" alt="fusion social" width="256" height="75" border="0"><br> 
      <br> <strong>Tienes fiesta y te gustar&iacute;a salir en fusionsal.com?</strong><br>
      Anuncia tu evento aqu&iacute;, y un calificado grupo de expertos reporteros 
      y fot&oacute;grafos se lanzar&aacute;n a tomar fotos del evento.<br> <br> 
      <strong>Tiene alg&uacute;n costo publicar mi evento en fusi&oacute;n?</strong><br>
      No, el servicio se realiza sin costo alguno. Sin embargo, no aplica para 
      todos los eventos. En carnes asadas la cuota es un taco de carne, una quesadilla 
      o una cheve.<br> <br> <strong>Como hago para que mi evento se publique en 
      fusion?</strong><br>
      Llena la forma que esta a la derecha y da click en el bot&oacute;n de &quot;Anunciar 
      Fiesta&quot; para notificarnos tu evento.</td>
    <td align="center" bgcolor="#999966" class="contenido3"> <font color="#FFFFFF"> 
      <?
$x = 0;

if(!$party_name)  { $x += 1; }
if(!$party_direcc)  { $x += 1; }
if(!$party_colonia)  { $x += 1; }
if(!$party_date)  { $x += 1; }
if(!$party_phono)  { $x += 1; }
if(!$party_anuncia)  { $x += 1; }

if($x == 0){
    $message = " ";
	$message .= "$party_name \n";
    $message .= "$party_direcc \n";
    $message .= "$party_colonia \n";
    $message .= "$party_date \n";
    $message .= "$party_phono \n";
    $message .= "$party_anuncia \n";
    $message .= "$party_tipo \n";
	
	mail("fernando@fusionsal.com", "Mi Pachanga", $message);
?>
      </font> <table width="500" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td bgcolor="#FFFFFF"> <table width="500" border="0" cellspacing="1" cellpadding="10">
              <tr> 
                <td align="center" valign="top" bgcolor="#336699" class="contenido3"><font color="#FFFFFF"><strong><br>
                  Gracias por anunciarnos tu evento<br>
                  </strong><br>
                  Pr&oacute;ximamente ser&aacute;s contactado para confirmar los 
                  datos<br>
                  del evento y definir cualquier detalle sobre su publicaci&oacute;n.<br>
                  <br>
                  Contin&uacute;a checando el proyecto fusion.<br>
                  </font></td>
              </tr>
            </table></td>
        </tr>
      </table>
      <font color="#FFFFFF"> 
      <?php } else {
					if ($x <> 6) {
						echo "<br>ERROR: Necesitas llenar toda la forma.<br>Intenta de nuevo, por favor.<br>";
					}
		?>
      </font> <form action="uploadparty.php" method="post" name="frmParty" id="frmParty">
        <table width="500" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td bgcolor="#FFFFFF"> <table width="500" border="0" cellspacing="1" cellpadding="4">
                <tr> 
                  <td width="50%" align="right" valign="top" bgcolor="#336699" class="contenido3"> 
                    <font color="#FFFFFF"><strong>Nombre:</strong><br>
                    de quien esta anunciando la pachanga</font></td>
                  <td width="50%" valign="top" bgcolor="#6699CC"> <font color="#FFFFFF"> 
                    <input name="party_name" type="text" id="party_name" size="20" style="font-size:10px; font-family:verdana;">
                    </font></td>
                </tr>
                <tr> 
                  <td width="50%" align="right" valign="top" bgcolor="#336699" class="contenido3"> 
                    <font color="#FFFFFF"><strong>Direcci&oacute;n del evento:</strong><br>
                    Calle y n&uacute;mero donde ser&aacute; la pachanga</font></td>
                  <td width="50%" valign="top" bgcolor="#6699CC"> <font color="#FFFFFF"> 
                    <input name="party_direcc" type="text" id="party_direcc" size="35" style="font-size:10px; font-family:verdana;">
                    </font></td>
                </tr>
                <tr> 
                  <td width="50%" align="right" valign="top" bgcolor="#336699" class="contenido3"> 
                    <font color="#FFFFFF"><strong>Colonia:</strong><br>
                    Para ubicar donde sera el evento</font></td>
                  <td width="50%" valign="top" bgcolor="#6699CC"> <font color="#FFFFFF"> 
                    <input name="party_colonia" type="text" id="party_colonia" size="20" style="font-size:10px; font-family:verdana;">
                    </font></td>
                </tr>
                <tr> 
                  <td align="right" valign="top" bgcolor="#336699" class="contenido3"> 
                    <font color="#FFFFFF"><strong>Tipo de evento:</strong></font></td>
                  <td valign="top" bgcolor="#6699CC"><font color="#FFFFFF"> 
                    <select name="party_tipo" id="party_tipo" style="font-size:10px; font-family:verdana;">
                      <option value="Cumple">Cumple</option>
                      <option value="Borrachera">Borrachera</option>
                      <option value="Despedida">Despedida</option>
                      <option value="Carne/Discada/Taquiza">Carne/Discada/Taquiza</option>
                      <option value="Otro">Otro</option>
                    </select>
                    </font></td>
                </tr>
                <tr> 
                  <td width="50%" align="right" valign="top" bgcolor="#336699" class="contenido3"> 
                    <font color="#FFFFFF"><strong>Fecha:</strong><br>
                    Cu&aacute;ndo va a hacerse la fiesta</font></td>
                  <td width="50%" valign="top" bgcolor="#6699CC"> <font color="#FFFFFF"> 
                    <input name="party_date" type="text" id="party_date" size="15" style="font-size:10px; font-family:verdana;">
                    </font></td>
                </tr>
                <tr> 
                  <td width="50%" align="right" valign="top" bgcolor="#336699" class="contenido3"> 
                    <font color="#FFFFFF"><strong>Tel&eacute;fono:</strong><br>
                    Phono para confirmar el evento</font></td>
                  <td width="50%" valign="top" bgcolor="#6699CC"> <font color="#FFFFFF"> 
                    <input name="party_phono" type="text" id="party_phono" size="12" style="font-size:10px; font-family:verdana;">
                    </font></td>
                </tr>
                <tr> 
                  <td width="50%" align="right" valign="top" bgcolor="#336699" class="contenido3"> 
                    <font color="#FFFFFF"><strong>&nbsp;&nbsp;Te gustar&iacute;a 
                    que anunciemos<br>
                    tu evento en la p&aacute;gina?</strong><br>
                    Para que caiga m&aacute;s gente al lugar</font></td>
                  <td width="50%" valign="top" bgcolor="#6699CC" class="contenido3"> 
                    <font color="#FFFFFF"><strong> 
                    <input type="radio" name="party_anuncia" value="Si quiero que la anuncien">
                    Si, promuevan mi evento.<br>
                    <input type="radio" name="party_anuncia" value="No esten jodiendo las bolas">
                    No, thanks.</strong></font></td>
                </tr>
                <tr bgcolor="#333333"> 
                  <td height="35" colspan="2" align="center"><font color="#FFFFFF"> 
                    <input type="submit" name="cmdAceptar" value=" Anunciar fiesta " style="font-size:10px; font-family:verdana;">
                    </font></td>
                </tr>
              </table></td>
          </tr>
        </table>
      </form>
      <font color="#FFFFFF"> 
      <?php } ?>
      </font></td>
  </tr>
</table>
<?php include("../scripts/footer.inc") ?>
</body>
</html>
