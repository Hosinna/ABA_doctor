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
        <h1>Maladies cancéreuses</h1>
      
         
        <!-- Section: Maladies cancéreuses -->
        <div class="section">
           
            <div class="content">
                <div class="image-section">
                    <img src="images/Maladies cancéreuses.jpg" alt="Maladies cancéreuses">
                </div>
                <div class="info-section">
                    <p>Les maladies cancéreuses se caractérisent par une croissance cellulaire anormale et incontrôlée qui peut envahir et détruire les tissus sains du corps.</p>
                    <h3>Types de cancers</h3>
                    <ul>
                        <li><strong>Cancer du sein :</strong> Cancer qui se forme dans les cellules du sein.</li>
                        <li><strong>Cancer de la prostate :</strong> Cancer qui se développe dans la prostate.</li>
                        <li><strong>Leucémie :</strong> Cancer des tissus formateurs de sang.</li>
                        <li><strong>Lymphome :</strong> Cancer du système lymphatique.</li>
                        <li><strong>Cancer du poumon :</strong> Cancer qui commence dans les poumons.</li>
                    </ul>
                    <h3>Symptômes communs</h3>
                    <ul>
                        <li>Tumeur palpable</li>
                        <li>Perte de poids inexpliquée</li>
                        <li>Fatigue chronique</li>
                        <li>Sang dans les selles ou l'urine</li>
                        <li>Toux persistante</li>
                    </ul>
                    <h3>Traitements</h3>
                    <p>Le traitement du cancer dépend du type, de la localisation et du stade de la maladie, et peut inclure la chirurgie, la chimiothérapie, la radiothérapie, l'immunothérapie et d'autres thérapies ciblées.</p>
                    <div class="button-container">
                        <a href="https://www.e-cancer.fr/" target="_blank" class="learn-more-button">En savoir plus</a>
                        <a href="maladies.php" class="return-button">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
