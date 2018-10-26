<?php
$formula =  $_POST["formula"];
$cadena = '$var = '.' $formula;';
eval($cadena);
echo ($formula);
echo ($var);
?>
