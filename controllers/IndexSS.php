<?php
$wsdl = "http://lydbroadcastmodtager.azurewebsites.net/Service1.svc?wsdl";
//$wsdl = "http://localhost:10832/Service1.svc?wsdl";
$client = new SoapClient($wsdl);

$resultWrapped = $client->Update();

$test = $client->TjekStatus();
$status = $test->TjekStatusResult;
//print_r($status);

function ping_domain($domain){
    $file = @fsockopen($domain, 80, $errno, $errstr, 10);
    return (!$file) ? FALSE : TRUE;
}
$domain = 'lydbroadcastmodtager.azurewebsites.net';
//$domain = 'google.com';
$service = ping_domain($domain);

$sted = $_POST['sted'];
$parametersToSoap = array('SetId' => $sted);
$testResult = $client->SetIdSted($parametersToSoap);


require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array(
    //'cache' => '/path/to/compilation_cache',
    'auto_reload' => true
));
$template = $twig->loadTemplate('Index.html.twig');
$parametersToTwig = array("state" => $status);
echo $template->render($parametersToTwig);



?>