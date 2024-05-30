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
    <link rel = "stylesheet" href = "css/normalize.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/main.css">
    <link rel = "stylesheet" href = "css/StyleJdid.css">
</head>
<body>
    

    <!-- header -->
    <header class = "header bg-blue">
        <nav class = "navbar bg-blue">
            <div class = "container flex">
                <a href = "Accueil.php" class = "navbar-brand">
                    <img src = "images/2024-03-02.png" alt = "site logo">
                    
                </a>
                 
                <button type = "button" class = "navbar-show-btn">
                    <img src = "images/ham-menu-icon.png">
                </button>

                <div class = "navbar-collapse bg-white">
                    <button type = "button" class = "navbar-hide-btn">
                        <img src = "images/close-icon.png">
                        
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "index.php" class = "nav-link">Accueil</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "Apropos_App.php" class = "nav-link">A propos</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "Service_App.php" class = "nav-link">Services</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "Médecins_App.php" class = "nav-link">Médecins</a>
                        </li>
                        
                        <li class = "nav-item">
                            <a href = "News_App.php" class = "nav-link">Nouvelles</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "Contact_App.php" class = "nav-link">Contact</a>
                        </li>
                    </ul>
                    <div class = "search-bar">
                        <form>
                            <div class = "search-bar-box flex">
                                <span class = "search-icon flex">
                                    <img src = "images/search-icon-dark.png">
                                </span>
                                <input type = "search" class = "search-control" placeholder="Search here">
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </nav>

        <div class = "header-inner text-white text-center">
            <div class = "container grid">
                <div class = "header-inner-left">
                    <h1><br> <span>ABA Doctor </span></h1>
                    <p class = "lead"><b>Soyez votre propre médecin</b></p>
                    <p class = "text text-md"> - Évaluation des symptômes<br>- Informations sur les problèmes de santé potentiels<br>- Orientation vers des soins médicaux appropriés<br>- Localisation des médecins et établissements de soins de santé <br> - Prise de rendez-vous</p>
                    <div class = "btn-group">
                        <a href = "condition.php" class = "btn btn-white">Commencer l'entretien</a>
                        <a href = "A_m_p.php" class = "btn btn-light-blue">Se connecter</a>
                    </div>
                </div>
                <div class = "header-inner-right">
                    <img src = "images/j-001.png " style="width: 65%;height: 83%;">
                </div>
            </div>
        </div>
    </header>
    <!-- end of header -->

<!-- footer  -->
<footer id = "footer" class = "footer text-center">
    <div class = "container">
        <div class = "footer-inner text-white py grid">
            <div class = "footer-item">
                <h3 class = "footer-head">A propos</h3>
                <div class = "icon">
                    <img src = "images/2024-03-02.png">
                </div>
                <p class = "text text-md">ABA Doctor votre compagnon de confiance pour la gestion proactive de votre santé. Notre application combine la technologie de pointe avec des informations médicales fiables pour vous offrir une expérience personnalisée et complète .</p>
                <address>
                    Universite badji mokhtar <br>
                    Sidi Amar , Annaba<br>
                    Algerie
                </address>
            </div>

            <div class = "footer-item">
                <h3 class = "footer-head">Autres</h3>
                <ul class = "tags-list flex">
                    <li><a href = "#" class = "text-white">soins médicaux</a></li>
                    <li><a href = "#" class = "text-white">urgence</a></li>
                    <li><a href = "#" class = "text-white">chirurgie</a></li>
                    <li><a href = "#" class = "text-white">médicament</a></li>
                    <li><a href = "#" class = "text-white">infirmière</a></li>
                </ul>
            </div>

            <div class = "footer-item">
                <h3 class = "footer-head">LIENS RAPIDES</h3>
                <ul>
                    <li><a href = "#" class = "text-white">Nos services</a></li>
                    <li><a href = "#" class = "text-white">Notre plan</a></li>
                    <li><a href = "#" class = "text-white">Politique de confidentialité</a></li>
                    <li><a href = "#" class = "text-white">Calendrier des rendez-vous</a></li>
                </ul>
            </div>

            <div class = "footer-item">
                <h3 class = "footer-head">contactez_nous</h3>
                <p class = "text text-md">ABA Doctor votre compagnon de confiance pour la gestion proactive de votre santé</p>
                <ul class = "appointment-info">
                    <li>8:00 AM - 12:00 AM</li>
                    <li>1:00 PM - 05:00 PM</li>
                    <li>
                        <i class = "fas fa-envelope"></i>
                        <span>ABADoctor412@gmail.com</span>
                    </li>
                    <li>
                        <i class = "fas fa-phone"></i>
                        <span>+213 478 2834(00)</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class = "footer-links">
            <ul class = "flex">
                <li><a href = "#" class = "text-white flex"> <i class = "fab fa-facebook-f"></i></a></li>
                <li><a href = "#" class = "text-white flex"> <i class = "fab fa-twitter"></i></a></li>
                <li><a href = "#" class = "text-white flex"> <i class = "fab fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- end of footer  -->
    <!-- custom js -->
    <script src = "js/script.js"></script>
</body>
</html>