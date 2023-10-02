<?php
    $driver = "mysql:host=127.0.0.1;dbname=rappelmat" ;
    try
    {	
        $connex = new PDO($driver,"root","");
        //Exécuter la requête $req
    }
    catch(PDOException $e){
        die ('Erreur : '.$e->getmessage());
    }
?>