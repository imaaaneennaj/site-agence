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
if(isset($_POST['send_pass_nv']) && !empty($_POST['send_pass_nv']) ){
	if(isset($_POST['pass_word_nv'])){
		$pass=$_POST['pass_word_nv'];
		$code=$_POST['code_pass'];
		$ver = "UPDATE utulisateurs SET pass = ? WHERE code = ?";
		$stmt = mysqli_prepare($conn, $ver);
        mysqli_stmt_bind_param($stmt, "ss", $pass, $code);
        mysqli_stmt_execute($stmt);
		if($stmt->affected_rows > 0){
            header('Location:http://localhost/projetstage/login/login.php');
		}else{
			echo "<script>alert('Échec de la mise à jour du mot de passe. Veuillez vérifier le code utilisateur et le nouveau mot de passe.');</script>";
		}
	}else{
		echo "<script>alert('Veuillez entrer un code utilisateur valide.');</script>";
	}
}