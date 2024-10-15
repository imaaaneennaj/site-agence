<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styl.css" rel="stylesheet">
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
</head>
<body>
    
<section class="contact-sec" id="contact-sec">
    <div class="container">
        <div class="row">
            <div class="row-son1contact">
                <h4>GET IN TOUCH</h4>
                <FORM class="row"  id="contactForm" onsubmit=" submitform();retutn false;">
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
                    <h4>OUR LOCATION</h4>
                    <P> There are many variations of passages of Lorem Ipsum available, but the majority have suffered .</P>
                    <ul>
                        <li><i class="fas fa-map-marker-alt" aria-hidden="true"></i> 123 Park Avenue, New York, United States </li>
                        <li><i class="fas fa-phone-volume"></i>
                        <span>+1 631 1234 5678</span>
                        <span>+1 631 1234 5678</span></li>
                        <li><i class="fas fa-paper-plane"></i>email@website.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </section>
  <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo"oui";
    
}else{
    echo "non";
}?>
<script>
    function submitform() {
    const form = document.getElementById('contactForm');
    const sendButton = form.querySelector('#Send_Message');
    const resultDiv = form.querySelector('#result');

    sendButton.disabled = true;
    resultDiv.innerHTML = '<p class="loading">Please wait...</p>';

    fetch('', {
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
        // Traitement du succès
        const successMessage = document.createElement('p');
        successMessage.className = 'success';
        successMessage.textContent = `Merci ${form.querySelector('#n').value}, votre message a été envoyé !`;
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
        
        // Réactiver le bouton et nettoyer les messages précédents
        sendButton.disabled = false;
    });
    return false
}

</script>
</body>
</html>