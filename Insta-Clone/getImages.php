<?php

$imageDirectory = 'public/images';  // Path to the images folder
$imageFiles = glob($imageDirectory . '/Story_Image_*_profile_picture.jpg');

// Array to store image names
$imageNames = [];

foreach ($imageFiles as $file) {   
    $imageNames[] = basename($file);  // gets only the filename
}
header('Content-Type: application/json');

echo json_encode($imageNames);
?>
