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
        <h1>Maladies rares</h1>
       <!-- Section: Maladies rares -->
       <div class="section">
          
            <div class="content">
                <div class="image-section">
                    <img src="images/Maladies rares.jpg" alt="Maladies rares">
                </div>
                <div class="info-section">
                    <p>Les maladies rares sont des affections qui touchent un petit pourcentage de la population. Souvent, elles sont génétiques et apparaissent tôt dans la vie.</p>
                    <h3>Types de maladies rares</h3>
                    <ul>
                        <li><strong>Fibrose kystique :</strong> Maladie génétique affectant les poumons et le système digestif.</li>
                        <li><strong>Maladie de Gaucher :</strong> Trouble du métabolisme des lipides.</li>
                        <li><strong>Progeria :</strong> Syndrome de vieillissement prématuré chez les enfants.</li>
                        <li><strong>Syndrome de Marfan :</strong> Trouble du tissu conjonctif affectant le cœur, les yeux, les vaisseaux sanguins et les os.</li>
                    </ul>
                    <h3>Symptômes communs</h3>
                    <ul>
                        <li>Symptômes variés en fonction de la maladie spécifique</li>
                        <li>Difficultés respiratoires</li>
                        <li>Retard de croissance</li>
                        <li>Anomalies squelettiques</li>
                    </ul>
                    <h3>Traitements</h3>
                    <p>Les traitements varient en fonction de la maladie, incluant souvent une approche multidisciplinaire avec des médicaments, des thérapies géniques, et des soins symptomatiques.</p>
                    <div class="button-container">
                        <a href="https://www.orpha.net/" target="_blank" class="learn-more-button">En savoir plus</a>
                        <a href="maladies.php" class="return-button">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
