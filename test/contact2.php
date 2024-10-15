<?php
                           if(isset($_POST['user_email']) && isset ($_POST['user_subject']) && isset($_POST['user_message'])){
                               $to="imaneennaji142@gmail.com";
                               $name=$_POST['user_name'];
                               $subject=$_POST['user_subject'];
                               $message = "Nom: $name\nEmail: " . $_POST['user_email'] . "\nSujet: " . $_POST['user_subject'] . "\nMessage: \n" . $_POST['user_message'];
                               $email=$_POST['user_email'];
                               $header ="From: $email";
                               
                               if(mail($to,$subject,$message,$header,$email)){
                                   echo "<script>
                                   document.getElementById('result').innerHTML = `<p class='p_result'>Merci pour votre message !</p>`;
                                   </script>";
                               } else {
                                   $lastError = error_get_last();
                                   if ($lastError !== null) {
                                       echo "Erreur : " . $lastError['message'];
                                   } else {
                                       echo "Une erreur inconnue s'est produite lors de l'envoi du message.";
                                   }
                               }
                           } else {
                               echo "Veuillez remplir tous les champs obligatoires.";
                           }
                       ?>