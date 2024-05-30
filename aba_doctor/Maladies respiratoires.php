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
        <h1>Maladies respiratoires</h1>
      
         
        <div class="section">
          
            <div class="content">
                <div class="image-section">
                    <img src="images/Maladies respiratoires.jpeg" alt="Maladies respiratoires">
                </div>
                <div class="info-section">
                    <p>Les maladies respiratoires affectent les voies respiratoires, comprenant les poumons, les voies respiratoires supérieures et inférieures.</p>
                    <h3>Types de maladies respiratoires</h3>
                    <ul>
                        <li>Asthme</li>
                        <li>Bronchite</li>
                        <li>Pneumonie</li>
                    </ul>
                    <h3>Symptômes communs</h3>
                    <ul>
                        <li>Toux</li>
                        <li>Essoufflement</li>
                        <li>Respiration sifflante</li>
                    </ul>
                    <h3>Traitements</h3>
                    <p>Les traitements peuvent inclure des médicaments, une thérapie respiratoire et des changements de mode de vie.</p>
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
