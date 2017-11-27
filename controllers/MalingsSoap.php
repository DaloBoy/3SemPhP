
<!DOCTYPE html>

<html>
<head>
   <meta charset="UTF-8">
   <title>SOAP consumer: Lyd</title>
    <link href="../Swag.css">
</head>
<body>
<?php
$Lyde = $_POST['lyde'];
$wsdl = "http://lydbroadcastmodtager.azurewebsites.net/Service1.svc?wsdl";
$client = new SoapClient($wsdl);
$parametersToSoap = array('lyd' => $Lyde);
$resultWrapped = $client->GetAllLyd($parametersToSoap);
//print_r('lyd');
foreach($resultWrapped as $x){

    echo '<pre>';
    print_r($x);
    echo '</pre>';

}

echo "<br/>";


require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array(
    //'cache' => '/path/to/compilation_cache',
    'auto_reload' => true
));
$template = $twig->loadTemplate('Soaphist.html.twig');

$parametersToTwig = array("resultWrapped" => $lyde);
echo $template->render($parametersToTwig);

?>

</body>

