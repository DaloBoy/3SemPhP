<?php

$wsdl = "http://lydbroadcastmodtager.azurewebsites.net/Service1.svc?wsdl";
//$wsdl = "http://localhost:10832/Service1.svc?wsdl";
$client = new SoapClient($wsdl);

$resultWrapped = $client->GetAllPersonale();
$e = $resultWrapped->GetAllPersonaleResult->Personale;
//print_r($e);

require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array(
    //'cache' => '/path/to/compilation_cache',
    'auto_reload' => true
));
$template = $twig->loadTemplate('Opsættere.html.twig');

$parametersToTwig = array("personale" => $e);
echo $template->render($parametersToTwig);
//Only for Push
