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
if(isset($_GET['idm'])){
    $id=$_GET['idm'];
    $result="SELECT* FROM utulisateurs where  code=$id";
$result=$conn->query($result);
    if (!$result) {
        echo "La récupération des données a rencontré un probleme.";
    } else {
        $nb_us = mysqli_num_rows($result);
         
    }
    if(isset($_POST['update-user'])){
        $code=$_POST['code'];
        $nom=$_POST['nom'];
        $gmail=$_POST['gmail'];
        $role=$_POST['role'];
        $pass=$_POST['pass'];
        $sql="update utulisateurs set code='$code',name='$nom' ,gmail='$gmail' ,role_us='$role' ,pass='$pass' where code='$id'";
        if(mysqli_query($conn,$sql)){
            echo "La ligne a été ajouter avec succès.";
        } else{
            echo "Erreur : Impossible d'exécuter la requête de suppression. " . mysqli_error($conn);
        }
    }
    $conn->close();

}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Style général pour le formulaire */
form {
    width: 400px;
    margin: 20px auto;
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
    color: #333;
    background-color: #f9f9f9;
    padding: 20px;
}

    </style>
</head>
<body>
    <div >
        <form action="" method="post">
        <?php
              foreach($result as $row){
                echo " <input type='text' name='code' value='".$row['code']."'>";
                echo " <input type='text' name='nom' value='".$row['name']."'>";
                echo " <input type='gmail' name='gmail' value='".$row['gmail']."'>";
                echo " <input type='text' name='role' value='".$row['role_us']."'>";
                echo " <input type='text' name='pass' value='".$row['pass']."'>";
                echo "<input type='submit' name='update' value='update'>";
              }
         ?>
        </form>
    </div>
</body>
</html>