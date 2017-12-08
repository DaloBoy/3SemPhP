<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$wsdl = "http://lydbroadcastmodtager.azurewebsites.net/Service1.svc?wsdl";
$client = new SoapClient($wsdl);

$resultWrapped = $client->GetAllLyd();
$e = $resultWrapped->GetAllLydResult->Lyd;

$jsondata = json_encode($e);
//print_r($jsondata);
//$convertToAssociativeArray = true;
//$maling = json_decode($jsondata, true);

// Create and write to the file
$fh = fopen("database.txt", 'w');
    fwrite($fh, $jsondata);
    $pageText = fread($fh,  25000);
    fclose($fh);

//print_r($e);

echo "<br/>";
//Load composer's autoloader
require '../vendor/autoload.php';

$mail = new PHPMailer(true);                     // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    //$mail->Host = gethostbyname('smtp.gmail.com');
    $mail->Host = 'smtp.gmail.com; smtp2.live.com';       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'pepekajmeemteam@gmail.com';        // SMTP username
    $mail->Password = 'KajogAndrea1234';                  // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted SSL: 465, TLS: 587
    $mail->Port = 587;

    //Recipients
    $mail->setFrom('pepekajmeemteam@gmail.com', 'Trolls');
    $mail->addAddress('rasserdrengen23@gmail.com', 'Rasmus');// Add a recipient
    //$mail->addAddress('ellen@example.com');             // Name is optional
    $mail->addReplyTo('pepekajmeemteam@gmail.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    //Attachments
    $mail->addAttachment('database.txt');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Test Email';
    $mail->Body    = '<b>Hello there! This is a test!</b>';
    $mail->AltBody = 'Test again again!';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}