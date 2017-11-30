<?php


$kappa ="ZULUL";

require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array(
    //'cache' => '/path/to/compilation_cache',
    'auto_reload' => true
));
$template = $twig->loadTemplate('Index.html.twig');

$parametersToTwig = array("Test" => $kappa);
echo $template->render($parametersToTwig);

?>