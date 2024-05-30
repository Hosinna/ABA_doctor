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
        <h1>Maladies du système musculo-squelettique</h1>

        <div class="section">
         
            <div class="content">
                <div class="image-section">
                    <img src="images/Maladies du système musculo-squelettique.jpg" alt="Maladies du système musculo-squelettique">
                </div>
                <div class="info-section">
                    <p>Les maladies du système musculo-squelettique affectent les muscles, les os et les articulations, causant douleur, inflammation et réduction de la mobilité.</p>
                    <h3>Types de maladies musculo-squelettiques</h3>
                    <ul>
                        <li><strong>Arthrose :</strong> Dégénérescence du cartilage articulaire.</li>
                        <li><strong>Arthrite rhumatoïde :</strong> Maladie auto-immune affectant les articulations.</li>
                        <li><strong>Ostéoporose :</strong> Fragilisation des os.</li>
                        <li><strong>Sciatique :</strong> Douleur le long du nerf sciatique.</li>
                        <li><strong>Fibromyalgie :</strong> Douleur musculo-squelettique généralisée.</li>
                    </ul>
                    <h3>Symptômes communs</h3>
                    <ul>
                        <li>Douleur articulaire ou musculaire</li>
                        <li>Raideur</li>
                        <li>Gonflement des articulations</li>
                        <li>Perte de mobilité</li>
                        <li>Fatigue</li>
                    </ul>
                    <h3>Traitements</h3>
                    <p>Les traitements peuvent inclure des médicaments anti-inflammatoires, des thérapies physiques, des modifications du mode de vie et, dans certains cas, une intervention chirurgicale.</p>
                    <div class="button-container">
                        <a href="https://www.moh.gov.sa/HealthAwareness/EducationalContent/Diseases/Mouth-ear-throat/Pages/default.aspx" target="_blank" class="learn-more-button">En savoir plus</a>
                        <a href="maladies.php" class="return-button">Retour</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
