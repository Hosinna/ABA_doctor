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
            max-width: 250px;
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
        <h1>Maladies non transmissibles</h1>
     
        <div class="section">
            <div class="content">
                <div class="image-section">
                    <img src="images/Maladies non transmissibles.png" alt="Maladies non transmissibles">
                </div>
                <div class="info-section">
                    <p>Les maladies non transmissibles (MNT) sont des affections chroniques qui ne se transmettent pas d'une personne à l'autre. Elles incluent généralement les maladies cardiovasculaires, les cancers, les maladies respiratoires chroniques et le diabète.</p>
                    <h3>Types de maladies non transmissibles</h3>
                    <ul>
                        <li><strong>Maladies cardiovasculaires :</strong> Maladies du cœur et des vaisseaux sanguins.</li>
                        <li><strong>Cancers :</strong> Croissance incontrôlée de cellules anormales dans le corps.</li>
                        <li><strong>Maladies respiratoires chroniques :</strong> Maladies des voies respiratoires et autres structures pulmonaires.</li>
                        <li><strong>Diabète :</strong> Trouble de la régulation du sucre dans le sang.</li>
                    </ul>
                    <h3>Symptômes communs</h3>
                    <ul>
                        <li>Fatigue</li>
                        <li>Douleur chronique</li>
                        <li>Essoufflement</li>
                        <li>Perturbations métaboliques</li>
                    </ul>
                    <h3>Traitements</h3>
                    <p>Les traitements des MNT incluent la gestion des symptômes à long terme à travers des médicaments, des changements de mode de vie, et des interventions chirurgicales si nécessaire. La prévention joue également un rôle crucial.</p>
                    <div class="button-container">
                        <a href="https://www.who.int/fr/health-topics/noncommunicable-diseases#tab=tab_1" target="_blank" class="learn-more-button">En savoir plus</a>
                        <a href="maladies.php" class="return-button">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
