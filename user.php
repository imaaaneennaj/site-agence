<?php
// connexion
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "agencePub";
$conn = mysqli_connect($server_name, $user_name, $password, $db_name);

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

// recherche
if(isset($_GET['valeur-search']) && !empty($_GET['valeur-search'])){
    $valeur = htmlspecialchars($_GET['valeur-search']);
    $query = "SELECT * FROM utulisateurs WHERE code LIKE '%{$valeur}%'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            echo "<script>alert('Utilisateurs trouvés')</script>";
        } else {
            echo "<script>alert('Aucun utilisateur trouvé')</script>";
        }
    } else {
        echo "<script>alert('Erreur lors de la recherche')</script>";
    }
} else {
    echo "<script>alert('Veuillez entrer une valeur de recherche')</script>";
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
            <li class="active">
                <a href=""><i class="fas fa-tachometer-alt"></i> <span>tableau de bord</span></a>
            </li>
            <li>
                   <button name="utulisateurs" class="clac"><i class="fa-solid fa-users"></i><span>Utilisateurs</span></button>
            </li>
            <li>
                   <button name="services"  class="clac"><i class="fa-solid fa-desktop"></i><span>Services</span></button>
            </li>
            <li>
                   <button  name="realisations" class="clac"><i class="fa-solid fa-briefcase"></i><span>Réalisations</span></button>
            </li>
            <li class="logout">
                <a href="generation.php"><i class="fa-solid fa-power-off"></i><span>Logout</span></a>
            </li>
          </ul>
    </div>
    <div class="main" id="main">
        <div class="header-wr" id="header-wr">
            <div class="header-ti">
                <span>Primary</span>
                <h2>Dashboard</h2>
            </div>
            <div class="info-user">
                <div class="search"> 
                    <form method="Get">
                    <button type="submit" class="btn-search" name="btn-sear"><i class="fa-solid fa-search"></i></button>
                    <input type="text" placeholder="search" name="valeur-search">
                    </form>
                </div>
                <img src="images/gray.jpeg">
            </div>
        </div>
        <div class="card-container element">
            <h3 class="main-tit">Today's data</h3>
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
        <div class="tabluar-wr element ">
            <h3 class="main-ti">finance data</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>date</th>
                            <th>transcrition type</th>
                            <th>description</th>
                            <th>amount</th>
                            <th>category</th>
                            <th></th>
                            <th>action</th>
                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                                <td>54-76-6554</td>
                                <td>exrrf</td>
                                <td>nbhh ggy</td>
                                <td>675</td>
                                <td>yttu</td>
                                <td>kjiu</td>
                                <td><button>edit</button></td>
                            </tr>
                            <tr>
                                <td>54-76-6554</td>
                                <td>exrrf</td>
                                <td>nbhh ggy</td>
                                <td>675</td>
                                <td>yttu</td>
                                <td>kjiu</td>
                                <td><button>edit</button></td>
                            </tr>
                            <tr>
                                <td>54-76-6554</td>
                                <td>exrrf</td>
                                <td>nbhh ggy</td>
                                <td>675</td>
                                <td>yttu</td>
                                <td>kjiu</td>
                                <td><button>edit</button></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7"></td>
                            </tr>
                        </tfoot>
                    
                </table>
            </div>
        </div>
                         <!--*************************users**********************-->
        <div class="container  element des-active" id="utulisateurs">
            <div class="container-tab" id="tab">
                <h2>les utulisateurs</h2>
                <table class="tbl">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Gmail</th>
                            <th>Role</th>
                            <th>Password</th>
                        </tr>  
                    </thead>
                    <tr>
                        <th>#</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Gmail</th>
                        <th>Role</th>
                        <th>Password</th>
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
                                echo "</tr>";
                                 $num++;}}}
                    
                             
                ?>
                </table>
            </div>
       </div>
                        <!--*************************services**********************-->
        <div class="container  element des-active" id="services">
            <div class="container-tab" id="tab">
                <h2>services</h2>
                <table class="tbl">
                    <thead>
                        <tr>
                            <th>id_service</th>
                            <th>nom de service</th>
                            <th>description</th>
                        </tr>  
                    </thead>
                    <tr>
                        <th>id_service</th>
                        <th>nom de service</th>
                        <th>description</th>
                    </tr>
                    <?php
                           $result2="SELECT * FROM services ";
                           $result2=$conn->query($result2);
                           if(!$result2){
                                echo "La récupération des données a rencontré un problème.";
                           }else{
                                $nb_ser = mysqli_num_rows($result2);
                                if($nb_ser>0){
                                    while($row = $result2->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>"; 
                                    echo "<td>" . $row['nom_ser'] . "</td>"; 
                                    echo "<td>" . $row['description'] . "</td>"; 
                                    echo "</tr>";}}}?>
                </table>
            </div> 
        </div>

                               <!--*************************realisations**********************-->
        <div class="container  element des-active" id="realisations">
            <div class="container-tab" id="tab">
               <h2>les realisations</h2>
               <table class="tbl">
                <thead>
                        <tr>
                            <th>id</th>
                            <th>categorie</th>
                            <th>nom_image</th>
                            <th>image</th>
                        </tr>  
                </thead>
                <tr>
                            <th>id</th>
                            <th>categorie</th>
                            <th>nom_image</th>
                            <th>image</th>
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
                        echo "</tr>";}}}?>
                </table>
            </div>
        </div> 
    </div>
                                     
   <script>
    window.onload = function(event) {
    event.preventDefault()
};

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
        }});});



</script>



</body>
</html>