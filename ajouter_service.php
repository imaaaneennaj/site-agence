<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "agencePub";
$conn = mysqli_connect($server_name, $user_name, $password, $db_name);
if (!$conn) {
    die("echec!" . mysqli_connect_error());
}
if(isset($_POST['ajouter_ser']) && !empty($_POST['ajouter_ser'])){
    $service=$_POST['nom_ser'];
    $description=$_POST['description'];
    $sql="INSERT INTO `services`( `nom_ser`,`description`) VALUES ('$service','$description')";
    if(mysqli_query($conn,$sql)){
        echo "La ligne a été ajouter avec succès.";
    } else{
        echo "Erreur : Impossible d'exécuter la requête de suppression. " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f0f0;
}

form {
    width: 300px;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    background-color: white;
}

input[type="text"], textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

textarea {
    resize: none;
    min-height: 50px;
}

input[type="submit"] {
    background-color: #007bff;
    color: white;
    cursor: pointer;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nom_ser">
        <textarea name="description"></textarea>
        <input type="submit" name="ajouter_ser" value="ajouter">
    </form>
</body>
</html>