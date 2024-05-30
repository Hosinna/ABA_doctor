
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
            <img src="images/qes_symt.png" alt="Image de la grippe">
        </div>
       
        <form action="symptomes.php" method="POST" id="symptomsForm">
            <div class="symptoms">
                <h2 style="text">Symptômes</h2><br>
                <div class="symptom">
                    <label for="symptom1">• Fièvre:</label>
                    <input type="radio" id="symptom1_yes" name="symptom1" value="oui">
                    <label for="symptom1_yes">Oui</label>
                    <input type="radio" id="symptom1_no" name="symptom1" value="non">
                    <label for="symptom1_no">Non</label>
                </div>
                <div class="symptom">
                    <label for="symptom2">• Toux:</label>
                    <input type="radio" id="symptom2_yes" name="symptom2" value="oui">
                    <label for="symptom2_yes">Oui</label>
                    <input type="radio" id="symptom2_no" name="symptom2" value="non">
                    <label for="symptom2_no">Non</label>
                </div>
                <div class="symptom">
                    <label for="symptom3">• Maux de tête:</label>
                    <input type="radio" id="symptom3_yes" name="symptom3" value="oui">
                    <label for="symptom3_yes">Oui</label>
                    <input type="radio" id="symptom3_no" name="symptom3" value="non">
                    <label for="symptom3_no">Non</label>
                </div>
                <div class="symptom">
                    <label for="symptom4">• Fatigue:</label>
                    <input type="radio" id="symptom4_yes" name="symptom4" value="oui">
                    <label for="symptom4_yes">Oui</label>
                    <input type="radio" id="symptom4_no" name="symptom4" value="non">
                    <label for="symptom4_no">Non</label>
                </div>
                <div class="symptom">
                    <label for="symptom5">• Courbatures:</label>
                    <input type="radio" id="symptom5_yes" name="symptom5" value="oui">
                    <label for="symptom5_yes">Oui</label>
                    <input type="radio" id="symptom5_no" name="symptom5" value="non">
                    <label for="symptom5_no">Non</label>
                </div>
                <br>
                <div class="buttons">
                    <button type="button" class="cancel" id="cancelButton">Annuler</button>
                    <button type="submit" class="next" id="nextButton">Suivant</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    // Fonction pour charger les réponses précédentes depuis le stockage local
    function loadResponses() {
        let symptoms = ['symptom1', 'symptom2', 'symptom3', 'symptom4', 'symptom5'];
        symptoms.forEach(function(symptom) {
            let response = localStorage.getItem(symptom);
            if (response) {
                document.querySelector(`input[name="${symptom}"][value="${response}"]`).checked = true;
            }
        });
    }

    // Charger les réponses lors du chargement de la page
    window.onload = loadResponses;

    document.getElementById('cancelButton').addEventListener('click', function() {
        if (confirm("Êtes-vous sûr de vouloir annuler ?")) {
            // Supprimer toutes les réponses du stockage local
            let symptoms = ['symptom1', 'symptom2', 'symptom3', 'symptom4', 'symptom5'];
            symptoms.forEach(function(symptom) {
                localStorage.removeItem(symptom);
            });
            // Rediriger vers la page d'accueil
            window.location.href = 'Accueil.php';
        }
    });

    document.getElementById('symptomsForm').addEventListener('submit', function(event) {
        let symptoms = ['symptom1', 'symptom2', 'symptom3', 'symptom4', 'symptom5'];
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
            event.preventDefault();
            return;
        }

        if (count >= 4) {
            this.action = "grippe_R.php";
        } else {
            this.action = "second.php";
        }
    });
    
</script>

</body>
</html>
