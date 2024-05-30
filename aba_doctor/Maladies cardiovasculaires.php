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

        .learn-more-button {
            display: inline-block;
            margin-top: 20px;
            margin-left: 800px;
            padding: 10px 15px;
            border-radius: 15px;
            background-color: #0056b3;
            color: #ffffff;
            text-decoration: none;
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
        <h1>Maladies cardiovasculaires</h1>


        <div class="section">
            
            <div class="content">
                <div class="image-section">
                    <img src="images/Maladies cardiovasculaires.jpg" alt="Maladies cardiovasculaires">
                </div>
                <div class="info-section">
                    <p>Les maladies cardiovasculaires sont des troubles du cœur et des vaisseaux sanguins. Elles incluent des conditions telles que les maladies coronariennes, les arythmies, et l'insuffisance cardiaque.</p>
                    <h3>Types de maladies cardiovasculaires</h3>
                    <ul>
                        <li><strong>Maladie coronarienne :</strong> Rétrécissement ou blocage des artères coronaires.</li>
                        <li><strong>Insuffisance cardiaque :</strong> Incapacité du cœur à pomper suffisamment de sang.</li>
                        <li><strong>Hypertension :</strong> Pression artérielle élevée.</li>
                        <li><strong>Accident vasculaire cérébral (AVC) :</strong> Interruption du flux sanguin vers le cerveau.</li>
                        <li><strong>Cardiomyopathie :</strong> Maladie du muscle cardiaque.</li>
                    </ul>
                    <h3>Symptômes communs</h3>
                    <ul>
                        <li>Douleur thoracique</li>
                        <li>Essoufflement</li>
                        <li>Palpitations</li>
                        <li>Fatigue</li>
                        <li>Gonflement des pieds ou des chevilles</li>
                    </ul>
                    <h3>Traitements</h3>
                  
                  <p>Les traitements des maladies cardiovasculaires peuvent inclure des changements de mode de vie, des médicaments, et des interventions chirurgicales. Les traitements visent à améliorer la circulation sanguine, réduire les symptômes, et prévenir les complications.</p>
                  <div class="button-container">
                        <a href="https://www.fedecardio.org/" target="_blank" class="learn-more-button">En savoir plus</a>
                        <a href="maladies.php" class="return-button">Retour</a>
                    </div>
                 
            </div>
        </div>

        <!-- Ajoutez d'autres sections de maladies ici -->
        
    </div>
</body>
</html>
