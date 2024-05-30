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
        


        <!-- posts section -->
        <section id = "posts" class = "posts py">
            <div class = "container">
                <div class = "section-head">
                    <h2>Dernières Actualités</h2>
                </div>
                <div class = "posts-inner grid">
                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/Article_photo_1.jpg">
                        </div>
                        <div class = "content">
                            <h4>Saihi préside une Journée d'étude sur "la gestion des produits pharmaceutiques au sein des EPS".</h4>
                            <p class = "text text-sm"><b>ALGER </b>– Le ministre de la Santé, Abdelhak Saihi, a présidé mardi à Alger, l'ouverture d'une journée d'étude sous le thème "la gestion des produits pharmaceutiques au sein des établissements publics de santé : Modernisation de la gestion de la pharmacie hospitalière et contrôle du circuit des produits pharmaceutiques dans les établissements publics de santé".</p>
                            <p class = "text text-sm">Publié dans SANTE - SCIENCE - TECHNOLOGIE |<a href = "https://www.aps.dz/sante-science-technologie/168871-saihi-preside-l-ouverture-d-une-journee-d-etude-sur-la-gestion-des-produits-pharmaceutiques-au-sein-des-eps" ><b> Lire Plus...</b></a></p>
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i>  27 mars 2024 09:23</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> comments</small>
                            </div>
                        </div>
                    </article>

                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/Article_photo_2.jpg">
                        </div>
                        <div class = "content">
                            <h4>La lutte contre le cancer parmi les priorités de l'Etat.</h4>
                            <p class = "text text-sm">ALGER- Le directeur général de la prévention au ministère de la Santé, Dr. Djamel Fourar a affirmé, jeudi à Alger, que la lutte contre le cancer était l'une des priorités de l'Etat consacrées par le Président de la République, M. Abdelmadjid Tebboune à travers l'installation d'une Commission nationale pour la prise en charge des cancéreux tout en leur garantissant un meilleur traitement.</p>
                            <p class = "text text-sm">Publié dans SANTE - SCIENCE - TECHNOLOGIE | <a href = "https://www.aps.dz/sante-science-technologie/166831-la-lutte-contre-le-cancer-parmi-les-priorites-de-l-etat" ><b> Lire Plus...</b></a></p>
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> 16 Février 2024 08:30</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i>  comments</small>
                            </div>
                        </div>
                    </article>

                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/Article_photo_3.jpg">
                        </div>
                        <div class = "content">
                            <h4>CAN 2023 (Côte d'Ivoire) : le ministère de la Santé appelle les supporteurs de l'équipe nationale à se rapprocher des centres de vaccination .</h4>
                            <p class = "text text-sm">ALGER - Le ministère de la Santé a appelé, vendredi dans un communiqué, les supporteurs de l'équipe nationale désirant assister à la Coupe d'Afrique des Nations (CAN), prévue en Côte d'Ivoire du 13 janvier au 11 février, à se rapprocher des centres de vaccination pour se protéger en se faisant vacciner.</p>
                            <p class = "text text-sm">Publié dans SPORT| <a href ="https://www.aps.dz/sport/165176-can-2023-cote-d-ivoire-le-ministere-de-la-sante-appelle-les-supporteurs-de-l-equipe-nationale-a-se-rapprocher-des-centres-de-vaccination" ><b> Lire Plus...</b></a> </p>
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> 12 janvier 2024 12:00</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i>  comments</small>
                            </div>
                        </div>
                    </article>
                </div>
            </div>


            
                
            </div>
        </section>
        <!-- end of posts section -->

        
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