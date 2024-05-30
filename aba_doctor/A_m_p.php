<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>T'es Qui?</title>
  <link rel="stylesheet" href="css/StyleJdid.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
    }
    
    .container {
      display: flex;
      justify-content: space-around;
    }
    
    .photo {
      cursor: pointer;
      margin: 0 10px;
      text-align: center;
    }
    
    .photo img {
      margin-top: 210px;
      width: 180px;
      height: 180px;
      border-radius: 50%;
      margin-bottom: 10px;
    }
    .cancel-button {
      width: 200px;
      height: 50px;
      border-radius: 5%;
      margin-top: 50px;
      margin-left: 1px;
    }
  </style>
</head>
<body>

<nav class="navbar bg-blue">
  <div class="container flex">
    <a href="accueil.php" class="navbar-brand">
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
          <a href="Accueil.php" class="nav-link">Accueil</a>
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
          <a href="News_App.php" class="nav-link">News</a>
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

<div class="container">
  <div class="photo">
    <a href="log_in_App.php">
      <img src="images/administrator_solid_icon_236304.png" alt="Admin">
      <div>Admin</div>
    </a>
  </div>
  <div class="photo">
    <a href="http://localhost/tutorail/Log_in_m.php">
      <img src="images/Medcin_photo.avif" alt="Medcin">
      <div>Médecins</div>
    </a>
  </div>
  <div class="photo">
    <a href="http://localhost/tutorail/Log_in_p.php">
      <img src="images/malade_photo.png" alt="Patient">
      <div>Patients</div>
    </a>
  </div>
</div>
  
</body>
</html>
