<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABA Doctor</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/StyleJdid.css">
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init({
        publicKey: "L57-rJ_2PlNJ-l6jU",
      });
   })();
</script>
</head>
<body>
<!-- header -->
<header class="header bg-blue">
    <nav class="navbar bg-blue">
        <div class="container flex">
            <a href="Accueil.html" class="navbar-brand">
                <img src="images/2024-03-02.png" alt="site logo">
            </a>
            <button type="button" class="navbar-show-btn">
                <img src="images/ham-menu-icon.png">
            </button>

            <div class="navbar-collapse bg-white">
                <button type="button" class="navbar-hide-btn">
                    <img src="images/close-icon.png">
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="Accueil.php" class="nav-link">Accueil</a></li>
                    <li class="nav-item"><a href="Apropos_App.php" class="nav-link">A propos</a></li>
                    <li class="nav-item"><a href="Service_App.php" class="nav-link">Service</a></li>
                    <li class="nav-item"><a href="Médecins_App.php" class="nav-link">Médecins</a></li>
                    <li class="nav-item"><a href="News_App.php" class="nav-link">Nouvelles</a></li>
                    <li class="nav-item"><a href="Contact_App.php" class="nav-link">Contact</a></li>
                </ul>
                <div class="search-bar">
                    <form>
                        <div class="search-bar-box flex">
                            <span class="search-icon flex">
                                <img src="images/search-icon-dark.png">
                            </span>
                            <input type="search" class="search-control" placeholder="Search here">
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </nav>
</header>
<!-- end of header -->

<!-- contact section -->
<section id="contact" class="contact py">
    <div class="container grid">
        <div class="contact-left">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3194.2864685263053!2d7.7170627756564425!3d36.811654772243834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d157eeab93%3A0xd4fe680f7ef37362!2sD%C3%A9partement%20informatique!5e0!3m2!1sfr!2sdz!4v1711542762182!5m2!1sfr!2sdz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="contact-right text-white text-center bg-blue">
            <div class="contact-head">
                <h3 class="lead">Contact Us</h3>
                <p class="text text-md">ABA Doctor votre compagnon de confiance pour la gestion proactive de votre santé.</p>
            </div>
            <form id="contactForm" novalidate>
                <div class="form-element">
                    <input id="name" name="name" type="text" class="form-control" placeholder="Your name" required>
                </div>
                <div class="form-element">
                    <input id="email" name="email" type="email" class="form-control" placeholder="Your email" required>
                </div>
                <div class="form-element">
                    <textarea rows="5" id="message" name="message" placeholder="Your Message" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-white btn-submit">
                    <i class="fas fa-arrow-right"></i> Send Message
                </button>
            </form>
        </div>
    </div>
</section>
<!-- end of contact section -->

<!-- footer  -->
<footer id="footer" class="footer text-center">
    <div class="container">
        <div class="footer-inner text-white py grid">
            <div class="footer-item">
                <h3 class="footer-head">A propos</h3>
                <div class="icon">
                    <img src="images/2024-03-02.png">
                </div>
                <p class="text text-md">ABA Doctor votre compagnon de confiance pour la gestion proactive de votre santé. Notre application combine la technologie de pointe avec des informations médicales fiables pour vous offrir une expérience personnalisée et complète.</p>
                <address>
                    Universite badji mokhtar <br>
                    Sidi Amar, Annaba<br>
                    Algerie
                </address>
            </div>

            <div class="footer-item">
                <h3 class="footer-head">Autres</h3>
                <ul class="tags-list flex">
                    <li><a href="#" class="text-white">soins médicaux</a></li>
                    <li><a href="#" class="text-white">urgence</a></li>
                    <li><a href="#" class="text-white">chirurgie</a></li>
                    <li><a href="#" class="text-white">médicament</a></li>
                    <li><a href="#" class="text-white">infirmière</a></li>
                </ul>
            </div>

            <div class="footer-item">
                <h3 class="footer-head">LIENS RAPIDES</h3>
                <ul>
                    <li><a href="#" class="text-white">Nos services</a></li>
                    <li><a href="#" class="text-white">Notre plan</a></li>
                    <li><a href="#" class="text-white">Politique de confidentialité</a></li>
                    <li><a href="#" class="text-white">Calendrier des rendez-vous</a></li>
                </ul>
            </div>

            <div class="footer-item">
                <h3 class="footer-head">contactez_nous</h3>
                <p class="text text-md">ABA Doctor votre compagnon de confiance pour la gestion proactive de votre santé</p>
                <ul class="appointment-info">
                    <li>8:00 AM - 12:00 AM</li>
                    <li>1:00 PM - 05:00 PM</li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <span>ABADoctor412@gmail.com</span>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <span>+213 478 2834(00)</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-links">
            <ul class="flex">
                <li><a href="#" class="text-white flex"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" class="text-white flex"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" class="text-white flex"><i class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- end of footer  -->

<!-- JavaScript to validate the form and send email using EmailJS -->
<script>
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    if (!name || !email || !message) {
        alert('Veuillez remplir tous les champs.');
        return;
    } else if (!validateEmail(email)) {
        alert('Veuillez entrer une adresse email valide.');
        return;
    }

    emailjs.send("service_fh2qcmi", "template_2kd9ty4", {
        name: name,
        email: email,
        message: message
    })
    .then(function(response) {
       alert('Message envoyé avec succès!');
       document.getElementById('contactForm').reset(); // Reset form after successful submission
    }, function(error) {
       alert('Échec de l\'envoi du message. Veuillez réessayer.');
    });

    function validateEmail(email) {
        var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        return re.test(email);
    }
});
</script>
</body>
</html>
