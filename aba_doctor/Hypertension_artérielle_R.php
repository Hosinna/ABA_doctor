<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat du test</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #0050d5;
        }
        .container {
            max-width: 850px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            text-align: center;
        }
        .symptoms {
            margin-bottom: 20px;
        }
        .diagnosis {
            font-weight: bold;
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .btn {
            margin: 0 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .img-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .img-container img {
            max-width: 30%;
            height: auto;
            border-radius: 8px;
        }
        .profile-btn {
            padding: 5px 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .profile-btn:hover {
            background-color: #218838;
        }
        .green-text {
            color: green;
            text-align: center;
            font-weight: bold;
        }
        .btn-annuler {
            background-color: #ff0000; /* Rouge */
            color: #fff; /* Texte blanc */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Résultat du test</h1>

        <div class="symptoms">
            <p class="green-text">Les symptômes observés ne sont pas suffisants pour indiquer une hypertension artérielle. Veuillez consulter un médecin pour un diagnostic précis.</p>
        </div>

        <div id="diagnosis" class="diagnosis"></div>

        <h2>Description de l'hypertension artérielle :</h2>
        <div class="img-container">
            <img src="images/l'hypertension.jpg" alt="Symboles de l'hypertension artérielle">
        </div>
        <p>L'hypertension artérielle est une condition médicale caractérisée par une pression artérielle élevée dans les artères. Les symptômes peuvent inclure :</p>
        <ul>
            <li>Maux de tête</li>
            <li>Vertiges</li>
            <li>Essoufflement</li>
            <li>Saignement nasal</li>
            <li>Fatigue</li>
        </ul>

        <h2>Médecins par spécialité :</h2>
        <table>
            <tr>
                <th>Spécialité</th>
                <th>Nom du médecin</th>
                <th>Adresse</th>
                <th>Profil</th>
            </tr>
            <tr>
                <td>Médecine Générale</td>
                <td>Sofiane Melouah</td>
                <td>El Hadjar, Annaba</td>
                <td><button class="profile-btn" onclick="voirProfil('sofiane-melouah')">Voir Profil</button></td>
            </tr>
            <tr>
                <td>Cardiologue</td>
                <td>Manel Boukarboua</td>
                <td>El Bouni, Annaba</td>
                <td><button class="profile-btn" onclick="voirProfil('manel-boukarboua')">Voir Profil</button></td>
            </tr>
            <tr>
                <td>Médecine Générale</td>
                <td>Djameleddine Boukhatem</td>
                <td>Sidi Amar, Annaba</td>
                <td><button class="profile-btn" onclick="voirProfil('djameleddine-boukhatem')">Voir Profil</button></td>
            </tr>
           
            <!-- Ajoutez d'autres lignes pour d'autres spécialités si nécessaire -->
        </table>
        <br>
        <p style=" text-align: center;
            font-weight: bold;">Importance de la consultation médicale : Il est essentiel de consulter un professionnel de la santé pour un diagnostic précis en cas de symptômes d'hypertension artérielle. Cela permet de confirmer le diagnostic, d'obtenir des conseils sur la gestion des symptômes et, si nécessaire, de recevoir un traitement approprié pour réduire le risque de complications.</p>
       <br>
         <div class="btn-container">
         <button class="btn btn-annuler" onclick="annuler()">Annuler</button>
         <button class="btn" onclick="afficherMedecinsSupplementaires()">Afficher d'autres médecins</button>
            <button class="btn" onclick="window.print()">Imprimer</button>
            <button class="btn" onclick="generatePDF()">Télécharger PDF</button>
        </div>
        
    </div>
    <script>
        function voirProfil(nom) {
            // Remplacez cette URL par l'URL réelle de la page de profil du médecin
            window.location.href = `profil-medecin.html?nom=${nom}`;
        }
// Fonction pour afficher les médecins supplémentaires
        function afficherMedecinsSupplementaires() {
            // Redirection vers la page "medecins_App.php"
            window.location.href = "Médecins_App.php";
        }
        function annuler() {
        if (confirm("Êtes-vous sûr de vouloir annuler et revenir à la page d'accueil ?")) {
            // Redirection vers la page "Accueil.php" si l'utilisateur confirme
            window.location.href = "Accueil.php";
        }
    }
        
    </script>
</body>
</html>
