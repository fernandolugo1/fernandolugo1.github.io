<html>
<head>
<title>Fusion - Antros</title>
<meta name="description" content="Proyecto, Fusion, Revista Digital, Saltillo, Coahuila">
<link href="../fusioncss.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body bgcolor="#000000" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<?php include("../scripts/headder.inc") ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr valign="top"> 
    <td width="79%" bgcolor="#6699CC"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td bgcolor="#004477"><img src="images/main_title.jpg" width="550" height="60" border="0"></td>
        </tr>
      </table>
      <br>
      <table width="100%" border="0" align="center" cellpadding="12" cellspacing="0">
        <tr> 
          <td class="contenido3"><font color="#FFFFFF">Fusion es para ti, tu construyes 
            a proyecto fusion, y por ello nos interesa escuchar <strong>tu opinion.</strong> 
            </font></td>
        </tr>
        <tr> 
          <td bgcolor="#336699" class="contenido3"><font color="#FFFFFF">Te gustar&iacute;a 
            que visitemos los Antros para tomar fotos? Qu&eacute; Antros o lugares 
            te gustar&iacute;a que visitemos? Te gustar&iacute;a que regalemos 
            cosas cuando visitemos esos sitios?</font></td>
        </tr>
        <tr> 
          <td class="contenido3"><font color="#FFFFFF">Para dise&ntilde;ar una 
            secci&oacute;n perrona, estamos realizando una encuesta que definir&aacute; 
            si nos lanzamos a hacer este jale o la neta nos ponemos a hacer otra 
            cosa. <strong>Usa nuestro pool interactivo</strong>, el que te presentamos 
            aqu&iacute; a un lado, y ayudanos a die&ntilde;ar un mejor fusion 
            para ti.<br>
            <br>
            Puedes votar alg&uacute;n antro que est&eacute; mencionado o si lo 
            prefieres, puedes recomendar tu lugar favorito.</font></td>
        </tr>
        <tr> 
          <td bgcolor="#336699" class="contenido3"><font color="#FFFFFF"><strong>Vota, 
            no seas ojaldra!</strong></font></td>
        </tr>
      </table>
      <img src="images/corner_03.gif" width="500" height="25"> </td>
    <td width="19%" rowspan="2" align="center" bgcolor="#336699" class="contenido"> 
      <?php
		if ($antro || $add_antro) {
			// Inicializa RESPuesta y detecta el renglon del antro RESPuesta
			$resp = 0;
			$fl="antrosgo.txt";
			$fp=fopen($fl, "r");
			$fr=fread($fp, filesize($fl));
			$row=explode("\n", $fr);
			for($i=0; $i<count($row) - 1; $i++) {
				$antros=explode("|", $row[$i]);
				if ((strcasecmp($antro, $antros[0]) == 0) || (strcasecmp($add_antro, $antros[0]) == 0)) {
					$resp = $i + 1; break; } }
			fclose($fp);
			
			if ($resp == 0) {
				$fp=fopen($fl, "a");
				$fw=fwrite($fp, "".$add_antro."|0\n");
				fclose($fp);
				$resp = count($row);}
			
			// Agrega el VOTO del antro
			$resp -= 1;
			$datafile="antrosgo.txt";
			$data=file($datafile);
			$subdata=explode("|",$data[$resp]);
			$subdata[1]+=1;
			$data[$resp]=implode("|", $subdata);
			$data[$resp]=$data[$resp]."\n";
			$fp=fopen($datafile,"w+");
				$a=0;
				do { fputs($fp,$data[$a]);
					 $a++; }
				while($a<count($data));
			fclose($fp);
			
		  	echo "\t<font color=\"#FFFFFF\"><strong>Gracias por votar<br> \n";
		  	echo "\tConsideraremos visitar $antro $add_antro </strong></font><br> \n";
		  	echo "<br>\n";
		}
	  ?>
      <form action="index.php" method="post" name="frmRankAntros" id="frmRankAntros">
        <table width="200" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#000000">
          <tr> 
            <td width="70%" height="16" align="center" bgcolor="#666666" class="contenido2"><font color="#FFFFFF">antro</font></td>
            <td width="30%" align="center" nowrap bgcolor="#666666" class="contenido2"><font color="#FFFFFF">&nbsp;votos&nbsp;</font></td>
          </tr>
          <?php
			$fl="antrosgo.txt";
			$fp=fopen($fl, "r");
			$fr=fread($fp, filesize($fl));
			$reng=explode("\n", $fr);
			for($i=0; $i<count($reng) - 1; $i++)  {
				$col=explode("|", $reng[$i]);
				echo "          <tr> \n";
				echo '            <td height="10" bgcolor="#CCCCCC" class="contenido2"><input type="radio" name="antro" value="'."$col[0]\">&nbsp;$col[0]</td>\n";
				echo '            <td height="10" align="center" bgcolor="#CCCCCC" class="contenido2">'."$col[1]</td>\n          </tr>"; }
		  ?>
          <tr align="center" valign="bottom" bgcolor="#666666" class="contenido2"> 
            <td height="20" colspan="6"><font color="#FFFFFF"> Sugieres otro antro 
              o lugar?</font></td>
          </tr>
          <tr valign="top" bgcolor="#CCCCCC" class="contenido2"> 
            <td colspan="6">&nbsp;&nbsp;Nombre: 
              <input name="add_antro" type="text" id="add_antro" style="font-size:10px; font-family:verdana; color:000000;" size="21" maxlength="40"> 
            </td>
          </tr>
          <tr valign="bottom" bgcolor="#333333"> 
            <td height="35" colspan="6" align="center"> <input type="submit" name="cmdAceptar" value=" Votar " style="font-size:10px; font-family:verdana;"> 
            </td>
          </tr>
        </table>
      </form></td>
    <td width="2%" bgcolor="#003366"><img src="images/main_left.gif" width="20" height="200" border="0"> 
    </td>
  </tr>
  <tr valign="top"> 
    <td bgcolor="#6699CC"><?php include("../scripts/banner.inc"); ?></td>
    <td bgcolor="#003366">&nbsp;</td>
  </tr>
</table>
<?php include("../scripts/footer.inc") ?>
</body>
</html>