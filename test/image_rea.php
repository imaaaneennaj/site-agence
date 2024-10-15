<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "agencePub";
$conn = mysqli_connect($server_name, $user_name, $password, $db_name);
if (!$conn) {
    die("error: " . mysqli_connect_error());
}

$sql = "SELECT image FROM realisations WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_GET['id']);
if ($stmt->execute() === false) {
    die("Erreur  : " . htmlspecialchars($stmt->error));
}
$resulta = $stmt->get_result();
if ($resulta->num_rows > 0) {
    while ($row = $resulta->fetch_assoc()) {
        echo $row['image'];
    }
} else {
    echo "Aucune image trouve pour cet ID.";
}

?>
