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
    <link rel = "stylesheet" href = "css/StyleJdid.css">
</head>
<body>
    

    <!-- header -->
    <header class = "header bg-blue ;">
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
                            <a href = "http://localhost/aba_doctor/Accueil.php" class = "nav-link">Accueil</a>
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

    </header>


    <main>
       
        <!-- doctors section -->
        <section id = "doc-panel" class = "doc-panel py">
            <div class = "container">
                <div class = "section-head" style="margin-left: 30%;">
                    <h2>Notre panel de médecins</h2>
                </div>

                <div class = "doc-panel-inner grid ">
                    <div class = "doc-panel-item">
                        <div class = "img flex">
                            <img src = "images/doc-1.png" alt = "doctor image" >
                            <div class = "info text-center bg-blue text-white flex" >
                            <a href = "rend.php" >
                                <p class = "lead">Dr. Aouiche Rabah</p>
                                <p class = "text-lg" >ORL</p>
                            </a>
                            </div>
                        </div>
                    </div>

                    <div class = "doc-panel-item">
                        <div class = "img flex">
                            <img src = "images/doc-4.png" alt = "doctor image">
                            <div class = "info text-center bg-blue text-white flex">
                            <a href = "rend1.php" >   
                            <p class = "lead">DOUNIA OUELD LAIB</p>
                                <p class = "text-lg">Neurologue</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class = "doc-panel-item">
                        <div class = "img flex">
                            <img src = "images/doc-2.png" alt = "doctor image">
                            <div class = "info text-center bg-blue text-white flex">
                            <a href = "rend2.php" >  
                                <p class = "lead">Dr. SOUAD CHEDDADI EP KIMOUR</p>
                                <p class = "text-lg">Gynécologue</p>
                                </a>   
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>
        

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