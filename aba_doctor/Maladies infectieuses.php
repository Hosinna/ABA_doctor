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
            max-width: 100%;
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
        <h1>Maladies infectieuses</h1>

        <div class="section">
           
            <div class="content">
                <div class="image-section">
                    <img src="images/Maladies infectieuses.jpg" alt="Maladies infectieuses">
                </div>
                <div class="info-section">
                    <p>Les maladies infectieuses sont causées par des agents pathogènes tels que des bactéries, des virus, des champignons ou des parasites. Elles peuvent se propager directement de personne à personne, ou indirectement via des vecteurs ou des surfaces contaminées.</p>
                    <h3>Types de maladies infectieuses</h3>
                    <ul>
                        <li><strong>Grippe :</strong> Infection virale des voies respiratoires.</li>
                        <li><strong>Tuberculose :</strong> Infection bactérienne affectant principalement les poumons.</li>
                        <li><strong>VIH/SIDA :</strong> Virus attaquant le système immunitaire.</li>
                        <li><strong>Paludisme :</strong> Maladie parasitaire transmise par les moustiques.</li>
                        <li><strong>COVID-19 :</strong> Maladie respiratoire causée par le coronavirus SARS-CoV-2.</li>
                    </ul>
                    <h3>Symptômes communs</h3>
                    <ul>
                        <li>Fièvre</li>
                        <li>Fatigue</li>
                        <li>Toux</li>
                        <li>Douleurs musculaires</li>
                        <li>Perte d'appétit</li>
                        <li>Diarrhée</li>
                    </ul>
                    <h3>Traitements</h3>
                    <p>Le traitement des maladies infectieuses varie en fonction de l'agent pathogène en cause. Il peut inclure des antibiotiques pour les infections bactériennes, des antiviraux pour les infections virales, des antifongiques pour les infections fongiques, et des antiparasitaires pour les infections parasitaires. La prévention par la vaccination et les mesures d'hygiène est également essentielle.</p>
                    <div class="button-container">
                        <a href="https://www.moh.gov.sa/HealthAwareness/EducationalContent/Diseases/Infectious/Pages/default.aspx" target="_blank" class="learn-more-button">En savoir plus</a>
                        <a href="maladies.php" class="return-button">Retour</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
