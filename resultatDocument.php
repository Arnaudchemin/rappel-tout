<?php
include 'documentClass.php';
$refDoc=$_POST["refer_doc"];
$dateFinValid=$_POST["date_fin_valid"];
$dateDoc=$_POST["date_doc"];
$refMat=$_POST["ref_mat"];



$document = new document($refDoc,$dateFinValid,$dateDoc,$refMat);

echo $refDoc;
echo $dateFinValid;
echo $dateDoc;
echo $refMat;

$document->retrieve();
 
?>