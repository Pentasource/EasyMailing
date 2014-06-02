<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 02.06.14
 * Time: 18:56
 */
ini_set("display_errors", "1");
error_reporting(E_ALL);
require_once 'inc/EasyMailing/Mail.class.php';


$mail = new Mail();

$mail->setFrom('muellermj97@gmail.com');
$mail->setTo('ampro@live.de');
$mail->setSubject('Test Email');
$mail->setMessage('Hallo,\nDies ist eine Testnachricht. Wenn sie durchkommt, wär das geil.\nMFG\nMichael');
echo $mail->send();
echo "Email sent";