<?php
require "vendor/autoload.php";
use Google\Cloud\Vision\VisionClient;
$vision = new VisionClient(['keyFile' => json_decode(file_get_contents("DeteccionEnfermedades-7834aed7a851.json", true))]);
$familyPhotoResource = fopen("aedes1.jpg", 'r');
$image = $vision->image($familyPhotoResource, ['FACE_DETECTION', 'WEB_DETECTION']);
$result = $vision->annotate($image);
var_dump($result);

 ?>
