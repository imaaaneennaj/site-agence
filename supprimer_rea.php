<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "agencePub";
$conn = mysqli_connect($server_name, $user_name, $password, $db_name);
if (!$conn) {
    die("echec!" . mysqli_connect_error());
}
if(isset($_GET['idsu_rea']) && !empty($_GET['idsu_rea'])){
    $id=$_GET['idsu_rea'];
    $sql = "DELETE FROM realisations WHERE id = $id";
    if(mysqli_query($conn,$sql)){
        echo "La ligne a été supprimée avec succès.";
    } else{
        echo "Erreur : Impossible d'exécuter la requête de suppression. " . mysqli_error($conn);
    }
}
mysqli_close($conn);