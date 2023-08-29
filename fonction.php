<?php
require_once "database.php";

function getPost(){
$lesPosts =null;
$dbconnect = dbconnexion();


// $dbconnect = dbConnexion();
// $request = $dbconnect->prepare("SELECT * FROM posts");
$request = $dbconnect->prepare("SELECT id_post, likes, membre_id, text, photo, id_membres, pseudo FROM post, membres WHERE post.membre_id = membres.id_membres");

try{
$request->execute();
$lesPosts = $request->fetchall();

}catch(PDOException $e){
    $lesPosts = $e->getMessage();
}return $lesPosts;


}