<?
if($msg_name) {
	if($msg_verbo) {
		$fl="msgpublic.txt";
		$fp=fopen($fl, "r");
		$fr=fread($fp, filesize($fl));
		$line=explode("\n", $fr);
		
		/*
		for($i=0; $i<(count($line) - 1); $i++) {
			$lin=explode("|", $line[count($line) - $i - 2]);
			if ($lin[0] == "fecha"){
			}
		}
		fclose($fp);
		
		$fecha= date('d|m');
		$mes = 5;
		if (((date('d') == 1) || (date('d') == 15)) && (date('m') == $mes)){
			echo "hoy es d�a 1 o 15";
		}
		
		$fecha= date('d.m.y, h:i a ');
		$fw=fwrite($fp, $auditivo_name."|".$auditivo_verbo."|".$fecha."\n");
		*/
		
		$fp=fopen($fl, "aw");
		$fecha= date('d.m.y, h:i a ');  
		$fw=fwrite($fp, $msg_name."|".$msg_verbo."|".$fecha."\n");
		fclose($fp);
		
		echo "Gracias <b>$msg_name</b><br>tu mensaje ha sido a�adido"; }
	else {
		echo "<b>$msg_name</b>, necesitas poner alg�n rollo.<br>\n\t\t";
		echo "Cualquier verbo de qu� piensas de la paginorra, o lo que quieras."; }
}
?>