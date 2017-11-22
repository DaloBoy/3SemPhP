<?php
$peeps = array
(
    array("Billy Joe","Jimbob",87347622,"Redneck.YEAH@gmail.com"),
    array("Ivan Ivanson","Ivanovitch",87652341,"Cyka.Blyat@Vodka.com"),
    array("Jens Jeppersen", "Jensen",55586114,"Jens.Jensen@hotmail.com"),
);

foreach($peeps as $v){
    echo $v[1].", ".$v[0].", Telefon ". $v[2] . "E-mail: " . $v[3].".<br>";
}


?>
<a href="Index.php">Index</a>
