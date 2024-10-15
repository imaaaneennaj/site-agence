<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "agencePub";
$conn = mysqli_connect($server_name, $user_name, $password, $db_name);
if (!$conn) {
    die("echec!" . mysqli_connect_error());
}
///////////////////////////////recuperation les donnees
$result2="SELECT * FROM services ";
$result2=$conn->query($result2);
    if (!$result2) {
        echo "La récupération des données a rencontré un problème.";
    } else {
        $nb_ser = mysqli_num_rows($result2);
        
    }
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        color: #333;
        background-color: #f9f9f9;
        padding: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 12px 15px;
        text-align: left;
        vertical-align: middle;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    h1, h3 {
        text-align: center;
        margin-bottom: 10px;
    }

    h1 {
        color: #007bff;
    }

    h3 {
        color: #666;
    }
    </style>
</head>
<body>
    <h1>les services</h1>
    <h3> le nomber des services =<?php echo $nb_ser ?></h3>
    <form action="ajouter_service.php" methode="post">
        <input type="submit" name="ajoute_se" value="ajouter">
    </form>
    <table>
        <tr>
            <th>id_service</th>
            <th>nom de service</th>
            <th>description</th>
        </tr>
        <?php
  
    foreach($result2 as $row) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>"; 
        echo "<td>" . $row['nom_ser'] . "</td>"; 
        echo "<td>" . $row['description'] . "</td>"; 
        echo "<td><a href='supprimer_service.php?id=".$row['id']. "'>supprimer</a>
         <a href='modifier_service.php?id=".$row['id']. "'>modifier</a></td>";
        echo "</tr>";
    }
    ?>
       
    </table>
</body>
</html>