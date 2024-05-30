<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Symptômes Checker</title>
<style>
body {
  font-family: Arial, sans-serif;
}

.container {
  max-width: 600px;
  margin: 0 auto;
  text-align: center;
}

h1 {
  color: #333;
}

button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

</style>
</head>
<body>
  <div class="container">
    <h1>Symptômes Checker</h1>
    <p>Cochez "Oui" ou "Non" pour chaque symptôme :</p>
    <div id="symptoms"></div>
    <button onclick="submitAnswers()">Soumettre</button>
    <div id="result"></div>
  </div>

  <script>const symptoms = [
  "Fièvre",
  "Toux",
  "Maux de tête",
  "Fatigue",
  "Courbatures",
  "Écoulement nasal",
  "Éternuements",
  "Mal de gorge",
  "Faible fièvre",
  "Fatigue légère",
  "Hypertension",
  "Maux de tête persistants",
  "Étourdissements",
  "Essoufflement",
  "Vision floue",
  "Polyurie",
  "Polydipsie",
  "Engourdissement des extrémités",
  "Respiration sifflante",
  "Essoufflement",
  "Toux sèche",
  "Oppression thoracique",
  "Fatigue",
  "Maux de tête sévères",
  "Sensibilité à la lumière",
  "Nausées",
  "Vomissements",
  "Vision floue ou troublée",
  "Éruption cutanée",
  "Démangeaisons",
  "Gonflement des lèvres ou de la langue",
  "Nausées",
  "Vomissements",
  "Fièvre",
  "Toux productive",
  "Essoufflement",
  "Douleur thoracique",
  "Fatigue",
  "Fatigue extrême",
  "Palpitations cardiaques",
  "Essoufflement à l'effort",
  "Peau pâle",
  "Vertiges",
  "Brûlures en urinant",
  "Besoin fréquent d'uriner",
  "Urines troubles ou malodorantes",
  "Douleur abdominale basse",
  "Fièvre légère"
];

const container = document.getElementById("symptoms");

symptoms.forEach(symptom => {
  const div = document.createElement("div");
  div.innerHTML = `
    <p>${symptom}</p>
    <label for="${symptom}_yes">Oui</label>
    <input type="radio" id="${symptom}_yes" name="${symptom}" value="yes">
    <label for="${symptom}_no">Non</label>
    <input type="radio" id="${symptom}_no" name="${symptom}" value="no">
  `;
  container.appendChild(div);
});

function submitAnswers() {
  const resultContainer = document.getElementById("result");
  const checkedSymptoms = [];

  symptoms.forEach(symptom => {
    const yesRadio = document.getElementById(`${symptom}_yes`);
    if (yesRadio.checked) {
      checkedSymptoms.push(symptom);
    }
  });

  resultContainer.innerHTML = `<p>Les symptômes suivants ont été cochés : ${checkedSymptoms.join(", ")}</p>`;
}
</script>
</body>
</html>
