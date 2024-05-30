
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
            <img src="images/photos-gratuites-libres-de-droits-96-1560x1560.png" alt="Image de la grippe">
        </div>
       
   
        <div class="symptoms">
        <h2 style="text">Symptômes</h2><br>
            <div class="symptom">
                <label for="symptom11">•	Vision floue :</label>
                <input type="radio" id="symptom11_yes" name="symptom11" value="oui">
                <label for="symptom11_yes">Oui</label>
                <input type="radio" id="symptom11_no" name="symptom11" value="non">
                <label for="symptom11_no">Non</label>
            </div>
            <div class="symptom">
                <label for="symptom12">•	Maux de tête persistants:</label>
                <input type="radio" id="symptom12_yes" name="symptom12" value="oui">
                <label for="symptom12_yes">Oui</label>
                <input type="radio" id="symptom12_no" name="symptom12" value="non">
                <label for="symptom12_no">Non</label>
            </div>
            <div class="symptom">
                <label for="symptom13">•	Étourdissements:</label>
                <input type="radio" id="symptom13_yes" name="symptom13" value="oui">
                <label for="symptom13_yes">Oui</label>
                <input type="radio" id="symptom13_no" name="symptom13" value="non">
                <label for="symptom13_no">Non</label>
            </div>
            <div class="symptom">
                <label for="symptom14">•	Essoufflement:</label>
                <input type="radio" id="symptom14_yes" name="symptom14" value="oui">
                <label for="symptom14_yes">Oui</label>
                <input type="radio" id="symptom14_no" name="symptom14" value="non">
                <label for="symptom14_no">Non</label>
            </div>
            <div class="symptom">
                <label for="symptom15">•	Hypertension (pression artérielle élevée):</label>
                <input type="radio" id="symptom15_yes" name="symptom15" value="oui">
                <label for="symptom15_yes">Oui</label>
                <input type="radio" id="symptom15_no" name="symptom15" value="non">
                <label for="symptom15_no">Non</label>
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
        let symptoms = ['symptom11', 'symptom12', 'symptom13', 'symptom14', 'symptom15'];
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
            // Supprimer les réponses du stockage local
            let symptoms = ['symptom11', 'symptom12', 'symptom13', 'symptom14', 'symptom15'];
            symptoms.forEach(function(symptom) {
                localStorage.removeItem(symptom);
            });
            window.location.href = 'Accueil.php';
        }
    }

    function retour() {
        window.location.href = 'second.php';
    }

    function suivant() {
        let symptoms = ['symptom11', 'symptom12', 'symptom13', 'symptom14', 'symptom15'];
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
            window.location.href = 'Hypertension_artérielle_R.php';
        } else {
            window.location.href = 'fourth.php';
        }
    }
</script>
</body>
</html>
