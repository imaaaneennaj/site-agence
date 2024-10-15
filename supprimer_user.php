<?php
///connection
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "agencePub";
$conn = mysqli_connect($server_name, $user_name, $password, $db_name);
if (!$conn) {
    die("echec!" . mysqli_connect_error());
}
///////
if(isset($_GET['id1'])){
    $code=$_GET['id1'];
    $sql = "DELETE FROM utulisateurs WHERE code = $code";
    if(mysqli_query($conn,$sql)){
        echo "La ligne a été supprimée avec succès.";
    } else{
        echo "Erreur : Impossible d'exécuter la requête de suppression. " . mysqli_error($conn);
    }
}
mysqli_close($conn);
