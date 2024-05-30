<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des catégories de maladies</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0050d5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            box-sizing: border-box;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 30px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .section {
            margin-bottom: 40px;
        }

        .section h2 {
            color: #0056b3;
            margin-bottom: 20px;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
        }

        .image-section {
            flex: 1 1 40%;
            padding: 10px;
            text-align: center;
        }

        .image-section img {
            max-width: 300px;
            border-radius: 8px;
        }

        .info-section {
            flex: 1 1 60%;
            padding: 10px;
        }

        .info-section h3 {
            color: #0056b3;
            margin-bottom: 10px;
        }

        .info-section p {
            margin-bottom: 15px;
            line-height: 1.6;
            color: #555;
        }

        .info-section ul {
            list-style-type: disc;
            padding-left: 20px;
            color: #555;
        }

        .info-section ul li {
            margin-bottom: 10px;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .learn-more-button, .return-button {
            display: inline-block;
            margin-left: 10px;
            padding: 10px 15px;
            border-radius: 15px;
            background-color: #0056b3;
            color: #ffffff;
          
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Maladies de la bouche et des dents</h1>
      <!-- Section: Maladies de la bouche et des dents -->
      <div class="section">
           
            <div class="content">
                <div class="image-section">
                    <img src="images/Maladies de la bouche et des dents.jpg" alt="Maladies de la bouche et des dents">
                </div>
                <div class="info-section">
                    <p>Les maladies de la bouche et des dents comprennent diverses affections qui affectent les dents, les gencives et la cavité buccale, et peuvent avoir un impact significatif sur la qualité de vie et la santé générale.</p>
                    <h3>Types de maladies de la bouche et des dents</h3>
                    <ul>
                        <li><strong>Caries dentaires :</strong> Décomposition de la dent causée par des bactéries.</li>
                        <li><strong>Maladie parodontale :</strong> Infection des gencives qui peut endommager les tissus mous et osseux.</li>
                        <li><strong>Stomatite :</strong> Inflammation de la muqueuse buccale.</li>
                        <li><strong>Leucoplasie :</strong> Plaques blanches dans la bouche, parfois précancéreuses.</li>
                    </ul>
                    <h3>Symptômes communs</h3>
                    <ul>
                        <li>Douleur dentaire</li>
                        <li>Saignement des gencives</li>
                        <li>Mauvaise haleine</li>
                        <li>Sensibilité dentaire</li>
                    </ul>
                    <h3>Traitements</h3>
                    <p>Les traitements incluent l'hygiène bucco-dentaire, les soins professionnels réguliers, les obturations, les détartrages, et dans certains cas, des interventions chirurgicales.</p>
                    <div class="button-container">
                        <a href="https://www.ufsbd.fr/espace-public/qui-sommes-nous/presentation-generale/" target="_blank" class="learn-more-button">En savoir plus</a>
                        <a href="maladies.php" class="return-button">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
