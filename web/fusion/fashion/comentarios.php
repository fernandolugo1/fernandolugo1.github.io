<html>
<head>
<title></title>
<meta name="description" content="Proyecto, Fusion, Revista Digital, Saltillo, Coahuila">
<link href="../fusioncss.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#000000" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<?php include("../scripts/headder.inc") ?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="10%" valign="top" bgcolor="#F9F8E6"><a href="index.php"><img src="images/index_title.gif" alt="fusion fashion" width="180" height="50" border="0"></a><br> 
      <table width="180" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td align="right"><a href="whattobuy.php"><img src="images/main_01.gif" alt="La ropa m&aacute;s actual la encontrar&aacute;s aqu&iacute;." width="137" height="30" border="0"></a></td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td align="right"><a href="wheretobuy.php"><img src="images/main_02.gif" alt="Cuales son las mejores tiendas para encontrar ropa." width="137" height="30" border="0"></a></td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td align="right"><a href="howtocombine.php"><img src="images/main_03.gif" alt="Aprende a combinar la ropa que tienes." width="137" height="30" border="0"></a></td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td align="right"><a href="comentarios.php"><img src="images/main_04.gif" alt="&Eacute;chanos un grito o danos tu opini&oacute;n." width="137" height="30" border="0"></a></td>
        </tr>
        <tr> 
          <td height="19">&nbsp;</td>
        </tr>
      </table></td>
    <td width="75%" align="center" valign="top" bgcolor="#CCCC99" class="contenido3">
<?php

if ($fash_verbo) {
	if ($fash_name) {
		$fecha = date('d.m.y, h:i a ');
		
		$subject = "Comentarios fusion fahion";
		$message .= "$fash_name\n";
		$message .= "Edad: $fash_age\n";
		$message .= "Verbo: $fash_verbo\n";
		$message .= "\n";
		$message .= "\n\tSUB-CONTROL\n";
		$message .= "$fecha\n";
		$message .= "\t$HTTP_REFERER - $PHP_SELF";
		$message .= "\n";
		$message .= "\n\tOTROS\n";
		$message .= "Qué es: $fash_quesoy\n";
		$message .= "Qué marca es mejor: $fash_mark\n";
		
		mail("fernando@fusionsal.com", $subject, $message);
		
		echo "<br><br> \n";
		echo "\tGracias <strong>$contact_name</strong> por tus comentarios.<br><br> \n"."$msg_after";
		echo "\tCon tu ayuda diseñaremos un mejor fusion.<br>";
		echo "\t Da clic aquí para regresar a <strong><a href=\"$HTTP_REFERER\">Comentarios</a></strong><br><br>"; }
	else {
		echo "\t<br> Tienes que poner un nombre, si no no jala esta cosa.<br>";
		echo "\t Da clic aquí para regresar a <strong><a href=\"$HTTP_REFERER\">Comentarios</a></strong><br><br>"; } }
else {
	// Si no puso ni fash_name ni fash_age, escribe las formas
	if($fash_name){
		echo "\t<br> Tienes que escribir un mensaje, no seas guey.<br>";
	}
?>
	<br>
	<form action="comentarios.php" method="post" enctype="multipart/form-data" name="frmQuickMsg" id="frmQuickMsg">
        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="99%" bgcolor="#000000" class="contbold"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;Dejanos 
              tus comentarios</font></td>
            <td width="1%" bgcolor="#000000"><img src="images/arrow_01.gif" width="18" height="18" border="0"></td>
          </tr>
          <tr> 
            <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="5">
                <tr> 
                  <td valign="top" class="contenido3">Qu&eacute; te pareci&oacute; 
                    fusion fashion?<br>
                    Te pareci&oacute; una secci&oacute;n bastante &quot;pu&ntilde;alona&quot;?<br>
                    Crees que son buenas nuestras recomendaciones?<br>
                    Alguna queja, sugerencia, comentario?<br> <br>
                    Escribenos y te dise&ntilde;aremos un mejor fusion fashion.</td>
                </tr>
              </table></td>
            <td valign="top"><table width="290" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#333333">
                <tr> 
                  <td width="81" align="right" bgcolor="#999966" class="contbold"><font color="#FFFFFF">Nombre:</font></td>
                  <td width="192" bgcolor="#CCCC99"> <input name="fash_name" type="text" id="fash_name" style="font-size:10px; font-family:verdana;" size="20"></td>
                </tr>
                <tr> 
                  <td align="right" bgcolor="#999966" class="contbold"><font color="#FFFFFF">Edad:</font></td>
                  <td bgcolor="#CCCC99"> <input name="fash_age" type="text" id="fash_age" style="font-size:10px; font-family:verdana;" size="4"></td>
                </tr>
                <tr> 
                  <td align="right" bgcolor="#999966" class="contbold"><font color="#FFFFFF">Qu&eacute; 
                    eres?</font></td>
                  <td bgcolor="#CCCC99"> <select name="fash_quesoy" id="fash_quesoy" style="font-size:10px; font-family:verdana;">
                      <option value="Estudiante">Estudiante</option>
                      <option value="No Estudiante">No Estudiante</option>
                      <option value="Se&ntilde;or/Se&ntilde;ora">Se&ntilde;or/Se&ntilde;ora</option>
                      <option value="&Ntilde;o&ntilde;o">&Ntilde;o&ntilde;o</option>
                      <option value="Que te importa quien soy">Que te importa 
                      quien soy</option>
                      <option value="Otro">Otro</option>
                    </select></td>
                </tr>
                <tr> 
                  <td align="right" bgcolor="#999966" class="contbold"><font color="#FFFFFF">Qu&eacute; 
                    marca<br>
                    es mejor?</font></td>
                  <td bgcolor="#CCCC99"> <select name="fash_mark" id="fash_mark" style="font-size:10px; font-family:verdana;">
                      <option value="Tito Bandolero">Tito Bandolero</option>
                      <option value="Gloria Vandervilt">Gloria Vandervilt</option>
                      <option value="DKNY">DKNY</option>
                      <option value="Gravity (pirata de Quarry)">Gravity (pirata 
                      de Quarry)</option>
                      <option value="Los Jeans de la pulga">Los Jeans de la pulga</option>
                      <option value="Otra marca">Otra marca</option>
                    </select></td>
                </tr>
                <tr> 
                  <td align="right" bgcolor="#999966" class="contbold"> <font color="#FFFFFF">&nbsp;Comentarios</font><font color="#FFFFFF">:<br>
                    </font></td>
                  <td bgcolor="#CCCC99"> <textarea name="fash_verbo" cols="35" rows="3" id="fash_verbo" style="font-size:10px; font-family:verdana;"></textarea></td>
                </tr>
                <tr> 
                  <td height="30" colspan="2" align="center"> <input type="submit" name="cmd_quickmsg" value=" Aceptar " style="font-size:10px; font-family:verdana;"> 
                  </td>
                </tr>
              </table></td>
          </tr>
        </table>
      </form>
      <br>
	  <?php } ?>
	  <br>
	  <br>
	  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
          <td bgcolor="#000000" class="contbold"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;Escribenos 
            un mail</font></td>
          <td width="1%" bgcolor="#000000"><img src="images/arrow_01.gif" width="18" height="18" border="0"></td>
        </tr>
        <tr> 
          <td valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="5">
              <tr> 
                <td class="contenido3">Te gustar&iacute;a salir como modelo en 
                  fusion fashion?<br>
                  Eres due&ntilde;o de una tienda de ropa y quieres que la anunciemos 
                  o promovamos aqu&iacute; en fusion?<br>
                  Quieres dejarnos un mensaje y la forma de llenado anterior no 
                  te sirvi&oacute;?<br> <br>
                  Usa nuestras direcciones e-mail y cont&aacute;ctanos.</td>
              </tr>
            </table></td>
          <td width="1%" valign="top"> <table width="250" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#000000">
              <tr> 
                <td width="40%" bgcolor="#6699cc" class="contbold"><font color="#FFFFFF">INFORMACI&Oacute;N 
                  IRRELEVANTE</font></td>
              </tr>
              <tr> 
                <td width="40%" bgcolor="#336699" class="contbold"><font color="#FFFFFF"><a href="mailto:info@fusionsal.com">info@fusionsal.com</a></font></td>
              </tr>
              <tr> 
                <td bgcolor="#6699cc" class="contbold"><font color="#FFFFFF">CONTENIDO 
                  FASHION </font></td>
              </tr>
              <tr> 
                <td bgcolor="#336699" class="contbold"><font color="#FFFFFF"><a href="mailto:fernando@fusionsal.com">fernando@fusionsal.com</a></font></td>
              </tr>
            </table></td>
        </tr>
      </table>
      <br>
      <br> </td>
    <td width="15%" valign="top" background="images/back01.gif" bgcolor="#999966">&nbsp;</td>
  </tr>
</table>
<?php include("../scripts/footer.inc") ?>
</body>
</html>
