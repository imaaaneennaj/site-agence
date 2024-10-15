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
////////////////
if(isset($_POST['update'])){
    $id=$_GET['id'];
    $image = file_get_contents($_FILES['nv_image']['tmp_name']);
    $nom_image=$_FILES['nv_image']['name'];
    $sql="UPDATE realisations SET  nom_image=?,image=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $nom_image, $image, $id);
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
    <title>Mise à jour d'image</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input[type="file"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
   <form action="" method="post" enctype="multipart/form-data">
       <label for="nv_image">Choisissez une nouvelle image:</label>
       <input type="file" name="nv_image" id="nv_image">
       <input type="submit" name="update" value="Mettre à jour">
   </form>
</body>
</html>