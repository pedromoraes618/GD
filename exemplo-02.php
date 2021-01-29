<?php 
//image certificado aulo usando image existente
$image = imagecreatefromjpeg("certificado.jpg");

$tileColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);


imagestring($image, 5, 150, 150, "certificado de conclusao", $tileColor);
imagestring($image, 5,  440, 350, "Pedro", $tileColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluido em : "). date("Y/d/m"), $tileColor);


header("Content-Type: image/jpeg");

imagejpeg($image,"certificado-".date("Y-m-d").".jpg", 10);


imagedestroy($image);



 ?>