<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres</title>
   <<style>
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

.settings {
    background-color: #ecf0f1;
    padding: 20px;
    border-radius: 8px;
}

.settings form {
    display: flex;
    flex-direction: column;
}

.settings label {
    margin-top: 10px;
}

.settings input[type="text"], .settings input[type="email"] {
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.settings input[type="checkbox"] {
    margin-top: 10px;
}

.settings button {
    margin-top: 20px;
    padding: 10px;
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.settings button:hover {
    background-color: #2980b9;
}

   </style>
</head>
<body>
    <div class="sidebar">
        <h2>Panel Médical</h2>
        <div class="profile-pic">
            <img src="admin.jpg" alt="Admin">
        </div>
        <ul class="main-menu">
            <li><a href="#">Tableau de bord</a></li>
            <li class="submenu">
                <a href="#">Utilisateurs</a>
                <ul class="sub-menu">
                    <li class="sub-submenu">
                        <a href="#">Médecins</a>
                        <ul class="sub-sub-menu">
                            <li><a href="#">Ajouter</a></li>
                            <li><a href="#">Supprimer</a></li>
                            <li><a href="#">Modifier</a></li>
                        </ul>
                    </li>
                    <li class="sub-submenu">
                        <a href="#">Patients</a>
                        <ul class="sub-sub-menu">
                            <li><a href="#">Ajouter</a></li>
                            <li><a href="#">Supprimer</a></li>
                            <li><a href="#">Modifier</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Rendez-vous</a></li>
            <li><a href="#">Dossiers médicaux</a></li>
            <li><a href="#">Rapports</a></li>
            <li><a href="#">Paramètres</a></li>
            <li><a href="#">Déconnexion</a></li>
        </ul>
    </div>
    <div class="content">
        <header>
            <h1>Paramètres</h1>
        </header>
        <main>
            <section class="settings">
                <form action="settings.php" method="post">
                    <h2>Profil</h2>
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username" value="admin">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="admin@example.com">
                    <h2>Notifications</h2>
                    <label for="email-notifications">Notifications par email</label>
                    <input type="checkbox" id="email-notifications" name="email-notifications" checked>
                    <label for="sms-notifications">Notifications par SMS</label>
                    <input type="checkbox" id="sms-notifications" name="sms-notifications">
                    <button type="submit">Enregistrer les modifications</button>
                </form>
            </section>
        </main>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    // JavaScript pour interactivité
    const form = document.querySelector('form');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        alert('Les modifications ont été enregistrées.');
        form.submit();
    });
});

    </script>
</body>
</html>
