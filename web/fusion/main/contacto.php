<html>
<head>
<title>Fusion - Cont&aacute;ctanos</title>
<meta name="description" content="Proyecto, Fusion, Revista Digital, Saltillo, Coahuila">
<link href="../fusioncss.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php include("../scripts/headder.inc") ?>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td valign="top" bgcolor="#6699CC"><img src="images/cont_01.gif" width="40" height="340" border="0"> 
    </td>
    <td valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td><table width="95%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="1%"><img src="images/cont_title.gif" width="187" height="50" border="0"></td>
                <td width="99%" class="contenido3">Cualquiera que el motivo por 
                  el que nos contactes, la forma en la que lo hagas o el medio 
                  que utilices, <strong>mil gracias por visitar fusion</strong>.</td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td width="4" bgcolor="#336699"><img src="../images/pixnegro.gif" width="1" height="1" border="0"></td>
        </tr>
        <tr> 
          <td align="center" class="contenido3"> <br> <form action="contacto.php" method="post" enctype="multipart/form-data" name="frmContacto" id="frmContacto">
              <table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#336699">
                <tr> 
                  <td valign="top" bgcolor="#FFFFFF"> <table width="100%" border="0" cellpadding="3" cellspacing="0">
                      <tr bgcolor="#336699"> 
                        <td width="5%" height="20"><img src="images/cont_arrow.gif" width="20" height="20"></td>
                        <td width="95%" bgcolor="#6699CC" class="contbold"><font color="#FFFFFF">Dejanos 
                          un mensaje r&aacute;pido y sin tanto pedo</font></td>
                      </tr>
                      <tr> 
                        <td height="55" colspan="2" class="contenido">Quieres 
                          dejar un mensaje u opini&oacute;n a fusion? Alguna <strong>queja</strong>, 
                          <strong>sugerencia</strong>, <strong>comentario</strong>? 
                          O simplemente quieres rayarle la mouser al equipo fusion?<br> 
                          <br>
                          Este es tu espacio, <strong>&eacute;chale el verbo!</strong></td>
                      </tr>
                    </table></td>
                  <td width="1%" valign="top"> <table width="280" border="0" align="center" cellpadding="2" cellspacing="1">
                      <tr> 
                        <td width="67" height="20" align="right" bgcolor="#FFFFFF" class="contbold"><font color="#336699">&nbsp;Nombre:</font></td>
                        <td width="206" bgcolor="#6699CC"> <input name="contact_name" type="text" id="contact_name" style="font-size:10px; font-family:verdana;" size="20"></td>
                      </tr>
                      <tr> 
                        <td height="20" align="right" bgcolor="#FFFFFF" class="contbold"><font color="#336699">&nbsp;Edad:</font></td>
                        <td bgcolor="#6699CC"> <input name="contact_age" type="text" id="contact_age" style="font-size:10px; font-family:verdana;" size="4"></td>
                      </tr>
                      <tr> 
                        <td align="right" bgcolor="#FFFFFF" class="contbold"><font color="#336699"> 
                          Tu rollo:<br>
                          </font></td>
                        <td bgcolor="#6699CC"> <textarea name="contact_verbo" cols="35" rows="2" id="contact_verbo" style="font-size:10px; font-family:verdana;"></textarea></td>
                      </tr>
                      <tr> 
                        <td height="31" colspan="2" align="center" bgcolor="#333333"> 
                          <input type="submit" name="cmd_quickmsg" value=" Aceptar " style="font-size:10px; font-family:verdana;"> 
                        </td>
                      </tr>
                    </table></td>
                </tr>
              </table>
            </form>
            <br> 
            <?php

$msg_after =  "\tTe recomendamos continuar visitando <strong>fusionsal</strong> semana a semana<br><br> \n";
$msg_after .= "\tDa click para regresar a la página de ";
$msg_after .= "<a href=\"contacto.php\" class=\"linkrojo\"><font color=\"#FF0000\"><strong>contacto</strong></font></a><br> \n";
$msg_after .= "\tDa click aquí para regresar a la página principal ";
$msg_after .= "<a href=\"index.php\" class=\"linkrojo\"><font color=\"#FF0000\"><strong>fusionsal</strong></font></a><br><br><br><br> \n";
		
if ($contact_verbo) {
	if ($contact_name) {
		$fecha = date('d.m.y, h:i a ');
		
		$subject = "Comentarios fusion main";
		$from_name = $contact_name;
		$from_email = "fernando@fusionsal.com";
		$to_name = "Proyecto Fusion";
		$to_email = "fernando@fusionsal.com";
		$subject = "Comentarios fusion main";
		
		$message .= "\n$from_name\n";
		$message .= "Edad: $contact_age\n";
		$message .= "Tema: $contact_verbo\n";
		$message .= "\n";
		$message .= "\nSUB-CONTROL\n";
		$message .= "$fecha\n";
		$message .= "\t$HTTP_REFERER - $PHP_SELF";
		$message .= "\n";
		$message .= "\nOTROS\n";
		$message .= "\n";
		
		mail("$to_name<$to_email>", $subject, $message);
		echo "<br><br> \n";
		echo "\tGracias <strong>$contact_name</strong> por tus comentarios.<br><br> \n"."$msg_after";
	}
}
else { 
	if ($the_file) {
		$my_max_file_size 	= "512000"; # in bytes
		$image_max_width	= "1200";
		$image_max_height	= "1000";
		$the_path			= "files";

$registered_types = array(
					"application/x-gzip-compressed" 	=> ".tar.gz, .tgz",
					"application/x-zip-compressed" 		=> ".zip",
					"application/x-tar"					=> ".tar",
					"text/plain"						=> ".html, .php, .txt, .inc (etc)",
					"image/bmp" 						=> ".bmp, .ico",
					"image/gif" 						=> ".gif",
					"image/pjpeg"						=> ".jpg, .jpeg",
					"image/jpeg"						=> ".jpg, .jpeg",
					"application/x-shockwave-flash" 	=> ".swf",
					"application/msword"				=> ".doc",
					"application/vnd.ms-excel"			=> ".xls",
					"application/octet-stream"			=> ".exe, .fla (etc)"	);
$allowed_types = array("image/bmp","image/gif","image/pjpeg","image/jpeg","application/x-gzip-compressed", "application/x-zip-compressed", "application/x-tar", "text/plain", "image/bmp", "image/gif", "image/pjpeg", "image/jpeg", "application/x-shockwave-flash", "application/msword", "application/vnd.ms-excel", "application/octet-stream");


if (!ereg("^4",phpversion())) {
	function in_array($needle,$haystack) { # we have this function in PHP4, so for you PHP3 people
		for ($i=0; $i < count($haystack); $i++) {
			if ($haystack[$i] == $needle) {	return true; }
		}
	}
}

# --

function validate_upload($the_file) {
	global $my_max_file_size, $image_max_width, $image_max_height, $allowed_types, $the_file_type, $registered_types;
	
	if ($the_file == "none") { # do we even have a file?
		return false;
	} else { # check if we are allowed to upload this file_type
		
		if (!in_array($the_file_type, $allowed_types)) {
			$error .= "\n<li>The file that you uploaded was of a type that is not allowed, you are only 
						allowed to upload files of the type:\n<ul>";
			while ($type = current($allowed_types)) {
				$error .= "\n<li>" . $registered_types[$type] . " (" . $type . ")</li>";
				next($allowed_types);
			}
			$error .= "\n</ul>";
		}
	
		if (ereg("image",$the_file_type) && (in_array($the_file_type,$allowed_types))) {
		
			$size = GetImageSize($the_file);
			list($foo,$width,$bar,$height) = explode("\"",$size[3]);
	
			if ($width > $image_max_width) {
				$error .= "\n<li>Your image should be no wider than " . $image_max_width . " Pixels</li>";
			}
			
			if ($height > $image_max_height) {
				$error .= "\n<li>Your image should be no higher than " . $image_max_height . " Pixels</li>";
			}
		
		}
		
		if ($error) {
			return $error;
		} else {
			return false;
		}
	}
} # END validate_upload

		function upload($the_file) {
			global $the_path, $the_file_name;
			
			$error = validate_upload($the_file);
			if ($error) {
				echo "$error";
			} else {
				if (!@copy($the_file, $the_path . "/" . $the_file_name)) {
					echo "Tenemos fallas técnicas, por favor intenta enviarnos el archivo vía e-mail a:<br> \n";
					echo "<a href=\"mailto:fernando@fusionsal.com\" class=\"linkrojo\"><font color=\"#FF0000\"><strong>fernando@fusionsal.com</strong></font></a><br> \n";
					echo "Gracias<br> \n";
				} 
			}
		}
		
		upload($the_file);
		$fecha = date('d.m.y, h:i a ');
		
		$subject = "Comentarios fusion main";
		$from_name = $upload_name;
		$from_email = $upload_mail;
		$to_name = "Proyecto Fusion";
		$to_email = "fernando@fusionsal.com";
		$subject = "Comentarios fusion main";
		
		$message .= "\n$from_name\n";
		$message .= "Edad: $upload_age\n";
		$message .= "Tema: $upload_tema\n";
		$message .= "\n";
		$message .= "\nSUB-CONTROL\n";
		$message .= "$fecha\n";
		$message .= "\t$HTTP_REFERER - $PHP_SELF";
		$message .= "\n";
		$message .= "\nOTROS\n";
		$message .= "E-mail: $from_email\n";
		$message .= "\n";
		
		mail("$to_name<$to_email>", $subject, $message);
		
		echo "<br><br> \n";
		echo "\tGracias <strong>$upload_name</strong> por ayudarnos a construir y mejorar fusion<br><br> \n"."$msg_after";
}
else { // Si no puso ni Contact_Name ni Upload_Name ni The_File, escribe las formas
?>
            <form action="contacto.php" method="post" enctype="multipart/form-data" name="frmUpload" id="frmUpload">
              <table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#336699">
                <tr> 
                  <td width="99%" valign="top" bgcolor="#FFFFFF"> <table width="100%" border="0" cellpadding="3" cellspacing="0">
                      <tr bgcolor="#336699"> 
                        <td width="5%" height="20"><img src="images/cont_arrow.gif" width="20" height="20"></td>
                        <td width="95%" bgcolor="#6699CC" class="contbold"><font color="#FFFFFF">Cont&aacute;cto 
                          detallado</font></td>
                      </tr>
                      <tr> 
                        <td colspan="2" class="contenido">Si deseas que publiquemos 
                          cualquier material de tu autor&iacute;a, o que hablemos 
                          de alg&uacute;n tema en espec&iacute;fico, dinos <strong>de 
                          qu&eacute; hablar </strong>o <strong>env&iacute;anos 
                          tu archivo </strong>para publicarlo.<br> <br>
                          Nota: s&oacute;lo puedes enviar 1 archivo. Puedes comprimir 
                          varios documentos con winzip. Archivo m&aacute;ximo 
                          de 500 Kb.<br>
                          Publicaremos cualquier cosa, desde porno y religi&oacute;n 
                          hasta pol&iacute;tica y esc&aacute;ndalos.</td>
                      </tr>
                    </table></td>
                  <td width="1%" valign="top"> <table width="350" border="0" align="center" cellpadding="2" cellspacing="1">
                      <tr> 
                        <td width="43%" align="right" bgcolor="#FFFFFF" class="contbold"><font color="#336699">Tu 
                          nombre: </font></td>
                        <td width="57%" bgcolor="#6699CC"> <input name="upload_name" type="text" id="upload_name" style="font-size:10px; font-family:verdana;" size="20"></td>
                      </tr>
                      <tr> 
                        <td align="right" bgcolor="#FFFFFF" class="contbold"><font color="#336699">Edad:</font></td>
                        <td bgcolor="#6699CC"> <input name="upload_age" type="text" id="upload_age" style="font-size:10px; font-family:verdana;" size="4"></td>
                      </tr>
                      <tr> 
                        <td align="right" bgcolor="#FFFFFF" class="contbold"><font color="#336699">Tu 
                          e-mail:</font></td>
                        <td bgcolor="#6699CC"> <input name="upload_mail" type="text" id="upload_mail" style="font-size:10px; font-family:verdana;" size="20"></td>
                      </tr>
                      <tr> 
                        <td align="right" bgcolor="#FFFFFF" class="contbold"><font color="#336699">&nbsp;Tema 
                          o t&iacute;tulo:</font></td>
                        <td bgcolor="#6699CC"> <input name="upload_tema" type="text" id="upload_tema" style="font-size:10px; font-family:verdana;" size="20"></td>
                      </tr>
                      <tr> 
                        <td align="right" bgcolor="#FFFFFF" class="contbold"><font color="#336699"> 
                          Archivo a publicar:</font></td>
                        <td bgcolor="#6699CC" class="contbold"> <input name="the_file" type="file" id="the_file" style="font-size:10px; font-family:verdana;" size="15"></td>
                      </tr>
                      <tr> 
                        <td height="30" colspan="3" align="center" bgcolor="#333333" class="contbold"> 
                          <input type="submit" name="cmd_upload2" value=" Aceptar " style="font-size:10px; font-family:verdana;"> 
                        </td>
                      </tr>
                    </table></td>
                </tr>
              </table>
              <br>
            </form>
            <?php } } ?>
            <br> <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#336699">
              <tr> 
                <td width="1%" bgcolor="#336699"><img src="images/cont_arrow.gif" alt="Ch&eacute;cate las formas de abajo" width="20" height="20" border="0"></td>
                <td width="99%" bgcolor="#6699CC" class="contbold"><font color="#FFFFFF"> 
                  &nbsp;Tambi&eacute;n cont&aacute;ctanos v&iacute;a e-mail </font></td>
              </tr>
            </table>
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr class="contbold"> 
                <td width="99%" align="right" bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#336699">
                    <tr class="contbold"> 
                      <td width="50%" align="right" bgcolor="#FFFFFF"><font color="#336699">Dudas 
                        y cuestiones irrelevantes</font></td>
                      <td width="50%" bgcolor="#336699"><font color="#000000"><a href="mailto:info@fusionsal.com">info@fusionsal.com</a></font></td>
                    </tr>
                    <tr class="contbold"> 
                      <td align="right" bgcolor="#FFFFFF"><font color="#336699">Edic&oacute;n, 
                        Publicaci&oacute;n y contenido adictivo</font></td>
                      <td bgcolor="#336699"><font color="#000000"><a href="mailto:fernando@fusionsal.com">fernando@fusionsal.com</a></font></td>
                    </tr>
                    <tr class="contbold"> 
                      <td align="right" bgcolor="#FFFFFF"><font color="#336699">Publicidad, 
                        Marketing y ventas ilegales</font></td>
                      <td bgcolor="#336699"><font color="#000000"><a href="mailto:fernando@fusionsal.com">marketing@fusionsal.com</a></font></td>
                    </tr>
                    <tr class="contbold"> 
                      <td align="right" bgcolor="#FFFFFF"><font color="#336699">Corporativos 
                        y adquisiciones empresariales</font></td>
                      <td bgcolor="#336699"><font color="#000000"><a href="mailto:fernando@fusionsal.com">marketing@fusionsal.com</a></font></td>
                    </tr>
                  </table></td>
                <td width="1%" align="right" valign="bottom" bgcolor="#336699"><img src="images/cont_02.gif" width="15" height="15" border="0"></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
    <td valign="top" bgcolor="#6699CC">&nbsp;&nbsp;</td>
  </tr>
</table>
<?php include("../scripts/footer.inc") ?>
</body>
</html>