    <?php

    function ping_domain($domain){
        $file = @fsockopen($domain, 80, $errno, $errstr, 10);
        (!$file) ? FALSE : TRUE;

        $testV2 = 0;
        if($file == TRUE){
            $testV2 = 1;
        }
        else{
            $testV2 = 0;
        }
        return $testV2;
    }
    //$domain = 'lydbroadcastmodtager.azurewebsites.net';
    $domain = 'google.com';
    $service = ping_domain($domain);

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