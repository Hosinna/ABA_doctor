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
        <h1>Maladies endocriniennes</h1>

        <div class="section">
            <div class="content">
                <div class="image-section">
                    <img src="images/Maladies endocriniennes.webp" alt="Maladies endocriniennes">
                </div>
                <div class="info-section">
                    <p>Les maladies endocriniennes affectent les glandes qui produisent des hormones, perturbant ainsi de nombreuses fonctions corporelles.</p>
                    <h3>Types de maladies endocriniennes</h3>
                    <ul>
                        <li><strong>Diabète :</strong> Trouble de la régulation de la glycémie.</li>
                        <li><strong>Hyperthyroïdie :</strong> Production excessive d'hormones thyroïdiennes.</li>
                        <li><strong>Hypothyroïdie :</strong> Production insuffisante d'hormones thyroïdiennes.</li>
                        <li><strong>Maladie de Cushing :</strong> Excès de cortisol dans le corps.</li>
                        <li><strong>Maladie d'Addison :</strong> Insuffisance surrénalienne.</li>
                    </ul>
                    <h3>Symptômes communs</h3>
                    <ul>
                        <li>Fatigue</li>
                        <li>Perte de poids ou gain de poids</li>
                        <li>Changements d'humeur</li>
                        <li>Faiblesse musculaire</li>
                        <li>Problèmes de peau</li>
                    </ul>
                    <h3>Traitements</h3>
                    <p>Le traitement des maladies endocriniennes dépend de la condition spécifique et peut inclure des médicaments pour réguler les hormones, des changements de mode de vie et parfois des interventions chirurgicales.</p>
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
