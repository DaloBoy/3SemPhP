<?php


$wsdl = "http://lydbroadcastmodtager.azurewebsites.net/Service1.svc?wsdl";
$client = new SoapClient($wsdl);



$resultWrapped = $client->GetAllLydMedSted();
$e = $resultWrapped->GetAllLydMedStedResult->Lyd;

//print_r($e);

echo "<br/>";


//har lavet ændring
//foreach($resultWrapped as $x){
//    echo '<pre>';
//    print_r($x);
//    echo '</pre>';
//}

echo "<br/>";

require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array(
    //'cache' => '/path/to/compilation_cache',
    'auto_reload' => true
));
$template = $twig->loadTemplate('Soaphist.html.twig');

$parametersToTwig = array("lydera" => $e);
echo $template->render($parametersToTwig);

?>


