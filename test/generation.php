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
$result1="SELECT nom_ser,description FROM services ";
$result2="SELECT nom_ser FROM services ";
$result1=$conn->query($result1);
$result2=$conn->query($result2);
    if (!$result1 || !$result2) {
        echo "probleme";
    } else {
        $nb_ser = mysqli_num_rows($result1);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generation PUB</title>
    <link href="images/logo1.jpg" rel="icon">
    <link href="generation.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body >
    <header id="Acceuil">
        <div class="container opa">
            <div class="container1">
                <a class="login" href="login/login.php"><i class="fa-solid fa-right-to-bracket"></i></a>
                <div class="row">
                    <div class=" wat">
                         <div class="watt"><span><i class="lni lni-whatsapp"></i> +212 633-690369</span></div>
                    </div>
                    <div class="f-ig">
                         <div>
                           <ul class="sociaux">
                              <li ><a href="#" class="facebook "><i class="fab fa-facebook-f "></i></a></li>
                              <li ><a href="#" class="twitter "><i class="fab fa-twitter "></i></a></li>
                              <li ><a href="#" class="linkedin "><i class="fab fa-linkedin-in"></i></a></li>
                              <li ><a href="#" class="instagram "><i class="lni lni-instagram-fill"></i></a></li>
                            </ul>
                        </div>
                    </div>
                   
                </div>
                
            </div>
            <div class="contanier2">
                <div class="row">
                <div class="menu">
                     <nav class="navbar">
                        <a class="log" href="generation.html">
                            <img src="images/logo1.jpeg" >
                        </a>
                         <div class="page">
                            <ul >
                                <li ><a href="#Acceuil " class="scroll fadeInDown">ACCEUIL</a></li>
                                <li ><a href="#services" class="scroll fadeInDown">SERVICES</a></li>
                                <li ><a href="#realisation" class="scroll fadeInDown">RÉALISATIONS</a></li>
                                <li ><a href="#contact-sec" class="scroll fadeInDown">CONTACT</a></li>
                            </ul>
                         </div>
                     </nav>
                </div>
               </div>
          </div>
        </div>
        <!--barre-->
        <a class="barre" id="barre" >
            <i class="lni lni-menu"></i>
        </a>
        <!--*************menu de barre********************-->
        <div class= " menu_barre menu_barre_opacity ">
            <div class="menuu">
                <span><i style="color: white; font-size: 20px;" id="close" class="lni lni-close"></i></span>
                <a >
                    <img src="images/logo1.jpg" alt="erreur">
                </a>
                <nav>
                    <ul>
                        <li><a href="#Acceuil" class="s2">ACCEUIL</a></li>
                        <li style="transition-delay: .2s;" class="s2"><a href="#services">SERVICES</a></li>
                        <li style="transition-delay: .3s;" class="s2"><a href="#realisation">RÉALISATIONS</a></li>
                        <li style="transition-delay: .4s;" class="s2"><a href="#contact-sec">CONTACT</a></li>
                    </ul>
                </nav>
                <div>
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <svg class="p2" fill="#fff" viewBox="0 0 100 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M 100 100 V 10 L 0 100"></path>
                <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" strock-width="0"></path>
           </svg>
        </div>
    </header>
<!--************__________________________________________acceuil________________________********-->
    <div class="principale opa">
        <div class="ac">
            <div class="row">
            <div class="title">
                <div class="contenu" data-depth="0.1">
                    <h1>Bienvenu à </h1>
                    <p></p>
                </div>
            </div>
            <div class="description">
                <div data-depth="0.1">
                    <div></div>
                    <div >
                        <h2>génération 
                            <span>pub</span>
                        </h2>
                        <p id="wid_p">
                        Notre agence crée des sites web dynamiques et des plaquettes professionnelles. Nous mettons en valeur votre image avec des designs modernes et des contenus adaptés. Que ce soit pour présenter votre entreprise ou promouvoir vos produits/services, nous sommes là pour vous accompagner. Expertise reconnue dans le développement 
                        d'applications et la conception visuelle</p>
                        <button id="btn_hide"><i class="fa-solid fa-chevron-up"></i></button>
                        <button id="btn_p" class="btn_p">learn more</button> 
                    </div>
                </div>
            </div>
        </div>
        </div>
        <svg viewBox="0 0 100 100" width="100%" preserveAspectRatio="none" fill="#ffffff" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M 100 100 V 10 L 0 100"></path>
                <path d="M 30 73 L 100 18 V 10 Z" stroke-width="0"  fill="#ffffff"></path>
        </svg>
    </div>
<!-- ******************________________________ services____________________________*******************-->
 <section id="services" class="services-sec">
    <svg width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#e8d716" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100"></path>
        <path d="M 30 73 L 100 18 V 10 Z" fill="#e8d716" stroke-width="0"></path>
    </svg>
    <div class="container swiper">
        <div class="row ">
            <div >
                <div class="details-ser" >
                    <h1>services de </h1>
                    <h1>
                        <span>génération </span> pub
                    </h1>
                     <p id="wid_p2">Une agence de publication moderne offre des services variés pour soutenir les entreprises dans 
                        leur présence numérique. Elle crée des sites web personnalisés et des identités 
                        visuelles cohérentes. Ses experts en design et développement web réalisent des solutions digitales
                         adaptées aux besoins spécifiques de chaque client. L'agence propose également des services d'hébergement et d'optimisation SEO pour assurer une présence 
                        constante sur le web.</p>
                     <button id="btn_p2" class="btn_p">learn more</button> 
                     <button id="btn2_hide"><i class="fa-solid fa-chevron-up"></i></button>
                </div>
                
            </div>
            <div class="row-ser slider-wrapper"  style="border:black 2px red">
                <div style=" height:100%" class="swiper-wrapper" style="border:black 2px red">    
                <?php
                foreach ($result1 as $rowg) {
                  echo "<div class='dis swiper-slide'  style='border:black 2px red'> 
                  <div >
                    <h4>" . $rowg['nom_ser'] . "</h4>
                    <img style=''src='images/imser.png'>
                   <p>" . $rowg['description'] . "</p>
                  </div>
                  </div>";}?>
                </div>
                <button id="circle-right" class="circle nxt"><i class="lni lni-chevron-right"></i></button>
                <button id="circle-left" class="circle pre"><i class="lni lni-chevron-left"></i></button>
                   
            </div>
        
        </div>
    </div>
    <svg width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#ffffff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100"></path>
        <path d="M 30 73 L 100 18 V 10 Z" fill="#ffffff" stroke-width="0"></path>
    </svg>
    <img src="images/pot.png"   style="visibility: visible;">
 </section>
 <!-- ******************______________________ realisation start_________________________******************-->
  <section id="realisation" class="realisation-sec">
     <div class="container">
        <div>
            <div class="row">
                <div class="row-son1" >
                    <h1>  RÉALISATIONS </h1>
                    <h1> DE génération  PUB</h1>
                </div>
                <div class="row-son2">
                    <div>
                        <div class="divy "><button class="btn_all" id="all" >ALL</button></div>
                        <div class="divy "><button class="btn_all" id="web">WEB DESIGN</button> </div>
                        <div  class="divy "><button class="btn_all" id="logo">LOGO DESIGN</button> </div>
                        <div  class="divy "> <button class="btn_all" id="mobil">MOBILE APP</button> </div>
                        <div  class="divy "> <button class="btn_all" id="devlopp">DEVLOPPEMENT</button> </div>
                    </div>
                    <div  class="cpb">
                        <div>
                            <div>
                                <div class="div_all">
                                <?php
                                    $result = "SELECT * FROM realisations";
                                    $result = $conn->query($result);
                                    if (!$result) {
                                        echo "La récupération des données a rencontré un problème.";
                                    }else {
                                    $nb_im = mysqli_num_rows($result);
                                    foreach ($result as $row) {
                                        if($row['categorie']==="web design"){
                                            echo "<div class='cbp-item web_design' style='width:520px;margin:7px' >
                                            <div>
                                                <a href='image_rea.php?id=".$row['id']. "' class='a-firstdiv'>
                                                       <div>
                                                      <img class='image_rea' src='image_rea.php?id=".$row['id']. "'/>
                                                       </div>
                                                    <div>
                                                      <div>
                                                      <span></span>
                                                      <span style='transform: rotate(90deg);'></span>
                                                      </div>
                                                       <div>
                                                        <h4>Creative</h4>
                                                        <p>35 WP ANNEVRSAY</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>";  
                                        }
                                        elseif($row['categorie']==="logo design"){
                                            echo "<div class='cbp-item logo_design' style='width:510px; margin:6px;' >
                                            <div>
                                                <a href='image_rea.php?id=".$row['id']. "' class='a-firstdiv'>
                                                       <div>
                                                      <img class='image_rea' src='image_rea.php?id=".$row['id']. "'/>
                                                       </div>
                                                    <div>
                                                      <div>
                                                      <span></span>
                                                      <span style='transform: rotate(90deg);'></span>
                                                      </div>
                                                       <div>
                                                        <h4>Creative</h4>
                                                        <p>35 WP ANNEVRSAY</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>";  
                                        }
                                        elseif($row['categorie']==="mobile app"){
                                            echo "<div class='cbp-item mobil_app' style='width:520px; margin:6px;' >
                                            <div>
                                                <a href='image_rea.php?id=".$row['id']. "' class='a-firstdiv'>
                                                       <div>
                                                      <img class='image_rea' src='image_rea.php?id=".$row['id']. "'/>
                                                       </div>
                                                    <div>
                                                      <div>
                                                      <span></span>
                                                      <span style='transform: rotate(90deg);'></span>
                                                      </div>
                                                       <div>
                                                        <h4>Creative</h4>
                                                        <p>35 WP ANNEVRSAY</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>";  
                                        }
                                         elseif($row['categorie']==="devloppement"){
                                            echo "<div class='cbp-item devloppement' style='width:530px;margin:6px;' >
                                            <div>
                                                <a href='image_rea.php?id=".$row['id']. "' class='a-firstdiv'>
                                                       <div>
                                                      <img class='image_rea' src='image_rea.php?id=".$row['id']. "'/>
                                                       </div>
                                                    <div>
                                                      <div>
                                                      <span></span>
                                                      <span style='transform: rotate(90deg);'></span>
                                                      </div>
                                                       <div>
                                                        <h4>Creative</h4>
                                                        <p>35 WP ANNEVRSAY</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>";  
                                        }
                                        else{
                                            echo "<div class='cbp-item ' style='width:530px; margin:6px;' >
                                            <div>
                                                <a href='' class='a-firstdiv'>
                                                       <div>
                                                      <img class='image_rea' src='image_rea.php?id=".$row['id']. "'/>
                                                       </div>
                                                    <div>
                                                      <div>
                                                      <span></span>
                                                      <span style='transform: rotate(90deg);'></span>
                                                      </div>
                                                       <div>
                                                        <h4>Creative</h4>
                                                        <p>35 WP ANNEVRSAY</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>";  
                                        }
                                    }
                                         echo "<script>console.log('" . htmlspecialchars($nb_im) . "');</script>";
                                    }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
  </section>
 <!-- ******************_____________________________contact____________________________******************--> 
 <section class="contact-sec" id="contact-sec">
    <div class="container">
        <div class="row">
            <div class="row-son1contact">
                <h4>Contactez-nous</h4>
                <FORM class="row"  id="contactForm" onsubmit=" submitform(); return false;">
                    <div id="result"></div>
                    <div>
                        <input class="form-control"  id="n" type="text" name="user_name" placeholder="Your name">
                        <input class="form-control" id="e" type="email" name="user_email" placeholder="Your email">
                        <input class="form-control" id="s" type="text" name="user_subject" placeholder=" subject">
                    </div>
                    <div>
                        <textarea name="user_message" id="m" rows="6" placeholder="Your message" class="form-control"></textarea>
                    </div>
                    <div>
                        <input type="submit" value="Send Message" name="Send_Message" id="Send_Message">
                    </div>
                </FORM>
            </div>
            <div class="row-son2contact">
                <div class="contact-details">
                    <h4>Notre localisation</h4>
                    <P> Trouvez-nous facilement !</P>
                    <ul>
                        <li><i class="fas fa-map-marker-alt" aria-hidden="true"></i> G67R+5JV.AV,AL Aqaba,Essaouira</li>
                        <li><i class="fas fa-phone-volume"></i>
                        <span>0633690369</span></li>
                        <li><i class="fas fa-paper-plane"></i>contact.genareationpub@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </section>
   <!-- ****************** footer******************-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="socail">
                    <div>
                        <ul>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li> <a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            <li> <a href=""><i class="fab fa-linkedin-in"></i></a></li>
                            <li> <a href=""><i class="fab fa-instagram"></i></a></li>
                            <li> <a href=""><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="text"><p>© 2024 Generation PUB. Made With Love By IMANE ENNAJI</p></div>
            </div>
        </div>
    </footer>
 <!-- ****************** end******************-->
    <script>
//****************_____________________fonction formulaire__________________________***************//     
function submitform() {
    let form = document.getElementById('contactForm');
    let sendbutton = form.querySelector('#Send_Message');
    let resultDiv = form.querySelector('#result');

    sendbutton.disabled = true;
    resultDiv.innerHTML = '<p class="loading">Please wait...</p>';

    fetch('contact2.php', {
        method: 'POST',
        body: new FormData(form),
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.text();
    })
    .then(data => {
        let successMessage = document.createElement('p');
        successMessage.className = 'success';
        let imessage=document.createElement('i');
        imessage.className = 'fa-solid fa-check';
        successMessage.innerHTML = ` <i class="fa-solid fa-check"></i> Merci ${form.querySelector('#n').value}, votre message a été envoyé !`;
        resultDiv.innerHTML = '';
        resultDiv.appendChild(successMessage);
        form.reset();
    })
    .catch(error => {
       
        const errorMessage = document.createElement('p');
        errorMessage.className = 'error';
        errorMessage.textContent = 'Une erreur s\'est produite lors de l\'envoi du message.';
        resultDiv.innerHTML = '';
        resultDiv.appendChild(errorMessage);
        
        sendButton.disabled = false;
    });
    
}
//******************__________________________acceuil button________________________________*******************//
        let btn_p=document.getElementById('btn_p')
        btn_p.addEventListener('click',function(){
          let wid_p=document.getElementById('wid_p')
          wid_p.style.height="145px"
          btn_p.style.display="none"
          let btn_hide=document.getElementById('btn_hide')
          btn_hide.style.display="block"
        })
        btn_hide=document.getElementById('btn_hide')
        btn_hide.addEventListener('click',function(){
          let wid_p=document.getElementById('wid_p')
          wid_p.style.height="70px"
          btn_hide.style.display="none"
          let btn_p=document.getElementById('btn_p')
          btn_p.style.display="block"
        })
//******************__________________________service button________________________***************************//
        let btn_p2=document.getElementById('btn_p2')
        btn_p2.addEventListener('click',function(){
          let wid_p2=document.getElementById('wid_p2')
          btn_p2.style.display="none"
          wid_p2.style.overflow="visible";
          wid_p2.style.height="190px"
          let btn2_hide=document.getElementById('btn2_hide')
          btn2_hide.style.display="block"
          let btn_circle=document.querySelectorAll('.circle')
          btn_circle.forEach(ele=>{
            ele.style.display="none"
          })
        })
        let btn2_hide=document.getElementById('btn2_hide')
        btn2_hide.addEventListener('click',function(){
          let wid_p2=document.getElementById('wid_p2')
          wid_p2.style.height="150px"
          btn2_hide.style.display="none"
          wid_p2.style.overflow="hidden";
          let btn2_p=document.getElementById('btn_p2')
          btn2_p.style.display="block"
          let btn_circle=document.querySelectorAll('.circle')
          btn_circle.forEach(ele=>{
            ele.style.display="block"
          })
        })

        //////////button next et pre !!!!!!!!
        let wrapperdiv=document.querySelectorAll('.swiper-wrapper');
        let nxtBtn = document.querySelectorAll('.nxt');
        let preBtn = document.querySelectorAll('.pre');
        wrapperdiv.forEach((item, i) => {
       let containerD = item.getBoundingClientRect();
       let containerW = containerD.width;

        nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerW;
        })

        preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerW;
        })
        })
///******************************button menu******************//
        function openb(){
            let menu=document.querySelector('.menu_barre')
            menu.classList.remove('menu_barre_opacity');
            menu.classList.remove('close_barre');
            menu.classList.add('menu_barre_active')
        }
        let open=document.getElementById('barre')
        open.addEventListener('click',openb)
        function closeb(){
            let menu=document.querySelector('.menu_barre')
            menu.classList.remove('menu_barre_active')
            menu.classList.add('menu_barre_opacity')
            menu.classList.add('close_barre')
        }
        let close=document.getElementById('close')
        close.addEventListener('click',function(){
            closeb()
        })
////////////////////////
       function move(e) {
        let div=document.getElementsByClassName("principale");
       const elements = document.querySelectorAll('[data-depth]');
       elements.forEach(element => {
       const depth = parseFloat(element.getAttribute('data-depth'));
       const moveX = (e.clientX * -depth / 4);
       const moveY = (e.clientY * -depth / 4);
        element.style.transform = `translate3d(${moveX}px, ${moveY}px, 0)`;
         });}
       let div = document.querySelector(".principale");
      div.addEventListener('mousemove', move);
////////////////////////////
function scrollp(event){
    event.preventDefault();
    const targetElement = document.querySelector(this.getAttribute('href'));
    const scrollPosition = targetElement.offsetTop - 180;
    window.scrollTo({
    top: scrollPosition,
    behavior: 'smooth' });
   }
   const scrollElements = document.getElementsByClassName('scroll');
Array.from(scrollElements).forEach(element => {
    element.addEventListener('click', scrollp);
});

///////////////////////////
function togglemenu(){
    let menu1=document.querySelector('.menu_barre')
    menu1.classList.remove('menu_barre_active')
    scrollp()
}
const s2 = document.getElementsByClassName('s2');
Array.from(s2).forEach(element => {
    element.addEventListener('click',togglemenu );
});
//////////////////////script realisations
function clik(ediv){
    ediv.addEventListener("click", function(){
    ediv.classList.add('row-son2-divactive');
    let divs = document.querySelectorAll(".divy");
    divs.forEach(function(otherDiv) {
      if (otherDiv !== ediv) { 
        otherDiv.classList.remove('row-son2-divactive');
      }
    });
  });

  
}
let divs = document.querySelectorAll(".divy");
divs.forEach(function(div) {
  clik(div);})
////////////////
function handleFilterChange(){
   let thiselement=this;
   let barre_filter=document.querySelector('.row-son2-divactive').dataset.filter;
   let morephoto=document.getElementById('view-all');
   if(barre_filter==="*"){
    morephoto.classList.add('div3-active');
    morephoto.classList.remove('div3-none');
   }else{
    morephoto.classList.remove('div3-active');
    morephoto.classList.add('div3-none');
   }
   const wrappers = thiselement.querySelectorAll(' .cbp-item:not(.cbp-item-off)');
   wrappers.forEach(item => item.classList.remove('even'));
   wrappers.forEach((item, index) => {
  const leftStyle = window.getComputedStyle(item).getPropertyValue('left');
  if (leftStyle !== '0px') {
    item.classList.add('even');
  }
});

}
let btn_click=document.querySelectorAll('.divy')
btn_click.forEach(filter => {
        filter.addEventListener('click', handleFilterChange);
    });
//////////////////////realisation selection
let btn_all=document.getElementById('all');
btn_all.addEventListener("click",function(){
    let elements_other=document.querySelectorAll('.cbp-item')
    elements_other.forEach(ele=>{
        ele.classList.remove('div3-none')
        
    })
    btn_all.classList.add('btn_active')
    let btns=document.querySelectorAll('.btn_all')
    btns.forEach(e=>{
        if(e !== btn_all){
            e.classList.remove('btn_active')
        }
    })
})
///////////////
let btn_web=document.getElementById('web');
btn_web.addEventListener("click",function(){
    let elements_other=document.querySelectorAll('.cbp-item')
    elements_other.forEach(ele=>{
        let elements_web=document.querySelectorAll('.web_design')
        elements_web.forEach(elem=>{
            elem.classList.remove('div3-none')
            if(ele !== elem){
                ele.classList.add('div3-none')
            }
        })
        
    })
    btn_web.classList.add('btn_active')
    let btns=document.querySelectorAll('.btn_all')
    btns.forEach(e=>{
        if(e !== btn_web){
            e.classList.remove('btn_active')
        }
    })
})
//////////////
let btn_logo=document.getElementById('logo');
btn_logo.addEventListener("click",function(){
    let elements_other=document.querySelectorAll('.cbp-item')
    elements_other.forEach(ele=>{
        let elements_logo=document.querySelectorAll('.logo_design')
        elements_logo.forEach(elem=>{
            elem.classList.remove('div3-none')
            if(ele !== elem){
                ele.classList.add('div3-none')
            }
        })
        
    })
    btn_logo.classList.add('btn_active')
    let btns=document.querySelectorAll('.btn_all')
    btns.forEach(e=>{
        if(e !== btn_logo){
            e.classList.remove('btn_active')
        }
    })
})
//////////////////
let btn_mobil=document.getElementById('mobil');
btn_mobil.addEventListener("click",function(){
    let elements_other=document.querySelectorAll('.cbp-item')
    elements_other.forEach(ele=>{
        let elements_mobil=document.querySelectorAll('.mobil_app')
        elements_mobil.forEach(elem=>{
            elem.classList.remove('div3-none')
            if(ele !== elem){
                ele.classList.add('div3-none')
            }
        })
        
    })
    btn_mobil.classList.add('btn_active')
    let btns=document.querySelectorAll('.btn_all')
    btns.forEach(e=>{
        if(e !== btn_mobil){
            e.classList.remove('btn_active')
        }
    })
})
////////////////////
let btn_devlopp=document.getElementById('devlopp');
btn_devlopp.addEventListener("click",function(){
    let elements_other=document.querySelectorAll('.cbp-item')
    elements_other.forEach(ele=>{
        let elements_dev=document.querySelectorAll('.devloppement')
        elements_dev.forEach(elem=>{
            elem.classList.remove('div3-none')
            if(ele !== elem){
                ele.classList.add('div3-none')
            }
        })
        
    })
    btn_devlopp.classList.add('btn_active')
    let btns=document.querySelectorAll('.btn_all')
    btns.forEach(e=>{
        if(e !== btn_devlopp){
            e.classList.remove('btn_active')
        }
    })
})

</script>
    

</body>
</html>