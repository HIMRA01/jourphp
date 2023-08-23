<?php
function dbConnexion(){
$connexionDb = null;

try{
    $connexionDb = new PDO("mysql:host=localhost;dbname=cours_db" , "root", "");

}catch(PDOException $e){
        $connexionDb =$e; 

}
return $connexionDb;
}