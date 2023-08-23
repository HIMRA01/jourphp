<?php

require_once "database.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST ["username"];
     $email = $_POST ["email"];
     $password = $_POST ["password "];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    

$imgName = $_FILES['profile_image']['name'];
$tmpName =$_FILES['profile_image']['tmp_name'];
$destination = $SERVER['DOCUMENT_ROOT'].'/jourphp/img'. $imgName;
move_uploaded_file($tmpName,$destination );



$dbConnexion = dbConnexion();

$request = $dbConnexion ->prepare("INSERT INTO membres (pseudo, email, mdp, profil_img)VALUES(?, ?, ?, ?, ?,)"); 

try{
$request->execute(array(  $username, $email,  $hashed_password ,$imgName));

}catch(PDOException $e){

    echo $e->getMessage();
}




}
?>