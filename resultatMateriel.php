<?php
include 'materielClass.php';

$refMat=$_POST["refer_mate"];
$nomMat=$_POST["nom_mate"];

$materiel = new materiel($refMat,$nomMat);

echo $refMat;
echo $nomMat;

$materiel->create();
 
?>