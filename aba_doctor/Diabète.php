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
        <h1>Diabète</h1>
        <div class="section">
         
        <div class="section">
          
            <div class="content">
                <div class="image-section">
                    <img src="images/Diabète.jpg" alt="Diabète">
                </div>
                <div class="info-section">
                    <p>Le diabète est une maladie chronique qui affecte la façon dont le corps transforme les aliments en énergie. Elle est caractérisée par une glycémie élevée.</p>
                    <h3>Types de diabète</h3>
                    <ul>
                        <li><strong>Diabète de type 1 :</strong> Maladie auto-immune où le corps n'est plus capable de produire de l'insuline.</li>
                        <li><strong>Diabète de type 2 :</strong> Résistance à l'insuline et insuffisance relative de la sécrétion d'insuline.</li>
                        <li><strong>Diabète gestationnel :</strong> Diabète qui se développe pendant la grossesse.</li>
                    </ul>
                    <h3>Symptômes communs</h3>
                    <ul>
                        <li>Soif excessive</li>
                        <li>Urination fréquente</li>
                        <li>Fatigue</li>
                        <li>Vision floue</li>
                        <li>Perte de poids inexpliquée</li>
                    </ul>
                    <h3>Traitements</h3>
                    <p>Le traitement du diabète comprend la surveillance de la glycémie, l'utilisation de l'insuline ou d'autres médicaments, ainsi que des modifications du mode de vie telles qu'un régime alimentaire sain et l'exercice physique.</p>
                    <div class="button-container">
                        <a href="https://www.ints.fr/" target="_blank" class="learn-more-button">En savoir plus</a>
                        <a href="maladies.php" class="return-button">Retour</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
