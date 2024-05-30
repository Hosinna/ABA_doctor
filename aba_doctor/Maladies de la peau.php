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
        <h1>Maladies de la peau</h1>
      
         
        <!-- Section: Maladies de la peau -->
        <div class="section">
                <div class="content">
                <div class="image-section">
                    <img src="images/Maladies de la peau.webp" alt="Maladies de la peau">
                </div>
                <div class="info-section">
                    <p>Les maladies de la peau affectent la structure, la fonction et l'apparence de la peau, entraînant des symptômes variés comme des rougeurs, des démangeaisons et des lésions.</p>
                    <h3>Types de maladies de la peau</h3>
                    <ul>
                        <li><strong>Eczéma :</strong> Inflammation de la peau causant des démangeaisons et des rougeurs.</li>
                        <li><strong>Psoriasis :</strong> Maladie auto-immune provoquant des plaques de peau épaissie.</li>
                        <li><strong>Acné :</strong> Affection des glandes sébacées provoquant des boutons.</li>
                        <li><strong>Dermatite :</strong> Inflammation de la peau.</li>
                        <li><strong>Urticaire :</strong> Éruption cutanée prurigineuse.</li>
                    </ul>
                    <h3>Symptômes communs</h3>
                    <ul>
                        <li>Démangeaisons</li>
                        <li>Rougeurs</li>
                        <li>Lésions cutanées</li>
                        <li>Peau sèche</li>
                        <li>Inflammation</li>
                    </ul>
                    <h3>Traitements</h3>
                    <p>Les traitements des maladies de la peau varient selon la condition et peuvent inclure des crèmes topiques, des médicaments oraux, des thérapies par la lumière et des modifications du mode de vie.</p>
                    <div class="button-container">
                        <a href="https://www.sfdermato.org/" target="_blank" class="learn-more-button">En savoir plus</a>
                        <a href="maladies.php" class="return-button">Retour</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
