<?php 
//image certificado aulo usando image existente
$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);


imagettftext($image, 32, 0 , 350, 150, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf","Certificado");
imagettftext($image, 32, 0 , 440, 350, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf","Pedro");
imagestring($image, 3, 440, 370, utf8_decode("Concluido em : "). date("Y/d/m"), $titleColor);


header("Content-Type: image/jpeg");

imagejpeg($image);


imagedestroy($image);



 ?>