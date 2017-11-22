<!Doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Swag.css"
</head>
</html>
<input id="button3"
       type="button" value="Back" onclick="window.location.href='../Index.php'">
<!--<a href="Index.php">Index</a>-->




<?php
$uri = "http://lydmåler2.azurewebsites.net/LydLydService1.svc/lyde";
$jsondata = file_get_contents($uri);
//print_r($jsondata)
$convertToArray = true;
$maling = json_decode($jsondata, $convertToArray);

print_r($maling);
//return

require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../3SemPhPPart');
$twig = new Twig_Environment($loader, array(
        //'cache' => '/path/to/compilation_cache',
        'auto_reload' => true
));
$template = $twig->loadTemplate('historik.html.twig');

$parametersToTwig = array("malinger" => $maling);
echo $template->render($parametersToTwig);
