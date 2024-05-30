<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface Médecin - Administration</title>
    <style>
        body {
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
            <li><a href="http://localhost/tutorail/patient_tab_med.php">Patients</a></li>
            <li><a href="Accueil.php">Déconnexion</a></li>
        </ul>
    </nav>
    <main>
        <header>
            <h1>Interface Médecin - Tableau de Bord</h1>
        </header>
        <br>
        <div class="stats">
            <div class="stat-card">
                <h3 id="nbr-patients">0</h3>
                <p> Patients</p>
            </div>
            <div class="stat-card">
                <h3 id="nbr-rendezvous">0</h3>
                <p> Rendez-vous</p>
            </div>
            <div class="stat-card">
                <h3 id="nbr-tasks">0</h3>
                <p>Tâches en Cours</p>
            </div>
            <div class="stat-card">
                <h3 id="nbr-messages">0</h3>
                <p>Nouveaux Messages</p>
            </div>
        </div>
        <section id="dashboard">
            
            <div class="card">
                <h2>Notifications</h2>
                <ul id="notification-list">
                    <!-- Les notifications seront chargées ici par JavaScript -->
                </ul>
            </div>
        </section>
    </main>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Chargement des statistiques
            document.getElementById('nbr-patients').textContent = '123';
            document.getElementById('nbr-rendezvous').textContent = '45';
            document.getElementById('nbr-tasks').textContent = '10';
            document.getElementById('nbr-messages').textContent = '5';

            // Chargement des rendez-vous du jour
            fetch('rendezvous.php')
                .then(response => response.json())
                .then(data => {
                    let appointmentList = document.getElementById('appointment-list');
                    data.forEach(appointment => {
                        let listItem = document.createElement('li');
                        listItem.textContent = `${appointment.time} - ${appointment.patient}`;
                        appointmentList.appendChild(listItem);
                    });
                });

            // Chargement des notifications (statique pour l'exemple)
            let notifications = [
                "Résultats de tests disponibles pour le patient X.",
                "Rappel: réunion avec le service cardiologie à 14h."
            ];
            let notificationList = document.getElementById('notification-list');
            notifications.forEach(notification => {
                let listItem = document.createElement('li');
                listItem.textContent = notification;
                notificationList.appendChild(listItem);
            });
        });
    </script>
</body>
</html>
