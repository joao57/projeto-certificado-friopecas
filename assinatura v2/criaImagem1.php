<?php
// Define the size of the image
$imgWidth = 423;
$imgHeight = 247;

// Receive the background image
$imgResource = imagecreatefromjpeg("imagens/ass.jpg");

// Define the colors
$textcolor = imagecolorallocate($imgResource, 0, 0, 0);
$cor_h1 = imagecolorallocate($imgResource, 0, 0, 0);
$cor_h3 = imagecolorallocate($imgResource, 0, 0, 0);

// Load fonts
$fnormal = './font/arial.ttf';
$fnegrito = './font/ARIBLK.ttf';
$fnegritoeitalico = './font/Calibri.ttf';
$fhankenGrotesk = './font/HankenGrotesk_VariableFont_wght.ttf';
$fmontserrat = './font/Montserrat_VariableFont_wght.ttf';

$nome = urldecode($_POST['nome']);
$nomeSize = "22";
$cargo = urldecode($_POST['cargo']);
$cargoSize = "14";
$email = urldecode($_POST['email']);
$emailSize = "12";
$tel = urldecode($_POST['tel']);
$telSize = "12";
$cel = urldecode($_POST['cel']);
$celSize = "12";

$att = "Atenciosamente,";
$attSize = "11";
$phone = "+55 " . $tel;
$celular = "+55 " . $cel;
$emailCom = $email;

$textNome = imagettfbbox($nomeSize, 0, $fnegrito, $nome);
$textCargo = imagettfbbox($cargoSize, 0, $fnegrito, $cargo);
$textrEmail = imagettfbbox($emailSize, 0, $fnegrito, $emailCom);
$textTel = imagettfbbox($telSize, 0, $fnegrito, $phone);
$textCel = imagettfbbox($celSize, 0, $fnegrito, $celular);
$textEnd = imagettfbbox($attSize, 0, $fnegrito, $att);

// Write text on the image
// Name, position
imagettftext($imgResource, $nomeSize, 0, 360, 57, $cor_h1, $fhankenGrotesk, $nome);
imagettftext($imgResource, $cargoSize, 0, 360, 86, $cor_h3, $fmontserrat, $cargo);
// Email, location, phone
imagettftext($imgResource, $telSize, 0, 400, 153, $cor_h3, $fmontserrat, $emailCom);
imagettftext($imgResource, $celSize, 0, 400, 185, $cor_h3, $fmontserrat, $celular); // Change to location
imagettftext($imgResource, $emailSize, 0, 400, 217, $cor_h3, $fmontserrat, $phone);

// Check if an image file was uploaded
if ($_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
    $uploadedImagePath = $_FILES['profile_picture']['tmp_name'];   // Path of the uploaded image avatar
    // you may need to modify $_FILES['profile_picture'] to match the name of your file input field.
    $imgUser = imagecreatefromjpeg($uploadedImagePath);
    
    // Define the position and size of the avatar
    $dotSize = 150; // Diameter of the avatar
    $dotX = 174; // X coordinate of the avatar
    $dotY = 132; // Y coordinate of the avatar
    
    // Copy and resize the uploaded image as the avatar
    imagecopyresampled($imgResource, $imgUser, $dotX - ($dotSize / 2), $dotY - ($dotSize / 2), 0, 0, $dotSize, $dotSize, imagesx($imgUser), imagesy($imgUser));
}

// Header indicating that it's a JPEG image
header('Content-type: image/jpeg; charset=utf-8');

// Send the image to the browser or save to a file
imagejpeg($imgResource, NULL, 80);

// Clean up memory
imagedestroy($imgResource);
?>