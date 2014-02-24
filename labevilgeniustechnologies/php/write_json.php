<?php

$filename = "egtech_data.json";

$towrite = $_POST["jsonData"];
echo $towrite;
$openedfile = fopen($filename, "w");
//$encoded = json_encode($towrite);
fwrite($openedfile, stripslashes($towrite));
fclose($openedfile);
//return "<br> <br>".$towrite;

?>