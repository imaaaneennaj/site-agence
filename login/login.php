
<!DOCTYPE html>
<html>
<head>
	<title> Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
</head>
<body>
      <div class="alert hide" id="alert">
         <span class="fas fa-exclamation-circle"></span>
         <span class="msg">Invalid usercode or password!</span>
      </div>
<!--*****************************************               -->
	<img class="wave" src="svg.png">
	<div class="container">
		<div class="img">
			<img src="undraw_progressive_app_m-9-ms.svg">
		</div>
		<div class="login-content element" id="form1">
			<form action="" method="post" >
				<img src="avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usercode</h5>
           		   		<input type="text" class="input" name="code" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="pass_word" required>
            	   </div>
            	</div>
            	<button id="btn_pass"><a href="#">Forgot Password?</a></button>
            	<input type="submit" class="btn" name="send" value="login" >
            </form>
        </div>
		<!-- *************************-->
		<div class="login-content element" style="display:none" id="form2">
           <form action="" method="post" >
				<img src="avatar.svg">
				<h2 class="title"></h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usercode</h5>
           		   		<input type="text" class="input" name="code_pass" required>
           		   </div>
           		</div>
           		
            	<a href="">retour</a>
            	<input type="submit" class="btn" name="send_pass" value="send" >
            </form>
       </div>
	   <!-- *************************-->
		<div class="login-content element" style="display:none" id="form3">
           <form action="" method="post" >
				<img src="avatar.svg">
				<h2 class="title"></h2>
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usercode</h5>
           		   		<input type="text" class="input" name="code_pass" required>
           		   </div>
           		</div>
				<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>nouveau Password</h5>
           		    	<input type="password" class="input" name="pass_word_nv" required>
            	   </div>
            	</div>
           		
            	<a href="">retour</a>
            	<input type="submit" class="btn" name="send_pass_nv" value="send" >
            </form>
       </div>
    </div>
<script type="text/javascript" src="js/main.js"></script>
 
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
//////////////
if(isset($_POST['send']) && !empty($_POST['send'])){
    if(isset($_POST['pass_word']) && isset($_POST['code']) && !empty($_POST['code']) &&!empty($_POST['pass_word'])){
	$pass = $_POST['pass_word'];
	$code=$_POST['code'];
    $check_sql = "SELECT role_us  FROM utulisateurs WHERE code=? and  pass=?";
    $stmt = mysqli_prepare($conn, $check_sql);
    mysqli_stmt_bind_param($stmt, "ss", $code,$pass);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row_count = mysqli_num_rows($result);
    if ($row_count > 0){
        $row = mysqli_fetch_assoc($result);
        if($row['role_us'] === "administrateur"){
            header('Location:http://localhost/projetstage/admin.php');
             exit();}
		else if($row['role_us'] === "utilisateur"){
			header('Location:http://localhost/projetstage/user.php');
			exit();  
		}
    }else{
	  	echo "<script>
        let alertElement = document.getElementById('alert');
        alertElement.classList.add('show', 'showAlert');
        alertElement.classList.remove('hide');

        setTimeout(function() {
            alertElement.classList.remove('show');
            alertElement.classList.add('hide');
        }, 3000);
        </script>";
        }
}}
///////////////
if(isset($_POST['send_pass']) && !empty($_POST['send_pass']) ){
	if(isset($_POST['code_pass'])){
		$code=$_POST['code_pass'];
		$ver="SELECT * FROM utulisateurs WHERE code=?";
		$stmt= mysqli_prepare($conn, $ver);
		mysqli_stmt_bind_param($stmt, "s", $code); 
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		$row_count = mysqli_num_rows($result); 
		if($row_count > 0){
			echo "<script>
			let forms = document.querySelectorAll('.element');
            forms.forEach(form => {
            if (form.id === 'form3') {
            form.style.display = 'block';
            } else {
            form.style.display = 'none';
            }
            });
			</script>";
		}else{
			echo "<script>
        let alertElement = document.getElementById('alert');
        alertElement.classList.add('show', 'showAlert');
        alertElement.classList.remove('hide');
        setTimeout(function() {
            alertElement.classList.remove('show');
            alertElement.classList.add('hide');
        }, 3000);
		setTimeout(function() {
            	window.location.href='http://localhost/projetstage/login/login.php'
        }, 3000);
	
        </script>";
		}
	}
}
////////////////
if(isset($_POST['send_pass_nv']) && !empty($_POST['send_pass_nv']) ){
	if(isset($_POST['pass_word_nv'])){
		$pass=$_POST['pass_word_nv'];
		$code=$_POST['code_pass"'];
		$ver="UPDATE utulisateurs set  pass=$pass where code=?";
		$ver=$conn->query($ver);
		if($ver){
			echo "<script>
        setTimeout(function() {
           lert('mise a jour de password avec succes ')
        }, 3000);
		setTimeout(function() {
            	window.location.href='http://localhost/projetstage/login/login.php'
        }, 3000);
	
        </script>";
		}else{
			echo "<script>
        let alertElement = document.getElementById('alert');
        alertElement.classList.add('show', 'showAlert');
        alertElement.classList.remove('hide');
        setTimeout(function() {
            alertElement.classList.remove('show');
            alertElement.classList.add('hide');
        }, 3000);
		setTimeout(function() {
            	window.location.href='http://localhost/projetstage/login/login.php'
        }, 3000);
	
        </script>";
		}
	}
}
?>
<script>
	 window.addEventListener('beforeunload', function(e) {
    if (!formSubmitted) { 
        e.preventDefault();
        e.returnValue = 'Vous avez des changements non sauvegardés. Voulez-vous vraiment quitter ?';
    }
});


if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}
	let btn_pass = document.getElementById("btn_pass");
btn_pass.addEventListener("click", function() {
    let forms = document.querySelectorAll(".element");
    forms.forEach(form => {
        if (form.id === "form2") {
            form.style.display = "block";
        } else {
            form.style.display = "none";
        }
    });
});
</script>
</body>
</html>