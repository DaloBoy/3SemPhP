<?php
$wsdl = "http://lydbroadcastmodtager.azurewebsites.net/Service1.svc?wsdl";
$client = new SoapClient($wsdl);

$resultWrapped = $client->GetAllLyd();

$e = $resultWrapped->GetAllLydResult->Lyd;

$tempArray = sort($e);
//print_r($e);
sort($e);

echo "<br/>";


require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array(
    //'cache' => '/path/to/compilation_cache',
    'auto_reload' => true
));
$template = $twig->loadTemplate('SortView.html.twig');

$parametersToTwig = array("lydera" => $tempArray);
echo $template->render($parametersToTwig);
//print_r($tempArray);
echo "<br/>";