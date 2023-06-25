<?php

$image_file = "compressed-photos/cat01.png";
$image_file2 = "compressed-photos/cat01.png"; // path to the image file

if(file_exists($image_file2)){
    $image_file=$image_file2;
}

$destination_image = "compressed-photos/arredo.png"; //path to the destination image
$quality = 9; // image quality, can be a value between 0 and 9, 9 being the highest quality

// get the image type and other information
$image_info = getimagesize($image_file);
$image_type = $image_info[2];

// create a new image from the source file based on the type
if($image_type === IMAGETYPE_JPEG || $image_type === 'jpg') {
   $image = imagecreatefromjpeg($image_file);
   imagejpeg($image, $destination_image, $quality);
} elseif($image_type === IMAGETYPE_PNG) {
   $image = imagecreatefrompng($image_file);

   // Create a blank PNG image with the same dimensions
   $png_image = imagecreatetruecolor(imagesx($image), imagesy($image));

   // Copy the PNG image onto the blank PNG image
   imagealphablending($png_image, false);
   imagesavealpha($png_image, true);
   imagecopy($png_image, $image, 0, 0, 0, 0, imagesx($image), imagesy($image));

   // Save the PNG image to a file
   imagepng($png_image, $destination_image, $quality);

   imagedestroy($png_image);
} elseif($image_type === IMAGETYPE_GIF) {
    $image = imagecreatefromgif($image_file);
} else {
    die("Unsupported image type.");
}

// free up memory
imagedestroy($image);

//echo "Image compressed and saved to new location.<br>";
?>
