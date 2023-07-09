<?php
require 'vendor/autoload.php';

// Retrieve values from input fields
$fromEmail = $_POST['fromEmail'];
$fromName = $_POST['fromName'];
$toEmail = $_POST['toEmail'];
$toName = $_POST['toName'];
$subject = $_POST['subject'];
$textContent = $_POST['textContent'];
$htmlContent = $_POST['htmlContent'];

$email = new \SendGrid\Mail\Mail();
$email->setFrom($fromEmail, $fromName);
$email->setSubject($subject);
$email->addTo($toEmail, $toName);
$email->addContent("text/plain", $textContent);
// $email->addContent("text/html", $htmlContent);

$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
try {
    $response = $sendgrid->send($email);
		echo  "Email sent successfully";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
?>