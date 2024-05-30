<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface Médicale</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .disease {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .disease h2 {
            margin-top: 0;
        }

        .disease img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .disease p {
            margin-bottom: 10px;
        }

        .symptoms {
            list-style-type: none;
            padding: 0;
        }

        .symptoms li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div id="app">
        <!-- Conteneur pour les maladies -->
    </div>

    <script>
        // Données des maladies et de leurs symptômes
        const diseases = [
            {
                name: "Grippe",
                image: "grippe.jpg",
                description: "La grippe est une infection respiratoire aiguë causée par des virus. Les symptômes typiques incluent fièvre, toux, maux de tête, fatigue et courbatures.",
                symptoms: ["Fièvre", "Toux", "Maux de tête", "Fatigue", "Courbatures"]
            },
            {
                name: "Rhume",
                image: "rhume.jpg",
                description: "Le rhume est une infection virale qui affecte principalement le nez et la gorge. Les symptômes incluent écoulement nasal, éternuements, mal de gorge, faible fièvre et fatigue légère.",
                symptoms: ["Écoulement nasal", "Éternuements", "Mal de gorge", "Faible fièvre", "Fatigue légère"]
            },
            // Ajoutez les autres maladies avec leurs photos et descriptions ici
        ];

        // Récupérer l'élément conteneur
        const appContainer = document.getElementById("app");

        // Générer l'interface pour chaque maladie
        diseases.forEach(disease => {
            const diseaseElement = document.createElement("div");
            diseaseElement.classList.add("disease");

            const titleElement = document.createElement("h2");
            titleElement.textContent = disease.name;

            const imageElement = document.createElement("img");
            imageElement.src = disease.image;
            imageElement.alt = disease.name;

            const descriptionElement = document.createElement("p");
            descriptionElement.textContent = disease.description;

            const symptomsList = document.createElement("ul");
            symptomsList.classList.add("symptoms");

            disease.symptoms.forEach(symptom => {
                const symptomElement = document.createElement("li");
                symptomElement.textContent = symptom;
                symptomsList.appendChild(symptomElement);
            });

            diseaseElement.appendChild(titleElement);
            diseaseElement.appendChild(imageElement);
            diseaseElement.appendChild(descriptionElement);
            diseaseElement.appendChild(symptomsList);

            appContainer.appendChild(diseaseElement);
        });
    </script>
</body>
</html>
