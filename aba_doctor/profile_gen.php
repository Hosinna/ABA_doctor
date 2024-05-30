<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil du Médecin</title>
  <style>   body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            height: 100vh;
        }
        header {
            background-color: #3c8dbc;
            color: white;
            padding: 20px;
            text-align: center;
            
        }
.profile-container {
    max-width: 800px;
    margin: 30px auto;
    height: 550px;
    background-color: #fff;
    padding: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.profile-header {
    text-align: center;
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
}

.profile-photo {
    width: 140px;
    height: 140px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 10px;
}

.profile-header h1 {
    margin: 10px 0;
    font-size: 24px;
    color: #333;
}

.specialty {
    font-size: 14px;
    color: #777;
}

.profile-body {
    padding: 20px 0;
}

.profile-body h2 {
    font-size: 20px;
    color: #333;
    margin-bottom: 10px;
}

.profile-body p {
    font-size: 16px;
    color: #555;
    line-height: 1.5;
    margin-bottom: 10px;
}
nav {
            background-color: #2f6aa9;
            width: 200px;
            min-height: 100vh;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            margin: 20px 0;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
            border-radius: 4px;
        }
        nav ul li a:hover {
            background-color: #1e4a7b;
        }
        main {
            flex: 1;
            padding: 20px;
        }
        .card {
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .card h2 {
            margin-top: 0;
        }
        .card ul {
            list-style: none;
            padding: 0;
        }
        .card ul li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .card ul li:last-child {
            border-bottom: none;
        }
        .profile {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
        .profile a {
            color: white;
            text-decoration: none;
        }
        .profile a:hover {
            text-decoration: underline;
        }
        .stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .stat-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1;
            margin: 0 10px;
            text-align: center;
        }
        .stat-card h3 {
            margin: 0;
            font-size: 2em;
            color: #3c8dbc;
        }
        .stat-card p {
            margin: 10px 0 0;
            color: #666;
        }
</style>
</head>
<body>
<nav>
        <div class="profile">
            <img src="images/doctor-profile.jpg" alt="Photo du Médecin">
        </div>
        <ul>
            <li><a href="http://localhost/aba_doctor/interface_medecins.php">Accueil</a></li>
            <li><a href="http://localhost/aba_doctor/profile_gen.php">Voir Profil</a></li>
            <li><a href="http://localhost/tutorail/afficher_dossiers.php">Dossiers médicaux</a></li>
            <li><a href="http://localhost/tutorail/index.php">Patients</a></li>
            <li><a href="Accueil.php">Déconnexion</a></li>
        </ul>
    </nav>
    <div class="profile-container">
        <div class="profile-header">
            <img src="images/doc-3.png" alt="Photo du Médecin" class="profile-photo">
            <h1>Dr. Alim lina</h1>
            <p class="specialty">Generaliste</p>
        </div>
        <div class="profile-body">
            <h2>À propos</h2>
            <p>Dr. Alim lina est un généraliste expérimenté avec plus de 20 ans de pratique. Il est spécialisé dans les maladies cardiaques et les soins cardiovasculaires. Passionné par la médecine, il est reconnu pour son approche humaine et son expertise clinique.</p>
            <h2>Contact</h2>
            <p>Email: Linaalim13@gmail.com.com</p>
            <p>Téléphone: +213 23 45 67 89</p>
        </div>
    </div>
</body>
</html>
