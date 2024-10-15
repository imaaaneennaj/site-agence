<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "agencePub";
$conn = mysqli_connect($server_name, $user_name, $password, $db_name);
if (!$conn) {
    die("echec!" . mysqli_connect_error());
}
////////////////////////

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
       <!--*********realisations********-->
       <div class="form-ajoute" id="for-up-rea">
          <?php
if(isset($_GET['idmo_rea'])){
    $id=$_GET['idmo_rea'];
        $result="SELECT* FROM realisations where  id=$id";
        $result=$conn->query($result);
            if (!$result) {
                echo "La récupération des données a rencontré un probleme.";
            } else {
                $nb_us = mysqli_num_rows($result);
                echo"<form action='' method='post' enctype='multipart/form-data' class='update_rea'>";
                foreach($result as $row){
                    echo " <input type='text' class='upd_rea' name='nom' value='".$row['categorie']."'>";
                    echo " <input type='text' class='upd_rea' name='nom_image' value='".$row['nom_image']."'>";
                    echo " <a href='modifier_image.php?id=".$row['id']. "'>modifier l'image</a>";
                    echo "<input type='submit' name='update' value='update'>";
                  }
                echo"</form>";
            }
    }
?>

    <?php
if(isset($_POST['update']) && !empty(isset($_POST['update']))){
      $nv_nom=$_POST['nom'];
      $id=$_GET['id'];
      $nom_imge=$_POST['nom_image'];
      $sql="UPDATE realisations SET nom='$nv_nom', nom_image='$nom_imge' WHERE id=?";
      $stmt = $conn->prepare($sql);
     $stmt->bind_param("i",$id);
     $stmt->execute();
    
    if($stmt->affected_rows > 0){
        echo "La réalisation a été ajoutée avec succès.";
    } else{
        echo "Erreur : Impossible d'exécuter la requête d'insertion. " . $stmt->error;
    }
    
    $stmt->close();
}
?>
  </div>
</body>
</html>