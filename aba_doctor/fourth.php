

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Symptômes</title>
<link rel="stylesheet" href="css/symptomes_styles.css">
</head>
<body>
<div class="container">
    <div class="content">
        <div class="image-container">
            <img src="images/bonhomme-blanc-3d-9.png" alt="Image de la grippe">
        </div>
       
   
        <div class="symptoms">
        <h2 style="text">Symptômes</h2>
            <div class="symptom">
                <label for="symptom16">•	Polyurie (urinations fréquentes)</label>
                <input type="radio" id="symptom16_yes" name="symptom16" value="oui">
                <label for="symptom16_yes">Oui</label>
                <input type="radio" id="symptom16_no" name="symptom16" value="non">
                <label for="symptom16_no">Non</label>
            </div>
            <div class="symptom">
                <label for="symptom17">•	Polydipsie (soif intense):</label>
                <input type="radio" id="symptom17_yes" name="symptom17" value="oui">
                <label for="symptom17_yes">Oui</label>
                <input type="radio" id="symptom17_no" name="symptom17" value="non">
                <label for="symptom17_no">Non</label>
            </div>
            <div class="symptom">
                <label for="symptom18">•	Fatigue:</label>
                <input type="radio" id="symptom18_yes" name="symptom18" value="oui">
                <label for="symptom18_yes">Oui</label>
                <input type="radio" id="symptom18_no" name="symptom18" value="non">
                <label for="symptom18_no">Non</label>
            </div>
            <div class="symptom">
                <label for="symptom19">•	Vision floue:</label>
                <input type="radio" id="symptom19_yes" name="symptom19" value="oui">
                <label for="symptom19_yes">Oui</label>
                <input type="radio" id="symptom19_no" name="symptom19" value="non">
                <label for="symptom19_no">Non</label>
            </div>
            <div class="symptom">
                <label for="symptom20">•	Engourdissement des extrémités:</label>
                <input type="radio" id="symptom20_yes" name="symptom20" value="oui">
                <label for="symptom20_yes">Oui</label>
                <input type="radio" id="symptom20_no" name="symptom20" value="non">
                <label for="symptom20_no">Non</label>
            </div>
           
            <div class="buttons">
                <button class="cancel" onclick="annuler()">Annuler</button>
                <button class="previous" onclick="retour()">Précédent</button>
                <button class="next" onclick="suivant()">Suivant</button>
            </div>
        </div>
    </div>
</div>
<script>
    // Charger les réponses précédentes depuis le stockage local
    function loadResponses() {
        let symptoms = ['symptom16', 'symptom17', 'symptom18', 'symptom19', 'symptom20'];
        symptoms.forEach(function(symptom) {
            let response = localStorage.getItem(symptom);
            if (response) {
                document.querySelector(`input[name="${symptom}"][value="${response}"]`).checked = true;
            }
        });
    }

    // Charger les réponses lors du chargement de la page
    window.onload = loadResponses;

    function annuler() {
        if (confirm("Êtes-vous sûr de vouloir annuler ?")) {
            window.location.href = 'Accueil.php';
        }
    }

    function retour() {
        window.location.href = 'third.php';
    }

    function suivant() {
        let symptoms = ['symptom16', 'symptom17', 'symptom18', 'symptom19', 'symptom20'];
        let allAnswered = true;
        let count = 0;

        symptoms.forEach(function(symptom) {
            let yesRadio = document.querySelector(`input[name="${symptom}"][value="oui"]`);
            let noRadio = document.querySelector(`input[name="${symptom}"][value="non"]`);
            if (!yesRadio.checked && !noRadio.checked) {
                allAnswered = false;
            }
            if (yesRadio.checked) {
                count++;
            }

            // Sauvegarder les réponses dans le stockage local
            if (yesRadio.checked || noRadio.checked) {
                localStorage.setItem(symptom, yesRadio.checked ? 'oui' : 'non');
            }
        });

        if (!allAnswered) {
            alert("Veuillez répondre à toutes les questions.");
            return;
        }

        if (count >= 4) {
            window.location.href = 'Diabète_R.php';
        } else {
            window.location.href = 'fifth.php';
        }
    }
</script>
</body>
</html>
