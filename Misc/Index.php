<!Doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../Swag.css"
</head>
<body>

<h1>Målings project</h1>

<p>Start eller stop måling:</p>

<form action="welcome.php" method="post">


</br>
    <div class="popup" onclick="<?php startData()?>">Start måling
        <span class="popuptext" id="myPopup"></span>
    </div>
    <button class="button2">Stop måling</button> </br>
    <p>Se historik og opsættere:</p>
    <input id="button3"
           type="button" value="Historik" onclick="window.location.href='../controllers/MalingsSoap.php'">
    <input id="button3"
           type="button" value="Opsætter" onclick="window.location.href='Opsættere.php'">
</form>

</body>
</html>
    <!--<button href="Historik.php" class="button3">Historik</button>
    <input class="button1" type="submit" value="Start måling">
    <input class="button2" type="submit" value="Stop måling">-->

<script>
    // When the user clicks on <div>, open the popup
    function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
    }
</script>
<!--<a href="Historik.php">Historik</a>-->

<?php


function startData(){
    $wsdl = "http://lydbroadcastmodtager.azurewebsites.net/Service1.svc?wsdl";
    $client = new SoapClient($wsdl);

    $client->UpdateStatus("1");
}