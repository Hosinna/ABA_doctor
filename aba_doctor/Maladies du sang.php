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
        <h1>Maladies du sang</h1>
        <div class="section">
         
            <div class="content">
                <div class="image-section">
                    <img src="images/Maladies du sang.webp" alt="Maladies du sang">
                </div>
                <div class="info-section">
                    <p>Les maladies du sang affectent les composants du sang, tels que les globules rouges, les globules blancs, les plaquettes et le plasma.</p>
                    <h3>Types de maladies du sang</h3>
                    <ul>
                        <li><strong>Anémie :</strong> Diminution du nombre de globules rouges ou de l'hémoglobine.</li>
                        <li><strong>Leucémie :</strong> Cancer des tissus formateurs de sang.</li>
                        <li><strong>Thalassémie :</strong> Trouble héréditaire affectant l'hémoglobine.</li>
                        <li><strong>Hémophilie :</strong> Trouble de la coagulation sanguine.</li>
                        <li><strong>Lymphome :</strong> Cancer des lymphocytes.</li>
                    </ul>
                    <h3>Symptômes communs</h3>
                    <ul>
                        <li>Fatigue</li>
                        <li>Pâleur</li>
                        <li>Saignements excessifs</li>
                        <li>Infections fréquentes</li>
                        <li>Ecchymoses faciles</li>
                    </ul>
                    <h3>Traitements</h3>
                    <p>Le traitement des maladies du sang peut inclure des transfusions sanguines, des chimiothérapies, des thérapies ciblées et des greffes de moelle osseuse.</p>
                    <div class="button-container">
                        <a href="https://www.moh.gov.sa/HealthAwareness/EducationalContent/Diseases/Hematology/Pages/default.aspx" target="_blank" class="learn-more-button">En savoir plus</a>
                        <a href="maladies.php" class="return-button">Retour</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
