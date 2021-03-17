
<?php
$to = "essidahlem.info1997@gmail.com";
$from = $_POST['mail'];
$name = $_POST['name'];
$subject = $_POST['subject'];
// $number = $_REQUEST['numero'];
$message = $_POST['message'];

$headers = "De: $from";
$headers = "A: " . $from . "\r\n";
$headers .= "A: ". $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= 'Content-Type:text/html; charset="uft-8"'."\r\n"; //ISO-8859-1 //"Content-Type:text/html; charset=ISO-8859-1\r\n";

$subject = "Vous avez un message de {$name}!";

$logo = 'img/logo.png';
$link = 'index.blade.php';

$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Mail</title></head><body>";
$body .= "<table style='width: 100%;'>";
$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
$body .= "</td></tr></thead><tbody><tr>";
$body .= "<td style='border:none;'><strong>Nom:</strong> {$name}</td>";
$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
$body .= "</tr>";
$body .= "<tr><td style='border:none;'><strong>Objet:</strong> {$subject}</td></tr>";
$body .= "<tr><td></td></tr>";
$body .= "<tr><td colspan='2' style='border:none;'>{$message}</td></tr>";
$body .= "</body></table>";
$body .= "</body></html>";

$send = mail($to, $subject, $body, $headers);

?>
