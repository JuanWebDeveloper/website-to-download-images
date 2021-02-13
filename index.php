<?php

if (isset($_POST['download'])) {
    $imageRoute = $_POST['imageUrl'];
    $regPattern = '/\.(jpe?g|png|gif|bmp)$/i';
    
    if (preg_match($regPattern, $imageRoute)) {
        $extencion= substr($imageRoute, -3);
        // Initializing curl
        $curl = curl_init($imageRoute);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // Executing curl
        $downloadImg = curl_exec($curl);
        // Closed curl
        curl_close($curl);

        // Convert base 64 format to jpg for download
        header('Content-type: image/jpg'); // We select with which extension I want to save the image
        header('Content-Disposition: attachment;filename="image.jpg"'); // We select with what name we want to save the image
        echo $downloadImg;
    }
}

require './view.php';