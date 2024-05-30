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
        <h1>Maladies des os</h1>
       
         
        <div class="section">
          
            <div class="content">
                <div class="image-section">
                    <img src="images/Maladies des os.avif" alt="Maladies des os">
                </div>
                <div class="info-section">
                    <p>Les maladies des os affectent la solidité et la structure des os, pouvant entraîner des fractures, des douleurs et des déformations.</p>
                    <h3>Types de maladies des os</h3>
                    <ul>
                        <li><strong>Ostéoporose :</strong> Affaiblissement des os, augmentant le risque de fractures.</li>
                        <li><strong>Ostéomalacie :</strong> Ramollissement des os dû à une carence en vitamine D.</li>
                        <li><strong>Maladie de Paget :</strong> Remplacement anarchique du tissu osseux.</li>
                        <li><strong>Ostéomyélite :</strong> Infection de l'os.</li>
                        <li><strong>Fractures :</strong> Ruptures osseuses dues à des blessures ou à des maladies.</li>
                    </ul>
                    <h3>Symptômes communs</h3>
                    <ul>
                        <li>Douleur osseuse</li>
                        <li>Fractures fréquentes</li>
                        <li>Déformation des os</li>
                        <li>Faiblesse musculaire</li>
                        <li>Réduction de la taille</li>
                    </ul>
                    <h3>Traitements</h3>
                    <p>Le traitement des maladies des os peut inclure des suppléments de calcium et de vitamine D, des médicaments pour renforcer les os, la physiothérapie et, dans certains cas, une intervention chirurgicale.</p>
                    <div class="button-container">
                        <a href="https://www.moh.gov.sa/HealthAwareness/EducationalContent/Diseases/Nervous-system/Pages/default.aspx" target="_blank" class="learn-more-button">En savoir plus</a>
                        <a href="maladies.php" class="return-button">Retour</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
