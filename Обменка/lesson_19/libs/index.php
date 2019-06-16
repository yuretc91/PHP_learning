<?php

require_once 'header.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 25))
    ->setUsername('c31692c03088f4')
    ->setPassword('21555f8567d31a');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['john@doe.com' => 'John Doe'])
    ->setTo(['receiver@domain.org', 'coolalexnov@gmail.com' => 'A name'])
    ->setBody('Вам письмо с сайта');

// Send the message
$result = $mailer->send($message);