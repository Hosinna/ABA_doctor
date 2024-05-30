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
            <img src="images/sixth_photo.png" alt="Image de la grippe">
        </div>
       
        <div class="symptoms">
            <h2>Symptômes</h2>
            <div class="symptom">
                <label for="symptom21">• Maux de tête sévères:</label>
                <input type="radio" id="symptom21_yes" name="symptom21" value="oui">
                <label for="symptom21_yes">Oui</label>
                <input type="radio" id="symptom21_no" name="symptom21" value="non">
                <label for="symptom21_no">Non</label>
            </div>
            <div class="symptom">
                <label for="symptom22">• Sensibilité à la lumière:</label>
                <input type="radio" id="symptom22_yes" name="symptom22" value="oui">
                <label for="symptom22_yes">Oui</label>
                <input type="radio" id="symptom22_no" name="symptom22" value="non">
                <label for="symptom22_no">Non</label>
            </div>
            <div class="symptom">
                <label for="symptom23">• Nausées:</label>
                <input type="radio" id="symptom23_yes" name="symptom23" value="oui">
                <label for="symptom23_yes">Oui</label>
                <input type="radio" id="symptom23_no" name="symptom23" value="non">
                <label for="symptom23_no">Non</label>
            </div>
            <div class="symptom">
                <label for="symptom24">• Vomissements:</label>
                <input type="radio" id="symptom24_yes" name="symptom24" value="oui">
                <label for="symptom24_yes">Oui</label>
                <input type="radio" id="symptom24_no" name="symptom24" value="non">
                <label for="symptom24_no">Non</label>
            </div>
            <div class="symptom">
                <label for="symptom25">• Vision floue ou troublée:</label>
                <input type="radio" id="symptom25_yes" name="symptom25" value="oui">
                <label for="symptom25_yes">Oui</label>
                <input type="radio" id="symptom25_no" name="symptom25" value="non">
                <label for="symptom25_no">Non</label>
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
        let symptoms = ['symptom21', 'symptom22', 'symptom23', 'symptom24', 'symptom25'];
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
            let symptoms = ['symptom21', 'symptom22', 'symptom23', 'symptom24', 'symptom25'];
            symptoms.forEach(function(symptom) {
                localStorage.removeItem(symptom);
            });
            window.location.href = 'Accueil.php';
        }
    }

    function retour() {
        window.location.href = 'fifth.php';
    }

    function suivant() {
        let symptoms = ['symptom21', 'symptom22', 'symptom23', 'symptom24', 'symptom25'];
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
            window.location.href = 'megraine_R.php';
        } else {
            window.location.href = 'Erreur_R.php';
        }
    }
</script>
</body>
</html>

