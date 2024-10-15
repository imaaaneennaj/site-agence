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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">      
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="container  element " id="services">
    <div class="container-tab" id="tab">
        <h2>les realisations</h2>
        <button type="submit" name="ajoute_us" class="ajouter" id="jouter-u"><i class="fa-solid fa-user-plus"></i></button>
        <table class="tbl">
                <thead>
                        <tr>
                            <th>id</th>
                            <th>categorie</th>
                            <th>nom_image</th>
                            <th>image</th>
                            <th colspan="2">Action</th>
                        </tr>  
                </thead>
                <tr>
                            <th>id</th>
                            <th>categorie</th>
                            <th>nom_image</th>
                            <th>image</th>
                            <th colspan="2">Action</th>
                </tr>
                <?php
                    $result3="SELECT* FROM realisations ";
                    $resultg=$conn->query($result3);
                    if (!$resultg) {
                        echo "La récupération des données a rencontré un problème.";
                    }else{
                        $nb_rea = mysqli_num_rows($resultg);
                        if($nb_rea>0){
                        foreach($resultg as $row) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>"; 
                        echo "<td>" . $row['categorie'] . "</td>"; 
                        echo "<td>" . $row['nom_image'] . "</td>"; 
                        echo "<td><img width='100px' class='image_rea' src='image_rea.php?id=".$row['id']. "'/></td>"; 
                        echo "<td data-label='edit'>
                            <button class='btn-edit'><i class='fa fa-pencil'></i><ahref='modifier_res.php?id=".$row['id']. "'></a></button>
                            </td>";
                        echo "<td data-label='delete'>
                            <button class='btn-trash'><i class='fa fa-trash'></i><a href='supprimer_rea.php?id=".$row['id']. "'></a></button>
                            </td>";
                        echo "</tr>";}}}?>
        </table>
    </div> 
</div>
</body>
</html>