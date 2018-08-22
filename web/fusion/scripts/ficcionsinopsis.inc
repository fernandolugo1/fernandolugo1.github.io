<?
if ($ficcion_from) {
	if ($ficcion_mail) {
		$subject = "$ficcion_from recomienda una sinopsis";
		$message .= "Saludos de Proyecto Fusion\n\n\n";
		$message .= "     Algun amigo tuyo checo un reportaje en FUSION FICCION\n";
		$message .= "y te quiere avisar que la nota que encontro esta chida.\n\n";
		$message .= "     Para ver que hongo, checate en:\n\n";
		$message .= "\t$HTTP_REFERER\n\n";
		
		$message .= "--\r\n";
		$message .= "\tProyecto Fusion, Revista Digital";
		
		$headers .= "From: Proyecto Fusion <$ficcion_from>\n";
		$headers .= "X-Sender: <$ficcion_from>\n"; 
		$headers .= "X-Mailer: PHP\n"; // mailer
		$headers .= "X-Priority: 1\n"; // Urgent message!
		$headers .= "Return-Path: <$ficcion_from>\n";  // Return path for errors
		
		$headers .= "cc:\n"; // CC to
		$headers .= "bcc:\n"; // BCCs to
		
		mail($ficcion_mail, $subject, $message, $headers);
		
		$fecha = date('d.m.y, h:i a ');
		$fl="mailscine.txt";
		$fp=fopen($fl, "aw");
		$fw=fwrite($fp, "$ficcion_from | $ficcion_mail | $fecha \n");
		fclose($fp);
		
		echo "<font color=\"#FFFFFF\">Gracias por checar<br>una FUSION - SINOPSIS<br>\n";
		echo "La sinopsis ha sido<br>enviada a:<br>$ficcion_mail</font>"; }
	else {
		echo "<font color=\"#FFFFFF\">Tienes que poner<br>un e-mail de destino<br>Si no, no jala<br>este pedo</font>";
	}
}
?>