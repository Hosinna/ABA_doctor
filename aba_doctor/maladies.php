<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des catégories de maladies</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/StyleJdid.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0050d5;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-bottom: 10px;
            color: white;
        }
        .container {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-bottom: 20px;
        }
        .card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            width: calc(20% - 20px);
            box-sizing: border-box;
            text-align: center;
        }
        .card img {
            width: 100%;
            height: 200px;
            border-bottom: 1px solid #ddd;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .card p {
            margin: 10px 0;
            padding: 0 10px;
        }
        .card a {
            text-decoration: none;
            color: black;
        }
        .card a:hover p {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- header -->
    <header class="header bg-blue">
        <nav class="navbar bg-blue">
            <div class="container flex">
                <a href="Accueil.php" class="navbar-brand">
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
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a href="Apropos_App.php" class="nav-link">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a href="Service_App.php" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="Médecins_App.php" class="nav-link">Médecins</a>
                        </li>
                        <li class="nav-item">
                            <a href="News_App.php" class="nav-link">Nouvelles</a>
                        </li>
                        <li class="nav-item">
                            <a href="Contact_App.php" class="nav-link">Contact</a>
                        </li>
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
    </header><br><br><br><br><br>
    <!-- main content -->
    <div class="container">
        <h1>Liste des catégories de maladies</h1><br>
        <div class="row">
            <div class="card">
                <a href="Maladies de l'oreille, du nez et de la gorge.php">
                    <img src="images/Maladies de l'oreille, du nez et de la gorge.jpg" alt="Maladies de l'oreille, du nez et de la gorge">
                    <p>Maladies de l'oreille, du nez et de la gorge</p>
                </a>
            </div>
            <div class="card">
                <a href="Maladies cardiovasculaires.php">
                    <img src="images/Maladies cardiovasculaires.jpg" alt="Maladies cardiovasculaires">
                    <p>Maladies cardiovasculaires</p>
                </a>
            </div>
            <div class="card">
                <a href="Maladies infectieuses.php">
                    <img src="images/Maladies infectieuses.jpg" alt="Maladies infectieuses">
                    <p>Maladies infectieuses</p>
                </a>
            </div>
            <div class="card">
                <a href="Maladies du système musculo-squelettique.php">
                    <img src="images/Maladies du système musculo-squelettique.jpg" alt="Maladies du système musculo-squelettique">
                    <p>Maladies du système musculo-squelettique</p>
                </a>
            </div>
            <div class="card">
                <a href="Maladies du système nerveux.php">
                    <img src="images/Maladies du système nerveux.jpg" alt="Maladies du système nerveux">
                    <p>Maladies du système nerveux</p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <a href="Maladies du système digestif.php">
                    <img src="images/Maladies du système digestif.jpg" alt="Maladies du système digestif">
                    <p>Maladies du système digestif</p>
                </a>
            </div>
            <div class="card">
                <a href="Maladies du sang.php">
                    <img src="images/Maladies du sang.webp" alt="Maladies du sang">
                    <p>Maladies du sang</p>
                </a>
            </div>
            <div class="card">
                <a href="Maladies endocriniennes.php">
                    <img src="images/Maladies endocriniennes.webp" alt="Maladies endocriniennes">
                    <p>Maladies endocriniennes</p>
                </a>
            </div>
            <div class="card">
                <a href="Diabète.php">
                    <img src="images/Diabète.jpg" alt="Diabète">
                    <p>Diabète</p>
                </a>
            </div>
            <div class="card">
                <a href="Maladies de os.php">
                    <img src="images/Maladies des os.avif" alt="Maladies des os">
                    <p>Maladies des os</p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <a href="Maladies des yeux.php">
                    <img src="images/Maladies des yeux.jpg" alt="Maladies des yeux">
                    <p>Maladies des yeux</p>
                </a>
            </div>
            <div class="card">
                <a href="Maladies des reins et des voies urinaires.php">
                    <img src="images/Maladies des reins et des voies urinaires.webp" alt="Maladies des reins et des voies urinaires">
                    <p>Maladies des reins et des voies urinaires</p>
                </a>
            </div>
            <div class="card">
                <a href="Maladies de la peau.php">
                    <img src="images/Maladies de la peau.webp" alt="Maladies de la peau">
                    <p>Maladies de la peau</p>
                </a>
            </div>
            <div class="card">
                <a href="Maladies cancéreuses.php">
                    <img src="images/Maladies cancéreuses.jpg" alt="Maladies cancéreuses">
                    <p>Maladies cancéreuses</p>
                </a>
            </div>
            <div class="card">
                <a href="Maladies respiratoires.php">
                    <img src="images/Maladies respiratoires.jpeg" alt="Maladies respiratoires">
                    <p>Maladies respiratoires</p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <a href="Maladies psychiques et mentales.php">
                    <img src="images/Maladies psychiques et mentales.jpg" alt="Maladies psychiques et mentales">
                    <p>Maladies psychiques et mentales</p>
                </a>
            </div>
            <div class="card">
                <a href="Maladies non transmissibles.php">
                    <img src="images/Maladies non transmissibles.png" alt="Maladies non transmissibles">
                    <p>Maladies non transmissibles</p>
                </a>
            </div>
            <div class="card">
                <a href="Maladies de la bouche et des dents.php">
                    <img src="images/Maladies de la bouche et des dents.jpg" alt="Maladies de la bouche et des dents">
                    <p>Maladies de la bouche et des dents</p>
                </a>
            </div>
            <div class="card">
                <a href="Maladies rares.php">
                    <img src="images/Maladies rares.jpg" alt="Maladies rares">
                    <p>Maladies rares</p>
                </a>
            </div>
        </div>
    </div>
    <!-- custom js -->
    <script src="js/script.js"></script>
</body>
</html>
