<?php


$uri = "http://lydmaler.azurewebsites.net/LydLydService1.svc/lyde/";
$jsondata = file_get_contents($uri);
//print_r($jsondata);
//$convertToAssociativeArray = true;
$maling = json_decode($jsondata, true);


$testMal = explode(",", $jsondata);

//print_r($testMal);
//foreach($testMal as $key){
//    print_r($key);
//}
sort($testMal);

foreach($testMal as $key){
    print_r($key);
}

//print_r($maling);
//return

require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array(
    //'cache' => '/path/to/compilation_cache',
    'auto_reload' => true
));
$template = $twig->loadTemplate('Hist.html.twig');

$parametersToTwig = array("malinger" => $maling);
echo $template->render($parametersToTwig);


?>




