<?php 
namespace App;
require_once '../vendor/autoload.php';
use chillerlan\QRCode\QRCode;

$data = 'otpauth://totp/test?secret=B3JX4VCVJDVNXNZ5&issuer=chillerlan.net';

// quick and simple:
echo '<img src="'.(new QRCode)->render($data).'" alt="QR Code" />';
?>