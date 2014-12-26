<?php
/**
 * Created by PhpStorm.
 * User: Perron
 * Date: 12/26/2014
 * Time: 10:34 AM
 */

require_once('swiftmailer/lib/swift_required.php');
// Create the message
$message = Swift_Message::newInstance();

// Give the message a subject
$message->setSubject('Your subject');

// Set the From address with an associative array
$message->setFrom(array('perron@yellowbird.io' => 'YellowBird (no-reply)'));
$message->setSender(array('perron@yellowbird.io' => 'YellowBird (no-reply)'));

// Set the To addresses with an associative array
$message->setTo(array('pjones35@gatech.edu'));

// Or set it after like this
$message->setBody('My <em>amazing</em> body', 'text/html');

// Add alternative parts with addPart()
$message->addPart('My amazing body in plain text', 'text/plain');

// Create the Transport
$transport = Swift_SmtpTransport::newInstance('mail.yellowbird.io', 587)
    ->setUsername('perron@yellowbird.io')
    ->setPassword('PJones35')
;

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Send the message
$result = $mailer->send($message);

echo $result;


?>