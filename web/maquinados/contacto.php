<html>
<head>
<title>Maquinados y Soldadura VEGA</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<script language="JavaScript">
function showMap() {
	document.open("mapa.htm", "_blank", "toolbar=no,width=350,height=420,left=100,top=100");
}
</script>
</head>

<body onLoad="MM_preloadImages('images/toolbar/menu_01_up.gif')">
<?php
extract($_POST);

$msgErr = "";
$Err = 1;
// 0 success
// 1 first load
// 1+ errors
if (isset($_POST["Submit"])) {
	if (!$fromName) {
		$msgErr.="Error: Necesita escribir un NOMBRE.<br>";
		$Err++;
	}
	if (!$fromMail) {
		$msgErr.="Error: Necesita escribir un CORREO ELECTRÓNICO VALIDO.<br>";
		$Err++;
	}
	
	if ($Err == 1) {
		$Err = 0;
		enviaCorreo($fromName, $fromMail, $msgContacto);
	}
}

function enviaCorreo($fromName, $fromMail, $msgContacto) {
	//$fromName
	//$fromMail
	$fecha = date('l dS \of F Y h:i:s A');
		
	$to = "info@maquinadosvega.com.mx"; 
	$subject = "Comentarios en maquinadosvega.com.mx"; 
	$body = ' 
	<html> 
	<head> 
	   <title>Comentarios en maquinadosvega.com.mx</title> 
	</head> 
	<body> 
	<h2>Comentarios en maquinadosvega.com.mx</h2> 
	Escrito por: '.$fromName.'<br>
	E-mail: '.$fromMail.'<br>
	Mensaje: '
	.$msgContacto.
	'<br><br>
	Enviado: '.$fecha.'<br>
	</body> 
	</html> 
	'; 
	
	//para el envío en formato HTML 
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	
	$headers .= "From: ".$fromName."<".$fromMail.">\r\n"; 
	
	//Envia el mail
	mail($to, $subject, $body, $headers);
}
?>
<table width="750" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td rowspan="5" valign="top" background="images/shade_01_bg.gif" bgcolor="#FFFFFF"><img src="images/shade_01.gif" alt="" width="10" height="252" border="0"></td>
    <td height="90" bgcolor="#FFFFFF"><?php include("_pageheadder.php"); ?></td>
    <td rowspan="5" valign="top" background="images/shade_02_bg.gif" bgcolor="#FFFFFF"><img src="images/shade_02.gif" alt="" width="10" height="252" border="0"></td>
  </tr>
  <tr> 
    <td height="18"><table width="100%" border="0" cellpadding="0" cellspacing="0" id="toolbar">
        <tr> 
          <td width="50%" background="images/bg_toolbar.gif" bgcolor="#003366"><script language="JavaScript" type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script></td>
          <td width="1%"><a href="index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('menu_01','','images/toolbar/menu_01_up.gif',1)"><img src="images/toolbar/menu_01.gif" name="menu_01" width="70" height="18" border="0"></a></td>
          <td width="1%"><a href="quienes_somos.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('menu_02','','images/toolbar/menu_02_up.gif',1)"><img src="images/toolbar/menu_02.gif" name="menu_02" width="112" height="18" border="0"></a></td>
          <td width="1%"><a href="equipo.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('menu_03','','images/toolbar/menu_03_up.gif',1)"><img src="images/toolbar/menu_03.gif" name="menu_03" width="71" height="18" border="0"></a></td>
          <td width="1%"><a href="servicios.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('menu_04','','images/toolbar/menu_04_up.gif',1)"><img src="images/toolbar/menu_04.gif" name="menu_04" width="85" height="18" border="0"></a></td>
          <td width="1%"><a href="clientes.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('menu_05','','images/toolbar/menu_05_up.gif',1)"><img src="images/toolbar/menu_05.gif" name="menu_05" width="77" height="18" border="0"></a></td>
          <td width="1%"><img src="images/toolbar/menu_07_still.gif" alt="" width="95" height="18" border="0"></td>
          <td width="50%" background="images/bg_toolbar.gif" bgcolor="#003366"><img src="images/bg_toolbar.gif" alt="" border="0"></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td height="99%" valign="top" background="images/bg_02.jpg" bgcolor="#FFFFFF"> 
      <table width="750" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td valign="bottom"><img src="images/pixgris2.gif" width="50" height="1" border="0"></td>
          <td><img src="images/cont_title1.gif" width="104" height="20" border="0"></td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="50%" valign="top"><table width="300" border="0" cellpadding="0" cellspacing="6">
                    <tr valign="top"> 
                      <td nowrap class="formText"><div align="right">Oficinas:</div></td>
                      <td rowspan="4" nowrap><img src="images/dot_lines2.gif" width="1" height="156" border="0"></td>
                      <td nowrap class="content">Avenida 4ta #810<br>
                        Colonia Nazario Ortiz Garza<br>
                        C.P. 25100<br>
                        Saltillo, Coahuila, M&eacute;xico<br> <a href="#" onClick="showMap();">ver 
                        mapa</a></td>
                    </tr>
                    <tr valign="top"> 
                      <td nowrap class="formText">&nbsp;</td>
                      <td nowrap class="content">&nbsp;</td>
                    </tr>
                    <tr valign="top"> 
                      <td nowrap class="formText"><div align="right">Ventas:</div></td>
                      <td nowrap class="content">Tel&eacute;fono: (844) 134-06-05<br>
                        Fax: (844) 134-06-04<br> <a href="mailto:info@maquinadosvega.com.mx">info@maquinadosvega.com.mx</a></td>
                    </tr>
                    <tr valign="top"> 
                      <td nowrap>&nbsp;</td>
                      <td nowrap>&nbsp;</td>
                    </tr>
                  </table></td>
                <td width="50%" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="6">
                    <tr valign="top"> 
                      <td width="99%" nowrap class="formText"><div align="right">Representante</div></td>
                      <td width="1%" rowspan="6" nowrap class="content"><img src="images/dot_lines2.gif" width="1" height="156" border="0"></td>
                      <td width="99%" nowrap class="content">Juan Antonio Benavente 
                        <br>
                        <a href="mailto:jantonio@maquinadosvega.com.mx">jantonio@maquinadosvega.com.mx</a></td>
                    </tr>
                    <tr valign="top"> 
                      <td nowrap class="formText">&nbsp;</td>
                      <td nowrap class="content">&nbsp;</td>
                    </tr>
                    <tr valign="top"> 
                      <td nowrap class="formText">&nbsp;</td>
                      <td nowrap class="content">&nbsp;</td>
                    </tr>
                    <tr valign="top"> 
                      <td nowrap class="formText">&nbsp;</td>
                      <td nowrap class="content">&nbsp;</td>
                    </tr>
                    <tr valign="top"> 
                      <td nowrap class="formText">&nbsp;</td>
                      <td nowrap class="content">&nbsp;</td>
                    </tr>
                    <tr valign="top"> 
                      <td nowrap class="formText">&nbsp;</td>
                      <td nowrap class="content">&nbsp;</td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td valign="bottom"><img src="images/pixgris2.gif" width="50" height="1" border="0"></td>
          <td><img src="images/cont_title2.gif" width="122" height="20" border="0"></td>
        </tr>
        <tr> 
          <td width="50">&nbsp;</td>
          <td width="700"> 
            <?php if ($Err == 0) { ?>
            <!-- Success -->
            <br> <span class="content">Muchas gracias <strong> <?php echo $fromName; ?></strong>, 
            tus comentarios han sido enviados.<br>
            <br>
            da click aqu&iacute; para regresar al <a href="index.html">Inicio</a></span><font color="#333333"><br>
            <br>
            <br>
            </font> 
            <?php } else { ?>
            <!-- Form -->
            <form action="contacto.php" method="post" name="formContacto" id="formContacto">
              <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                <tr> 
                  <td valign="bottom" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="2">
                      <tr> 
                        <td width="120">&nbsp;</td>
                        <td width="330">&nbsp;</td>
                        <td rowspan="5" nowrap>&nbsp;&nbsp;<img src="images/dot_lines1.gif" width="1" height="183" border="0">&nbsp;&nbsp;</td>
                        <td width="330" rowspan="5" valign="top"><br> <span class="formNote">Los 
                          campos marcados con * son requeridos.</span><br> <br> 
                          <br> <span class="content"><font color="#990000"><?php echo $msgErr; ?></font></span></td>
                      </tr>
                      <tr> 
                        <td width="120" valign="top" nowrap class="formText"><div align="right">* 
                            Nombre:</div></td>
                        <td width="330"><input name="fromName" type="text" id="fromName2" value="<?php if (isset($fromName)) { echo $fromName; } ?>" size="25" maxlength="25"></td>
                      </tr>
                      <tr> 
                        <td valign="top" nowrap class="formText"><div align="right">* 
                            E-Mail:</div></td>
                        <td><input name="fromMail" type="text" id="fromMail" value="<?php if (isset($fromMail)) { echo $fromMail; } ?>" size="35" maxlength="35"></td>
                      </tr>
                      <tr> 
                        <td valign="top" nowrap class="formText"><div align="right">Comentarios:</div></td>
                        <td><textarea name="msgContacto" cols="40" rows="4" id="msgContacto"></textarea></td>
                      </tr>
                      <tr> 
                        <td height="40" colspan="2" bgcolor="#CCCCCC" class="formText"><div align="center"> 
                            <input type="submit" name="Submit" value="Aceptar">
                            &nbsp;&nbsp;&nbsp; 
                            <input type="reset" name="Submit2" value="Cancelar">
                          </div></td>
                      </tr>
                    </table></td>
                </tr>
              </table>
              <br>
              <?php } ?>
            </form></td>
        </tr>
      </table>
      <br> </td>
  </tr>
  <tr> 
    <td bgcolor="#333333"><img src="images/pixgris1.gif" width="1" height="1" border="0"></td>
  </tr>
  <tr> 
    <td background="images/bg_05.gif" bgcolor="#336699"><?php include("_pagefooter.php"); ?></td>
  </tr>
</table>
</body>
</html>