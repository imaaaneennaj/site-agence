<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "agencePub";
$conn = mysqli_connect($server_name, $user_name, $password, $db_name);
if (!$conn) {
    die("echec!" . mysqli_connect_error());
}
if(isset($_POST['ajouter'])){
    $nom = $_POST['nom_realis'];
    $image = file_get_contents($_FILES['image']['tmp_name']);
    $nom_image=$_FILES['image']['name'];
    $sql = "INSERT INTO `realisations`(`categorie`, `nom_image`,`image`) VALUES (?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nom,$nom_image, $image);
    $stmt->execute();
    
    if($stmt->affected_rows > 0){
        echo "La réalisation a été ajoutée avec succès.";
    } else{
        echo "Erreur : Impossible d'exécuter la requête d'insertion. " . $stmt->error;
    }
    
    $stmt->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="form-ajoute form-ajoute-rea" id="fo-aj">
        <form action="" method="post" class="f-ajout" enctype="multipart/form-data">
            <input type="text" id="nom_realis" class="rea-form" name="nom_realis" placeholder="categoriedu realisateur" require>
            <input type="file" id="image" class="rea-form" name="image" require placeholder="Choisissez une image">
            <input type="submit" name="ajouter" value="Ajouter">
        </form>
</div>
</body>
</html>