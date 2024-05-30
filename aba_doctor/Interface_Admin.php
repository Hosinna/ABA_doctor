<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface Médicale</title>
   <style>
   body {
    display: flex;
    font-family: Arial, sans-serif;
    margin: 0;
    height: 100vh;
}

.sidebar {
    width: 250px;
    background-color: #2c3e50;
    color: white;
    padding: 20px;
    box-sizing: border-box;
}

.sidebar h2 {
    text-align: center;
}

.profile-pic {
    text-align: center;
    margin-bottom: 20px;
}

.profile-pic img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 2px solid #ecf0f1;
}

.main-menu {
    list-style: none;
    padding: 0;
}

.main-menu li {
    margin: 20px 0;
}

.main-menu li a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px;
    transition: background 0.3s;
}

.main-menu li a:hover {
    background-color: #34495e;
}

.submenu .sub-menu {
    display: none;
    list-style: none;
    padding-left: 20px;
}

.submenu:hover .sub-menu {
    display: block;
}

.sub-submenu .sub-sub-menu {
    display: none;
    list-style: none;
    padding-left: 20px;
}

.sub-submenu:hover .sub-sub-menu {
    display: block;
}

.content {
    flex: 1;
    padding: 20px;
    box-sizing: border-box;
}

header {
    background-color: #ecf0f1;
    padding: 20px;
    margin-bottom: 20px;
}

.cards {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}

.card {
    background-color: #ecf0f1;
    padding: 20px;
    flex: 1;
    text-align: center;
}

.data-table table {
    width: 100%;
    border-collapse: collapse;
}

.data-table th, .data-table td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.data-table th {
    background-color: #ecf0f1;
}

   </style>
</head>
<body>
    <div class="sidebar">
        
        <div class="profile-pic">
            <img src="images/A.jpg" alt="Admin">
        </div>
        <h2>Panel Médical</h2>
        <ul class="main-menu">
            <li><a href="#">Tableau de bord</a></li>
            <li class="submenu">
                <a href="#">Utilisateurs</a>
                <ul class="sub-menu">
                    <li class="sub-submenu">
                        <a href="#" id="medecins-link">Médecins</a>
                    </li>
                    <li class="sub-submenu">
                        <a href="#" id="patients-link">Patients</a>
                    </li>
                </ul>
            </li>
            <li><a href="#">Rendez-vous</a></li>
            <li><a href="http://localhost/tutorail/dossier_Admin.php">Dossiers médicaux</a></li>
            <li><a href="#" id="logout-link">Déconnexion</a></li>
        </ul>
    </div>
    <div class="content">
        <header>
            <h1>Tableau de bord</h1>
        </header>
        <main>
            <section class="cards">
                <div class="card">
                    <h3>Utilisateurs</h3>
                    <p>150</p>
                </div>
                <div class="card">
                    <h3>Medecins</h3>
                    <p>30</p>
                </div>
                <div class="card">
                    <h3>Patients</h3>
                    <p>10</p>
                </div>
            </section>
            <section class="cards">
                <div class="card">
                    <h3>Dossiers midcaux</h3>
                    <p>150</p>
                </div>
                <div class="card">
                    <h3>Rendez-vous</h3>
                    <p>30</p>
                </div>
                <div class="card">
                    <h3>Rapports</h3>
                    <p>10</p>
                </div>
            </section>
            
        </main>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const submenus = document.querySelectorAll('.submenu > a');

        submenus.forEach(submenu => {
            submenu.addEventListener('click', function(e) {
                e.preventDefault();
                this.nextElementSibling.classList.toggle('open');
            });
        });

        const subSubmenus = document.querySelectorAll('.sub-submenu > a');

        subSubmenus.forEach(subSubmenu => {
            subSubmenu.addEventListener('click', function(e) {
                e.preventDefault();
                this.nextElementSibling.classList.toggle('open');
            });
        });

        const logoutLink = document.getElementById('logout-link');
        logoutLink.addEventListener('click', function(e) {
            e.preventDefault();
            if (confirm('Voulez-vous vraiment vous déconnecter?')) {
                window.location.href = 'Accueil.php';
            }
        });

        const patientsLink = document.getElementById('patients-link');
        patientsLink.addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = 'http://localhost/tutorail/index.php';
        });
        
        const medecinsLink = document.getElementById('medecins-link');
        medecinsLink.addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = 'http://localhost/tutorail/index_m.php';
        });
    });
    </script>
</body>
</html>
