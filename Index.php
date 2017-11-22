<!Doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Swag.css"
</head>
</html>

<h1>Målings project</h1>

<p>Start eller stop måling:</p>
<form action="welcome.php" method="post">
    <button class="button1">Start Måling</button>
    <button class="button2">Stop Måling</button> </br>
    <p>Se historik og opsættere:</p>
    <input id="button3"
           type="button" value="Historik" onclick="window.location.href='controllers/AllMalings.php'">
    <input id="button3"
           type="button" value="Opsætter" onclick="window.location.href='Opsættere.php'">

</form>
    <!--<button href="Historik.php" class="button3">Historik</button>
    <input class="button1" type="submit" value="Start måling">
    <input class="button2" type="submit" value="Stop måling">-->


<!--<a href="Historik.php">Historik</a>-->

<?php
