<?php

    function ping_domain($domain){
        $file = @fsockopen($domain, 80, $errno, $errstr, 10);
        return (!$file) ? FALSE : TRUE;
    }
    //$domain = 'lydbroadcastmodtager.azurewebsites.net';
    $domain = 'google.com';
    $service = ping_domain($domain);
    if (ping_domain($domain))
    {
        $service = true;
        //echo  "online.";
    }
    else
    {
        $service = false;
        //echo "offline.";
    }

$ZULUL ="V1";

require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array(
    //'cache' => '/path/to/compilation_cache',
    'auto_reload' => true
));
$template = $twig->loadTemplate('Index.html.twig');

$parametersToTwig = array("service" => $service);
echo $template->render($parametersToTwig);

?>