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
if(isset($_GET['idmo-ser'])){
$id=$_GET['idmo-ser'];
    $result="SELECT* FROM services where  id=$id";
    $result=$conn->query($result);
        if (!$result) {
            echo "La récupération des données a rencontré un probleme.";
        } else {
            $nb_us = mysqli_num_rows($result);
             
        }
}
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
    <div class="form-ajoute ">
        <form action="" method="post"  class="update-ser">
        <?php
              foreach($result as $row){
                echo " <input  class='upd-ser' type='text' name='nom' value='".$row['nom_ser']."'>";
                echo " <textarea class='upd-ser' name='description'></textarea>";
                echo "<input type='submit' name='update' value='update'>";
              }
        ?>
       </form>
    </div>
       
<?php
if(isset($_POST['update']) && !empty(isset($_POST['update']))){
      $nv_nom=$_POST['nom'];
      $id=$_GET['idmo-ser'];
      $desc=$_POST['description'];
      $sql="UPDATE services SET nom_ser='$nv_nom', description='$desc' WHERE id='$id'";
      if(mysqli_query($conn,$sql)){
        echo "La ligne a été modifier avec succès.";
    } else{
        echo "Erreur : Impossible d'exécuter la requête de suppression. " . mysqli_error($conn);
    }
}
?>
</body>
</html>