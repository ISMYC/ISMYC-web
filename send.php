
<?php
$destino="mago@ismyc.com";

$nombre = $_POST['nombre']
$email=$_POST['email']
$message = $_POST['message']


$headers = "From: $nombre <$email>\r\n";
$headers ="MIME-Version:1.0;\r\n";
$headers .="Content-type:text/html; \r\n charset=iso-8859-1; \r\n";
$headers.= "To: $destino;\r\n";


mail('mago@ismyc.com',$destino,$nombre,$project,$budget,$headers);

?>