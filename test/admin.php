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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="sidbare">
        <div class="log"></div>
          <ul class="menu">
            <li class="active li_a">
                <a href=""><button name="home" class="clac"><i class="fas fa-tachometer-alt"></i> <span>tableau de bord</span></button></a>
            </li>
            <li class="li_a">
                   <a href=""><button name="utulisateurs" class="clac"><i class="fa-solid fa-users"></i><span>Utilisateurs</span></a>
            </li>
            <li class="li_a">
                   <button name="services"  class="clac"><i class="fa-solid fa-desktop"></i><span>Services</span></button>
            </li>
            <li class="li_a">
                   <button  name="realisations" class="clac"><i class="fa-solid fa-briefcase"></i><span>Réalisations</span></button>
            </li>
            <li class="logout li_a ">
                <a href="generation.php"><i class="fa-solid fa-power-off"></i><span>Logout</span></a>
            </li>
            <li class="li_a">
                   <button  name="messages" class="clac"><i class="fa-solid fa-message"></i><span>messages</span></button>
            </li>
          </ul>
    </div>
    <div class="main" id="main">
        <div class="header-wr" id="header-wr">
            <div class="header-ti">
                <span>Bienvenu</span>
                <h2>Dashboard</h2>
            </div>
            <div class="info-user">
                <div class="search">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="search">
                </div>
                <img src="images/gray.jpeg">
            </div>
        </div>
        <div class="card-container element " id="home1">
            <h3 class="main-tit">Données d'aujourd'hui</h3>
            <div class="card-w">
                <div class="card-p light_purple">
                    <div class="card-hea">
                        <div class="amount">
                            <span class="title">nombre des services</span>
                            <span class="amount-value"><?php $result2="SELECT * FROM services ";
                           $result2=$conn->query($result2); $nb_ser = mysqli_num_rows($result2); echo "$nb_ser";?></span>
                        </div>
                        <i class="fas fa-list icon dark-purple"></i>
                    </div>
                    <span class="card-detail">*******   **** ***** </span>
                </div>

                <div class="card-p light-green">
                    <div class="card-hea">
                        <div class="amount">
                            <span class="title">nombre des utulisateures</span>
                            <span class="amount-value"><?php $result="SELECT* FROM utulisateurs ";
                    $result=$conn->query($result); $nb_us = mysqli_num_rows($result); echo "$nb_us";?></span>
                        </div>
                        <i class="fas fa-users icon dark-green"></i>
                    </div>
                    <span class="card-detail">*******   **** ***** </span>
                </div>

                <div class="card-p light_blue">
                    <div class="card-hea">
                        <div class="amount">
                            <span class="title">nombre des realisations</span>
                            <span class="amount-value"><?php $result3="SELECT* FROM realisations ";
                    $result3=$conn->query($result3);$nb_rea = mysqli_num_rows($result3); echo "$nb_rea";?></span>
                        </div>
                        <i class="fa-solid fa-check icon dark-blue"></i>
                    </div>
                    <span class="card-detail">*******   **** ***** </span>
                </div>
            </div>
        </div>
        <div class="tabluar-wr element " id="home2">
            <h3 class="main-ti"></h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>code</th>
                            <th>nom et prenom</th>
                            <th>email</th>
                            <th>role</th>
                            <th> mot de passe</th>
                        </tr>
                    </thead>
                        <tbody>
                        <?php
                        $result="SELECT* FROM utulisateurs ";
                        $result=$conn->query($result);
                        if(!$result){
                        echo "La récupération des données a rencontré un probleme.";
                        }else{
                        $nb_us = mysqli_num_rows($result);
                        if($nb_us>0){
                        while($row = $result->fetch_assoc()){
                            if($row['role_us']=="utilisateur"){
                                echo "<tr>";
                            echo "<td data-label='user code'>" . $row['code'] . "</td>"; 
                            echo "<td data-label='user name'>" . $row['name'] . "</td>"; 
                            echo "<td data-label='user email'>" . $row['gmail'] . "</td>"; 
                            echo "<td data-label='user role'>" . $row['role_us'] . "</td>"; 
                            echo "<td data-label='user pass'>" . $row['pass'] . "</td>"; 
                            echo "</tr>";
                            }
                            
                             }}}

                            ?>
                          
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5"></td>
                            </tr>
                        </tfoot>
                    
                </table>
            </div>
        </div>
                         <!--*************************users**********************-->
        <div class="container  element des-active" id="utulisateurs">
            <div class="container-tab" id="tab">
                <h2>les utulisateurs</h2>
                <button  name="ajoute_us"id="jouter-us" class="ajouter ajouter-gene"><i class="fa-solid fa-user-plus"></i></button>
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
                    $result="SELECT* FROM utulisateurs ";
                    $result=$conn->query($result);
                    if(!$result){
                        echo "La récupération des données a rencontré un probleme.";
                    }else{
                        $nb_us = mysqli_num_rows($result);
                        if($nb_us>0){
                        $num=1;
                        while($row = $result->fetch_assoc()){
                            echo "<tr>";
                            echo "<td data-label='user id'>" . $num . "</td>";
                            echo "<td data-label='user code'>" . $row['code'] . "</td>"; 
                            echo "<td data-label='user name'>" . $row['name'] . "</td>"; 
                            echo "<td data-label='user email'>" . $row['gmail'] . "</td>"; 
                            echo "<td data-label='user role'>" . $row['role_us'] . "</td>"; 
                            echo "<td data-label='user pass'>" . $row['pass'] . "</td>"; 
                            echo "<td data-label='edit'>
                                <button class='btn-edit' id='btn-edit-us' onclick='return editForm_us(this)' data-line='" . $row['code'] . "'><i class='fa fa-pencil'></i></button>
                                </td>";
                            echo "<td data-label='delete'>
                                <button class='btn-trash'><a color='white' href='?id1=".$row['code']."'><i class='fa fa-trash'></i></a></button>
                                </td>";
                            echo "</tr>";
                             $num++;}}}?>
                </table>
            </div>
       </div>
                        <!--*************************services**********************-->
        <div class="container  element des-active" id="services">
            <div class="container-tab" id="tab">
                <h2>les services</h2>
               <button name="ajoute_ser" id="jouter-ser" class="ajouter ajouter-gene"><i class="fa-solid fa-circle-plus"></i></button>
                <table class="tbl">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>id_service</th>
                            <th>nom de service</th>
                            <th>description</th>
                            <th colspan="2">Action</th>
                        </tr>  
                    </thead>
                    <tr>
                        <th>#</th>
                        <th>id_service</th>
                        <th>nom de service</th>
                        <th>description</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <?php
                           $result2="SELECT * FROM services ";
                           $result2=$conn->query($result2);
                           if(!$result2){
                                echo "La récupération des données a rencontré un problème.";
                           }else{
                                $nb_ser = mysqli_num_rows($result2);
                                if($nb_ser>0){
                                    $num=1;
                                    while($row = $result2->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td data-label='user id'>" . $num . "</td>";
                                    echo "<td>" . $row['id'] . "</td>"; 
                                    echo "<td>" . $row['nom_ser'] . "</td>"; 
                                    echo "<td>" . $row['description'] . "</td>"; 
                                    echo "<td data-label='edit'>
                                        <button class='btn-edit' id='btn-edit-ser' onclick='return editForm_ser(this)' data-line='" . $row['id'] . "'><i class='fa fa-pencil'></i></button>
                                        </td>";
                                    echo "<td data-label='delete'>
                                        <button class='btn-trash' type='submit'><a href='?idsu-ser=".$row['id']. "'><i class='fa fa-trash'></i></a></button>
                                        </td>";
                                    echo "</tr>";
                                    $num++;}}}?>
                </table>
            </div> 
        </div>

                               <!--*************************realisations**********************-->
        <div class="container  element des-active" id="realisations">
            <div class="container-tab" id="tab">
               <h2>les realisations</h2>
               <button type="submit" name="ajoute_rea"  class="ajouter ajouter-gene" id="jouter-u"><i class="fa-solid fa-circle-plus"></i></button>
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
                        echo "<td><img width='100px' height='100px' class='image_rea' src='image_rea.php?id=".$row['id']. "'/></td>"; 
                        echo "<td data-label='edit'>
                            <button class='btn-edit' id='btn-edit-rea' onclick='return editForm(this)' data-line='" . $row['id'] . "'><i class='fa fa-pencil'></i></button>
                            </td>";
                        echo "<td data-label='delete'>
                            <button class='btn-trash'><a href='?idsu_rea=".$row['id']. "'><i class='fa fa-trash'></i></a></button>
                            </td>";
                        echo "</tr>";}}}?>
                </table>
            </div> 
        </div>
                          <!--*************************messages**********************-->
        <div class="container  element des-active" id="messages">
            <div class="container-tab" id="tab">
                <h2></h2>
                <table class="tbl">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>nom</th>
                            <th>email</th>
                            <th>sujet</th>
                            <th>message</th>
                        </tr>  
                    </thead>
                    <tr>
                        <th>#</th>
                        <th>nom</th>
                        <th>email</th>
                        <th>sujet</th>
                        <th>message</th>
                  </tr>
                 <?php 
                    /*if(isset($_POST['Send_Message']) && !empty($_POST['Send_Message'])){
                        $name=$_POST['user-name'];
                        $email=$_POST['user-email'];
                        $subject=$_POST['user-subject'];
                        $message=$_POST['user-message'];
                            echo "<tr>";
                            echo "<td >" . $num . "</td>";
                            echo "<td >" . $name. "</td>"; 
                            echo "<td >" .  $email ."</td>"; 
                            echo "<td >" . $subject. "</td>"; 
                            echo "<td >" . $message. "</td>"; 
                            echo "</tr>";
                             $num++;
                    }*/
                    ?>
                </table>
            </div>
       </div>
                        <!--*********ajouter user********-->
        <div class="alert hide" id="alert">
            <span class="fas fa-exclamation-circle"></span>
            <span class="msg">Essayez encore une fois, il y a une erreur</span>

        </div>
        <div class="alertv hide" id="alertv">
            <span  class="fa-solid fa-circle-check"></span>
            <span class="msg">La ligne a été ajouter avec succès</span>
        </div>
        <div class="form-ajoute form-ajoute-us des-active" id="fo-aj">
            <form action="" method="post" class="f-ajout">
                <input type="text" name="code_us" class="i-form f " placeholder="Code utilisateur" required>
                <input type="text" name="nom_us" class="i-form f"  placeholder="Nom utilisateur" required>
                <input type="email" name="gmail_us" class="i-form f"  placeholder="Email utilisateur" required>
                <select name="role_us" class="i-form" required>
                    <option value="">Choisissez un rôle</option>
                    <option value="admin">Administrateur</option>
                    <option value="utilisateur">Utilisateur</option>
                </select>
                <input type="password" name="password_us" class="i-form f"  placeholder="Mot de passe" required>
                <i class="fa-solid fa-backward" class="home-i"></i><input type="button" id="home" value="retour" name="retour-aj-us" class="home">
                <input type="submit" value="Ajouter" name="ajoute_us" class="submi_aj">
            </form>
           
       </div>
       <?php
            if(isset($_POST['ajoute_us']) && !empty($_POST['ajoute_us'])){
                if(!empty($_POST['code_us'])){
                    $code=$_POST['code_us'];
                    $nom=$_POST['nom_us'];
                    $gmail=$_POST['gmail_us'];
                    $role=$_POST['role_us'];
                    $pass=$_POST['password_us'];
                    $ver = mysqli_query($conn, "SELECT * FROM utulisateurs WHERE code = '$code'");
                    if ($ver) {
                            $nb = mysqli_num_rows($ver);
                            if ($nb > 0) {
                                echo "<script>let alertElement = document.getElementById('alert');
                                    alertElement.classList.add('show', 'showAlert');
                                    alertElement.classList.remove('hide');
                                    setTimeout(function() {
                                    alertElement.classList.remove('show');
                                    alertElement.classList.add('hide');
                                   }, 3000);
                                   </script>";
                                   $nb=0;
                            }else{
                                $sql = "INSERT INTO `utulisateurs`(`code`, `name`, `gmail`, `role_us`, `pass`) VALUES ('$code','$nom','$gmail','$role','$pass')";
                                if (mysqli_query($conn, $sql)) {
                                  echo "<script>
                                    let header_w=document.getElementById('header-wr')
                                    header_w.style.filter='blur(0px)'
                                    
                                    let inputs = document.querySelectorAll('.f');
                                    inputs.forEach(elem => {
                                    elem.innerHTML = '';})
                                    let alertElement = document.getElementById('alertv');
                                    alertElement.classList.add('show', 'showAlert');
                                    alertElement.classList.remove('hide');
                                    setTimeout(function() {
                                    alertElement.classList.remove('show');
                                    alertElement.classList.add('hide');
                                    }, 3000);
                                    let element_f=document.getElementById('fo-aj');
                                    element_f.style.display='none'
                                    </script>"; 
                                }
                            }
                    } else {
                        echo "<script>alert('Le requête et echoue')</script>";
                    }
                    $code='';
                    $nom='';
                    $gmail='';
                    $role='';
                    $pass='';
                }
            }?>

                        <!--*********ajouter services********-->
        <div class="form-ajoute form-ajoute-ser des-active" id="fo-aj-ser">
            <form action="" method="post" class="f-ajout">
                <input type="text" name="nom_ser" class="ser-form " placeholder="nom de service" required>
                <textarea name="description" class="ser-form" placeholder="description" rows="9" height="400px" required></textarea>
                <i class="fa-solid fa-backward" class="home-i"></i><input type="button" id="home" value="retour" name="retour-aj-ser" class="home">
                <input type="submit" name="ajouter_ser" value="ajouter" class="submi_aj">
            </form>
       </div>
        <?php
            if(isset($_POST['ajouter_ser']) && !empty($_POST['ajouter_ser'])){
                $service=$_POST['nom_ser'];
                $description=$_POST['description'];
                $ver="SELECT * FROM services WHERE nom_ser = '$service'";
                $ver=$conn->query($ver);
                if($ver){
                    $nb = mysqli_num_rows($ver);
                    if($nb>0){
                        echo "<script>
                                    let alertElement = document.getElementById('alert');
                                    alertElement.classList.add('show', 'showAlert');
                                    alertElement.classList.remove('hide');
                                    setTimeout(function() {
                                    alertElement.classList.remove('show');
                                    alertElement.classList.add('hide');
                                   }, 3000);
                                  </script>";
                    }else{
                        $sql="INSERT INTO `services`( `nom_ser`,`description`) VALUES ('$service','$description')";
                        if(mysqli_query($conn,$sql)){
                            echo "<script>
                                            let alertElement = document.getElementById('alertv');
                                            alertElement.classList.add('show', 'showAlert');
                                            alertElement.classList.remove('hide');
                                            setTimeout(function() {
                                            alertElement.classList.remove('show');
                                            alertElement.classList.add('hide');
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
                                          </script>";
                        }
                    }
                }
                
            }
        ?>
                        <!--*********ajouter realisations********-->
        <div class="form-ajoute form-ajoute-rea des-active" id="fo-aj-rea">
            <form action="" method="post" class="f-ajout" enctype="multipart/form-data">
                <select name="nom_realis" id="nom_realis" class="rea-form" placeholder="categorie du realisateur"  required>
                     <option value="web design">web design</option>
                     <option value="logo design">logo design</option>
                     <option value="mobile app">mobile app</option>
                     <option value="devloppement">devloppement</option>
                </select>
                <input type="file" id="image" class="rea-form" name="image"  placeholder="Choisissez une image" required>
                <i class="fa-solid fa-backward" class="home-i"></i><input type="button" id="home" value="retour" name="retour-aj-rea" class="home">
                <input type="submit" name="ajouter_rea" value="Ajouter">
            </form>
        </div>
            <?php
               if(isset($_POST['ajouter_rea'])&& !empty($_POST['ajouter_rea'])){
                $nom = $_POST['nom_realis'];
                $image = file_get_contents($_FILES['image']['tmp_name']);
                $nom_image=$_FILES['image']['name'];
                $sql = "INSERT INTO `realisations`(`categorie`, `nom_image`,`image`) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $nom,$nom_image, $image);
                $stmt->execute();
                
                if($stmt->affected_rows > 0){
                    echo "<script>
                                    let alertElement = document.getElementById('alertv');
                                    alertElement.classList.add('show', 'showAlert');
                                    alertElement.classList.remove('hide');
                                    setTimeout(function() {
                                    alertElement.classList.remove('show');
                                    alertElement.classList.add('hide');
                                    }, 3000);
                                    </script>"; 
                } else{
                    echo "Erreur : Impossible d'exécuter la requête d'insertion. " . $stmt->error;
                }
                
            }?>
                        <!--**********************suppresion **************************-->
                            <!--*********user********-->
        <div class="alertv hide" id="alertv-s-u">
            <span  class="fa-solid fa-circle-check"></span>
            <span class="msg">La ligne a été supprimée avec succès</span>
        </div>
            <?php
                if(isset($_GET['id1']) && !empty($_GET['id1'])){
                    $code=$_GET['id1'];
                    $sql = "DELETE FROM utulisateurs WHERE code = $code";
                    if(mysqli_query($conn,$sql)){
                        echo "<script>
                        let alertElement = document.getElementById('alertv-s-u');
                        alertElement.classList.add('show', 'showAlert');
                        alertElement.classList.remove('hide');
                        setTimeout(function() {
                        alertElement.classList.remove('show');
                        alertElement.classList.add('hide');
                        }, 2000);
                        setTimeout(function() {
                        window.location.href = 'http://localhost/projetstage/admin.php';
                        }, 1000);
                        </script>"; 
                    }
                }?>
                              <!--*********service********--> 
            <?php
                if(isset($_GET['idsu-ser']) && !empty($_GET['idsu-ser'])){
                    $id=$_GET['idsu-ser'];
                    $sql = "DELETE FROM services WHERE id = $id";
                    if(mysqli_query($conn,$sql)){
                        echo "<script>
                        let alertElement = document.getElementById('alertv-s-u');
                        alertElement.classList.add('show', 'showAlert');
                        alertElement.classList.remove('hide');
                        setTimeout(function() {
                        alertElement.classList.remove('show');
                        alertElement.classList.add('hide');
                        }, 2000);
                        setTimeout(function() {
                        window.location.href = 'http://localhost/projetstage/admin.php';
                        }, 1000);
                        
                        </script>";
                    } else{
                        echo "Erreur : Impossible d'exécuter la requête de suppression. " . mysqli_error($conn);
                    }
            }?>
                               <!--*********realisation********--> 
            <?php
                 if(isset($_GET['idsu_rea']) && !empty($_GET['idsu_rea'])){
                    $id=$_GET['idsu_rea'];
                    $sql = "DELETE FROM realisations WHERE id = $id";
                    if(mysqli_query($conn,$sql)){
                        echo "<script>
                        let alertElement = document.getElementById('alertv-s-u');
                        alertElement.classList.add('show', 'showAlert');
                        alertElement.classList.remove('hide');
                        setTimeout(function() {
                        alertElement.classList.remove('show');
                        alertElement.classList.add('hide');
                        }, 2000);
                        setTimeout(function() {
                         window.location.href = 'http://localhost/projetstage/admin.php';
                        }, 1000);
                       
                        </script>";
                    } 
                } 
            ?>
                         <!--**********************update **************************-->
                              <!--*********user********-->
        <div class="alertv hide" id="alertv_up">
            <span  class="fa-solid fa-circle-check"></span>
            <span class="msg">La ligne a été update avec succès</span>
        </div>
        <div  class="form-ajoute " id="fo-aju">
           <?php
           if(isset($_GET['idmo-us']) && !empty($_GET['idmo-us'])){
            $id=$_GET['idmo-us'];
            $result="SELECT* FROM utulisateurs where  code=$id";
            $result=$conn->query($result);
            if (!$result) {
                echo "La récupération des données a rencontré un probleme.";
            } else {
                $nb_us = mysqli_num_rows($result);
                echo"<form action='' method='post' class='update-us' id='update-us'>";
                foreach($result as $row){
                    echo " <input type='text' class='upd-user' name='code' value='".$row['code']."'>";
                    echo " <input type='text' class='upd-user' name='nom' value='".$row['name']."'>";
                    echo " <input type='gmail' class='upd-user' name='gmail' value='".$row['gmail']."'>";
                    echo "<select name='role' class='upd-user'>
                    <option value='".$row['role_us']."'>".$row['role_us']."</option>
                    <option value='admin'>Administrateur</option>
                    <option value='utilisateur'>Utilisateur</option>
                   </select>";
                    echo " <input type='password' class='upd-user' name='pass' value='".$row['pass']."'>";
                    echo "<i class='fa-solid fa-backward' class='home-i'></i><input type='button'  value='retour' name='retour-up-us' class='home'>";
                    echo "<input type='submit' name='update-user' value='update'>";
                }
                echo"</form>";
                echo"<script>
                let header_wr=document.getElementById('header-wr')
                header_wr.style.filter='blur(5px)'
                let elements=document.querySelectorAll('.element');
                        elements.forEach(el=>{
                       el.style.display='none'
                    })
                </script>";
            }
            if(isset($_POST['update-user']) && !empty($_POST['update-user'])){
                $code=$_POST['code'];
                $nom=$_POST['nom'];
                $gmail=$_POST['gmail'];
                $role=$_POST['role'];
                $pass=$_POST['pass'];
                $ver="SELECT * FROM utulisateurs WHERE code = '$code'";
                $ver=$conn->query($ver);
                if($ver){
                    $nb = mysqli_num_rows($ver);
                    if($nb>0){
                        echo "<script>let alertElement = document.getElementById('alert');
                    alertElement.classList.add('show', 'showAlert');
                    alertElement.classList.remove('hide');
                    setTimeout(function() {
                    alertElement.classList.remove('show');
                    alertElement.classList.add('hide');
                   }, 3000);
                   </script>";
                   $nb=0;
                    }else{
                        $sql="UPDATE utulisateurs SET code='$code', name='$nom' ,gmail='$gmail' ,role_us='$role' ,pass='$pass' where code=?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("i",$id);
                        $stmt->execute();
                        if($stmt->affected_rows > 0){
                        echo "<script>
                             let header_w=document.getElementById('header-wr')
                            header_w.style.filter='blur(0px)'
                            let alertElement = document.getElementById('alertv_up');
                            alertElement.classList.add('show', 'showAlert');
                            alertElement.classList.remove('hide');
                            setTimeout(function() {
                            alertElement.classList.remove('show');
                            alertElement.classList.add('hide');
                            }, 1000);
                            let element_f=document.getElementById('fo-aju');
                            element_f.style.display='none'
                            setTimeout(function() {
                            window.location.href = 'http://localhost/projetstage/admin.php';
                            }, 1000);
                            
                            </script>";
                        }}
                    
                }
                }
        
        }?>
        </div>
                              <!--*********service********-->
        <div class="form-ajoute" id="for-up-ser">
        <?php
        if (isset($_GET['idmo-ser']) && !empty($_GET['idmo-ser'])) {
        $id=$_GET['idmo-ser'];
        $result="SELECT* FROM services where  id=$id";
        $result=$conn->query($result);
        if (!$result) {
            echo "La récupération des données a rencontré un probleme.";
        } else {
            $nb_ser = mysqli_num_rows($result);
            echo"<form action='' method='post' class='update-ser' >";
            foreach($result as $row){
                echo " <input type='text' class='upd-ser' name='nom' value='".$row['nom_ser']."'>";
                echo "<textarea name='description' class='ser-form upd-ser' placeholder='description' rows'9' height='400px' >".$row['description']."</textarea>";
                echo "<i class='fa-solid fa-backward' class='home-i'></i><input type='button'  value='retour' name='retour-up-ser' class='home'>";
                echo "<input type='submit' name='update-ser' value='update'>";
            }
            echo"</form>";
            echo"<script>
            let header_wr=document.getElementById('header-wr')
            header_wr.style.filter='blur(5px)'
            let elements=document.querySelectorAll('.element');
                        elements.forEach(el=>{
                       el.style.display='none'
                    })
            </script>";
        }
        }else{
            echo "<script>console.log('ID manquant');</script>";
        }?>
        </div>
    <?php
        if(isset($_POST['update-ser']) && !empty(isset($_POST['update-ser']))){
            $nv_nom=$_POST['nom'];
            $id=$_GET['idmo-ser'];
            $desc=$_POST['description'];
            $ver="SELECT * FROM services WHERE nom_ser = '$nv_nom'";
            $ver=$conn->query($ver);
            if($ver){
                $nb = mysqli_num_rows($ver);
                if($nb>0){
                    echo "<script>
                    let alertElement = document.getElementById('alert');
                    alertElement.classList.add('show', 'showAlert');
                    alertElement.classList.remove('hide');
                    setTimeout(function() {
                    alertElement.classList.remove('show');
                    alertElement.classList.add('hide');
                   }, 3000);
                  </script>";
                }else{
                    $sql="UPDATE services SET nom_ser='$nv_nom', description='$desc' WHERE id=?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("i",$id);
                    $stmt->execute();
                    if($stmt->affected_rows > 0){
                        echo "<script>
                            let alertElement = document.getElementById('alertv_up');
                            alertElement.classList.add('show', 'showAlert');
                            alertElement.classList.remove('hide');
                            setTimeout(function() {
                            alertElement.classList.remove('show');
                            alertElement.classList.add('hide');
                            }, 3000);
                            </script>";
                    } else{
                        echo "Erreur : Impossible d'exécuter la requête d'insertion. " . $stmt->error;
                    }
                }
            }
            
        }
        ?>
                            <!--*********realisations********-->
        <div class="form-ajoute " id="for-up-rea">
        <?php
            if(isset($_GET['idmo_rea']) && !empty($_GET['idmo_rea'])){
                $id=$_GET['idmo_rea'];
                $result="SELECT* FROM realisations where  id=$id";
                $result=$conn->query($result);
                if (!$result) {
                   echo "La récupération des données a rencontré un probleme.";
                } else {
                    $nb_us = mysqli_num_rows($result);
                    echo"<form action='' method='post' enctype='multipart/form-data' class='update_rea'>";
                    foreach($result as $row){
                        echo " <select name='nom_catego'  class='upd_rea rea-form selectCat'>
                                <option value='".$row['categorie']."'>".$row['categorie']."</option>
                                <option value='web design'>web design</option>
                                <option value='logo design'>logo design</option>
                                <option value='mobile app'>mobile app</option>
                                <option value='devloppement'>devloppement</option>
                            </select>";
                        echo " <input type='text' class='upd_rea' name='nom_image' value='".$row['nom_image']."'>";
                        echo "<label for='nv_image'></label>
                         <input type='file' value='nouveau image' name='nv_image' id='nv_image'>";
                        echo "<i class='fa-solid fa-backward' class='home-i'></i><input type='button'  value='retour' name='retour-up-rea' class='home'>";
                        echo "<input type='submit' name='update_rea' value='update'>";
                    }
                    echo"</form>";
                    echo"<script>
                    let header_wr=document.getElementById('header-wr')
                    header_wr.style.filter='blur(5px)'
                    let elements=document.querySelectorAll('.element');
                        elements.forEach(el=>{
                    el.style.display='none'
                    })
                    </script>";
                }
            }else{
                echo"<script>console.log('non rea')</script>";
            }
        ?>
          <?php
     if(isset($_POST['update_rea']) && !empty(isset($_POST['update_rea']))){
      $nv_nomCateg=$_POST['nom_catego'];
      $id=$_GET['idmo_rea'];
      $nom_imge=$_POST['nom_image'];
      $sql1="UPDATE realisations SET categorie=?, nom_image=? WHERE id=?";
      $stmt1 = $conn->prepare($sql1);
      $stmt1->bind_param("ssi",$nv_nomCateg,$nom_imge,$id);
      $stmt1->execute();
      if (!empty($_FILES['nv_image']['name'])){
        $image = file_get_contents($_FILES['nv_image']['tmp_name']);
        $nvnom_image = $_FILES['nv_image']['name'];
        $sql2 = "UPDATE realisations SET nom_image= ?, image= ? WHERE id= ?";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("ssi", $nvnom_image, $image, $id);
        $stmt2->execute();
      }
    if($stmt1->affected_rows > 0 || $stmt2->affected_rows > 0){
        echo "<script>
                        let alertElement = document.getElementById('alertv_up');
                        alertElement.classList.add('show', 'showAlert');
                        alertElement.classList.remove('hide');
                        setTimeout(function() {
                        alertElement.classList.remove('show');
                        alertElement.classList.add('hide');
                        }, 1000);
                        setTimeout(function() {
                        window.location.href = 'http://localhost/projetstage/test/admin.php';
                        }, 1000);
                        </script>";
        }
    
     
    
}
?>

       
        </div>
    </div>
                                     
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

 ///////////////button active barre
    let btns_barre=document.querySelectorAll(".li_a")
    btns_barre.forEach(btn=>{
       btn.addEventListener("click",function(){
                btn.classList.add("active")
                let elements=document.querySelectorAll(".li_a")
                elements.forEach(el=>{
                    if(el!==btn){
                        el.classList.remove("active")
                    }
                    
                })
    }) 
    })
 //////////////button retour
function retour(){
     if(this.name === "retour-aj-us"){
        let form=document.getElementById("fo-aj")
        form.classList.add("des-active")
     }else if(this.name === "retour-up-us"){
        e.preventDefault();
        let form=document.getElementById("update-us")
        form.classList.add("des-active")
     }
} 
let btn_ba=document.querySelectorAll(".home")
btn_ba.forEach(btn_back=>{
    btn_back.addEventListener("click",function(){
    if(this.name === "retour-aj-us"){
        let form=document.getElementById("fo-aj")
        form.classList.add("des-active")
        let header_w=document.getElementById('header-wr')
            header_w.style.filter='blur(0px)'
            let element=document.getElementById('utulisateurs');
            element.style.display='block'
    }else if(this.name === "retour-up-us"){
        let form=document.getElementById("update-us")
        form.classList.add("des-active")
        let header_w=document.getElementById('header-wr')
            header_w.style.filter='blur(0px)'
            window.location.href = 'http://localhost/projetstage/admin.php';
            
    }else if(this.name === "retour-aj-ser"){
        let form=document.getElementById("fo-aj-ser")
        form.classList.add("des-active")
        let header_w=document.getElementById('header-wr')
            header_w.style.filter='blur(0px)'
        let element=document.getElementById('services');
            element.style.display='block'
            
    }else if(this.name === "retour-up-ser"){
        let form=document.getElementById("for-up-ser")
        form.classList.add("des-active")
        let header_w=document.getElementById('header-wr')
            header_w.style.filter='blur(0px)'
        window.location.href = 'http://localhost/projetstage/admin.php';
            
    }else if(this.name === "retour-aj-rea"){
        let form=document.getElementById("fo-aj-rea")
        form.classList.add("des-active")
        let header_w=document.getElementById('header-wr')
            header_w.style.filter='blur(0px)'
        let element=document.getElementById('realisations');
            element.style.display='block'
            
    }else if(this.name === "retour-up-rea"){
        let form=document.getElementById("for-up-rea")
        form.classList.add("des-active")
        let header_w=document.getElementById('header-wr')
        header_w.style.filter='blur(0px)'
        window.location.href = 'http://localhost/projetstage/admin.php';
            
    }
})
})

 /////////////////button menu
let btuu = document.querySelectorAll(".clac");
btuu.forEach(button => {
    button.addEventListener("click", function(event) {
        event.preventDefault();
        let activeElement = document.querySelectorAll('.element');
        if(this.name === "services"){
            activeElement.forEach(ele=> {
            if(ele.name!==this.name){
               ele.classList.add("des-active");}})
               document.getElementById("services").classList.remove("des-active");
        }else if (this.name === "utulisateurs"){
          activeElement.forEach(ele=> {
          if(ele.name!==this.name){
            ele.classList.add("des-active");}})
           document.getElementById("utulisateurs").classList.remove("des-active");
        }else if(this.name === "realisations"){
            activeElement.forEach(ele=> {
            if(ele.name!==this.name){
            ele.classList.add("des-active");}})
           document.getElementById("realisations").classList.remove("des-active");
        }else if(this.name === "messages"){
            activeElement.forEach(ele=> {
            if(ele.name!==this.name){
            ele.classList.add("des-active");}})
           document.getElementById("messages").classList.remove("des-active");
        }else if(this.name === "home"){
            activeElement.forEach(ele=> {
            if(ele.name!==this.name){
            ele.classList.add("des-active");}})
           document.getElementById("home1").classList.remove("des-active");
           document.getElementById("home2").classList.remove("des-active");
           window.location.href = 'http://localhost/projetstage/admin.php';
        }
        
    });});
////////////////////ajouter///////////
let button_a=document.querySelectorAll(".ajouter-gene")
button_a.forEach(button_aj=> {
    button_aj.addEventListener("click",function(event){
        event.preventDefault();
        if(this.name==="ajoute_us"){
            let header_wr=document.getElementById("header-wr")
            header_wr.style.filter="blur(5px)"
            let div_fo=document.querySelector(".form-ajoute-us")
            div_fo.classList.remove("des-active");
            let elements=document.querySelectorAll(".element");
            elements.forEach(el=> {
               el.style.display="none"
            });
          
        }else if(this.name==="ajoute_ser"){
            let header_wr=document.getElementById("header-wr")
            header_wr.style.filter="blur(5px)"
            let div_fo=document.querySelector(".form-ajoute-ser")
            div_fo.classList.remove("des-active");
            let elements=document.querySelectorAll(".element");
            elements.forEach(el=> {
               el.style.display="none"
            })
            let inputs=document.querySelectorAll(".i-form")
            inputs.forEach(elem=> {
               elem.value='';
            })
        }else if(this.name==="ajoute_rea"){
            let header_wr=document.getElementById("header-wr")
            header_wr.style.filter="blur(5px)"
            let div_fo=document.querySelector(".form-ajoute-rea")
            div_fo.classList.remove("des-active");
            let elements=document.querySelectorAll(".element");
            elements.forEach(el=> {
               el.style.display="none"
            })
            let inputs=document.querySelectorAll(".i-form")
            inputs.forEach(elem=> {
               elem.value='';
            })
        }
    })
})

            
////////////////////update///////////
////update-user/////

////update-service/////


////update-realisation/////

function editForm(button) {
    let id = button.getAttribute('data-line');
    if (!id || !id.trim()) {
        console.error('L\'ID de ligne n\'est pas trouvé dans les attributs du bouton.');
        alert('Problème avec l\'ID du projet à modifier.');
        return false;
    }
    
    console.log('ID de ligne trouvé:', id);
    window.location.href = '?idmo_rea=' + id;
    return true;
}
function editForm_ser(button) {
    let id = button.getAttribute('data-line');
    if (!id || !id.trim()) {
        console.error('L\'ID de ligne n\'est pas trouvé dans les attributs du bouton.');
        alert('Problème avec l\'ID du projet à modifier.');
        return false;
    }
    
    console.log('ID de ligne trouvé:', id);
    window.location.href = '?idmo-ser=' + id;
    return true;
}
function editForm_us(button) {
    let id = button.getAttribute('data-line');
    if (!id || !id.trim()) {
        console.error('L\'ID de ligne n\'est pas trouvé dans les attributs du bouton.');
        alert('Problème avec l\'ID du projet à modifier.');
        return false;
    }
    
    console.log('ID de ligne trouvé:', id);
    window.location.href = '?idmo-us=' + id;
    return true;
}

</script>



</body>
</html>