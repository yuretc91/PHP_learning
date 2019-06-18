<?php
include 'dbOpen.php';
include "function.php";





$text = "<span style='color:red; font-size: 35px; line-height: 40px; margin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$subject=$_POST['subject'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme dot com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}


$getTags = "SELECT * FROM tags";
$tagsResult = mysqli_query($connection, $getTags);
if(!$tagsResult) {
	echo "Запрос не удался";
}

$content = renderTemplate('contact.php', [
	'text' => $text,
	'tags' => $tagsResult
]);

/*$layout = renderTemplate('layout.php', [
    'content' => $content,
    'title' => $title
    ]);*/

print($content);
?>
