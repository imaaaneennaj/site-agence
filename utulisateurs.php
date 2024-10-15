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
//////////
if(isset($_POST['utulisateurs'])){
    $result="SELECT* FROM utulisateurs ";
$result=$conn->query($result);
    if (!$result) {
        echo "La récupération des données a rencontré un probleme.";
    } else {
        $nb_us = mysqli_num_rows($result);
         
    }
    $conn->close();

}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <title>users</title>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
            font-family: "poppins",sans-serif;
        }
        body{
            background: hsl(57, 54%, 44%);
	        display: flex;
	        justify-content: center;
	        align-items: center;
	        min-height: 100vh;}
        .container{
            min-height:600px;
	        max-width: 1440px;
	        width: 100%;
	        background: #fff;
	        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
            opacity: 0;
           }
        .container h2{
	        padding: 2rem 2rem;
	        font-size: 2.5rem;
	        text-align: center;
            text-transform: uppercase;}
        .tbl{
	        width: 100%;
	        border-collapse: collapse;}
        .tbl thead{
	      background: #c7c10c;
	      color: #fff;}
       .tbl thead tr th{
	     font-size: 0.9rem;
	     padding: 0.8rem;
	     letter-spacing: 0.2rem;
	     vertical-align: top;
	     border: 1px solid #aab7b8;}
      .tbl tbody tr td{
     	font-size: 1rem;
	    letter-spacing: 0.2rem;
	    font-weight: normal;
	    text-align: center;
	    border: 1px solid #aab7b8;
	    padding: 0.8rem;}
      .tbl tr:nth-child(even){
        background: #fffc9d;
	    transition: all 0.3s ease-in;
	    cursor: pointer;}
      
    .tbl button {
	    display: inline-block;
	    border: none;
	    margin: 0 auto;
	    padding: 0.4rem;
	    border-radius: 1px;
	    outline: none;
	   cursor: pointer;}
       .tbl button :hover{
        transform: scale(1.5);
       }
   .btn-trash{
	    background: #e74c3c;
	    color: #fff;}
   .btn-edit{
	   background: #1e8449;
	  color: #fff;}
    .ajouter{
        border:none;
        margin: 0 auto;
	    padding: 0.6rem;
	    border-radius: 1px;
        outline: none;
	   cursor: pointer;
       background:rgb(0,0,0,0);
    }
    .ajouter i{
        font-size: 1.6rem;
        cursor: pointer;
        transition: all 0.5s ease-out;
    }
    .ajouter i:hover{
        transform: scale(1.3);
    }
@media(max-width:768px){
	.tbl thead{
		display: none;
	}
	.tbl tr,.tbl td{
		display: block;
		width: 100%;
	}
	.tbl tr{
		margin-bottom: 1rem;
	}
	.tbl tbody tr td{
		text-align: right;
		position: relative;
	}
	.tbl td::befor{
		content: attr(data-label);
		position: absolute;
		left: 0;
		width: 50%;
		text-align: left;
		padding-left: 1.2rem;
	}
}
    </style>
</head>
<body>
    <div class="container">
        <div class="container-tab">
               <h2>les utulisateurs</h2>
               <form action="ajouter_user.php" methode="post">
                    <button type="submit" name="ajoute_us" class="ajouter"><i class="fa-solid fa-user-plus"></i></button>
               </form>
            <table class="tbl">
                <thead>
                <tr>
                   <th>#</th>
                   <th>Code</th>
                   <th>Name</th>
                   <th>Gmail</th>
                   <th>Role</th>
                   <th>Password</th>
                   <th colspan="2">Action</th>
                  </tr>  
                </thead>
                  <tr>
                   <th>#</th>
                   <th>Code</th>
                   <th>Name</th>
                   <th>Gmail</th>
                   <th>Role</th>
                   <th>Password</th>
                   <th colspan="2">Action</th>
                  </tr>
           <?php
          $num=1;
          foreach($result as $row) {
            echo "<tr>";
            echo "<td data-label='user id'>" . $num . "</td>";
            echo "<td data-label='user code'>" . $row['code'] . "</td>"; 
            echo "<td data-label='user name'>" . $row['name'] . "</td>"; 
            echo "<td data-label='user email'>" . $row['gmail'] . "</td>"; 
            echo "<td data-label='user role'>" . $row['role_us'] . "</td>"; 
            echo "<td data-label='user pass'>" . $row['pass'] . "</td>"; 
            echo "<td data-label='edit'>
            <button class='btn-edit'><i class='fa fa-pencil'></i><a href='modifier_user.php?id=".$row['code']."'></a></button>
            </td>";
             echo "<td data-label='delete'>
            <button class='btn-trash'><i class='fa fa-trash'></i><a href='supprimer_user.php?id=".$row['code']."'></a></button>
            </td>";
            echo "</tr>";
            $num=$num+1; }?>
            </table>
            
        </div>
    </div>
</body>
</html>