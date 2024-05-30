<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service_App</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel = "stylesheet" href = "css/normalize.css">
    <!-- custom css -->
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
                            <a href = "Accueil.php" class = "nav-link">Accueil</a>
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
    <!-- end of header -->

    <main>
        

       

        <!-- services section -->
        <section id = "services" class = "services py">
            <div class = "container">
                <div class = "section-head text-center">
                    <h2 class = "lead">Le meilleur médecin donne le moins de médicaments</h2>
                    <p class = "text text-lg">Un moyen idéal de montrer vos services hospitaliers</p>
                    <div class = "line-art flex">
                        <div></div>
                        <img src = "images/4-dots.png">
                        <div></div>
                    </div>
                </div>
                <div class = "services-inner text-center grid">
                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/service-icon-1.png">
                        </div>
                        <h3>Maladies</h3>
                        <p class = "text text-sm">La maladie est une altération des fonctions ou de la santé d'un organisme vivant.
On parle aussi bien de la maladie, se référant à l'ensemble des altérations de santé, que d'une maladie, qui désigne alors une entité particulière caractérisée par des causes, des symptômes, une évolution et des possibilités thérapeutiques propres. </p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                        <a href = "#" class = "navbar-brand">
                            <img src = "images/service-icon-2.png">
                            </a>
                        </div>
                        <h3>Traitement médical</h3>
                        <p class = "text text-sm"> traitement thérapeutique, thérapie ou plus généralement thérapeutique, est un ensemble de mesures appliquées par un professionnel de la santé à une personne vis-à-vis d'une maladie, afin de l'aider à en guérir, de soulager ses symptômes, ou encore d'en prévenir l'apparition.</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                        <a href = "#" class = "navbar-brand">
                            <img src = "images/service-icon-3.png">
                            </a>
                        </div>
                        <h3>Aide d'urgence</h3>
                        <p class = "text text-sm">L’aide d’urgence est adressée aux particuliers qui ne peuvent pas souscrire à un prêt classique, pour faire face à des difficultés financières passagères.</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                        <a href = "#" class = "navbar-brand">
                            <img src = "images/service-icon-4.png">
                            </a>
                        </div>
                        <h3>Premier secours</h3>
                        <p class = "text text-sm">Les premiers secours sont l'ensemble des techniques d'aide apportée aux personnes victimes d'un accident, d'une catastrophe, d'un problème de santé ou d'un problème social compromettant à court terme leur état de santé.</p>
                    </article>
                    
                    
                </div>
            </div>
        </section>
        <!-- end of services section -->


        <!-- package services section -->
        <section id = "package-service" class = "package-service py text-center">
            <div class = "container">
                <div class = "package-service-head text-white">
                    <h2>Service de colis</h2>
                    <p class = "text text-lg">Le meilleur forfait de services pour vous</p>
                </div>
                <div class = "package-service-inner grid">
                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-phone fa-2x"></i>
                        </div>
                        <h3>Cas régulier</h3>
                        <p class = "text text-sm">1. Critères cliniques ou de laboratoires pour évaluer si une personne est atteinte de la maladie concernée
Les manifestations cliniques doivent être importantes ou être des signes distinctifs de la maladie. Ces manifestations doivent être objectives et faciles à mesurer. Si l’agent pathogène responsable de la maladie est connu, les critères de laboratoire  appropriés (p. ex., type d’agent pathogène, sous-type) devraient être inclus.
<br> 2. Restrictions selon la personne, l’emplacement et la période</p>
                        <a href = "cas_regulier.php" class = "btn btn-blue">En savoir plus</a>
                    </div>

                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-calendar-alt fa-2x"></i>
                        </div>
                        <h3>Cas sérieux</h3>
                        <p class = "text text-sm">1. Critères cliniques ou de laboratoires pour évaluer si une personne est atteinte de la maladie concernée
Les manifestations cliniques doivent être importantes ou être des signes distinctifs de la maladie. Ces manifestations doivent être objectives et faciles à mesurer. Si l’agent pathogène responsable de la maladie est connu, les critères de laboratoire  appropriés (p. ex., type d’agent pathogène, sous-type) devraient être inclus.
<br> 2. Restrictions selon la personne, l’emplacement et la période</p>
                        <a href = "#" class = "btn btn-blue">En savoir plus</a>
                    </div>
                    
                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-comments fa-2x"></i>
                        </div>
                        <h3>Cas d'urgence</h3>
                        <p class = "text text-sm">1. Dans le domaine médical, situation d'un patient à soigner sans délais.<br>2. Par ellipse et au pluriel, service d'accueil des urgences.
                        <br>3. En procédure civile ou administrative la notion d’urgence sévit également.</p>
                        <br><br><br><br><br><br> <a href = "#" class = "btn btn-blue">En savoir plus</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of package services section -->
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
    </main>
<!-- end of footer  -->


    <!-- custom js -->
    <script src = "js/script.js"></script>
</body>
</html>