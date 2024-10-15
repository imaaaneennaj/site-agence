<?php
////connection
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "agencePub";
$conn = mysqli_connect($server_name, $user_name, $password, $db_name);
if (!$conn) {
    die("echec!" . mysqli_connect_error());
}
//////////
if(isset($_POST['ajoute_us'])){
    $code=$_POST['code_us'];
    $nom=$_POST['nom_us'];
    $gmail=$_POST['gmail_us'];
    $role=$_POST['role_us'];
    $pass=$_POST['password_us'];
    $sql="INSERT INTO `utulisateurs`(`code`, `name`, `gmail`, `role_us`, `pass`) VALUES ('$code','$nom','$gmail','$role','$pass')";
    if(mysqli_query($conn,$sql)){
        echo "La ligne a été ajouter avec succès.";
    } else{
        echo "Erreur : Impossible d'exécuter la requête de suppression. " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Style général pour le formulaire */
form {
    width: 300px;
    margin: auto;
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

/* Style pour tous les champs de saisie */
input[type="text"],
input[type="gmail"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

/* Style pour le bouton de soumission */
input[type="submit"] {
    background-color: #007bff;
    color: white;
    cursor: pointer;
    border: none;
    padding: 10px;
    border-radius: 5px;
    width: 100%;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Style pour améliorer la lisibilité du texte */
body {
    font-family: Arial, sans-serif;
}

    </style>
</head>
<body>
<form action="" method="post">
    <input type="text" name="code_us" placeholder="Code utilisateur" require>
    <input type="text" name="nom_us" placeholder="Nom utilisateur" require>
    <input type="gmail" name="gmail_us" placeholder="Email utilisateur" require>
    <input type="text" name="role_us" placeholder="Rôle utilisateur" require>
    <input type="password" name="password_us" placeholder="Mot de passe" require>
    <input type="submit" value="Ajouter" name="ajoute_us">
</form>
</body>
</html>