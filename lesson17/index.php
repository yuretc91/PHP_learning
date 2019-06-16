<?php
require_once "vendor/autoload.php";


// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

// open an image file
$img = Image::make('illidan.jpg');

// now you are able to resize the instance
$img->resize(320, 240);

// and insert a watermark for example
//$img->insert('public/watermark.png');

// finally we save the image as a new file
$img->save('bar.jpg');