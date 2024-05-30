
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
            <img src="images/unnamed.png" alt="Image de la grippe">
        </div>
       
   
        <div class="symptoms">
        <h2 style="text">Symptômes</h2><br>
            <div class="symptom">
                <label for="symptom6">•	Écoulement nasal:</label>
                <input type="radio" id="symptom6_yes" name="symptom6" value="oui">
                <label for="symptom6_yes">Oui</label>
                <input type="radio" id="symptom6_no" name="symptom6" value="non">
                <label for="symptom6_no">Non</label>
            </div>
            <div class="symptom">
                <label for="symptom7">•	Éternuements:</label>
                <input type="radio" id="symptom7_yes" name="symptom7" value="oui">
                <label for="symptom7_yes">Oui</label>
                <input type="radio" id="symptom7_no" name="symptom7" value="non">
                <label for="symptom7_no">Non</label>
            </div>
            <div class="symptom">
                <label for="symptom8">•	Mal de gorge:</label>
                <input type="radio" id="symptom8_yes" name="symptom8" value="oui">
                <label for="symptom8_yes">Oui</label>
                <input type="radio" id="symptom8_no" name="symptom8" value="non">
                <label for="symptom8_no">Non</label>
            </div>
            <div class="symptom">
                <label for="symptom9">•	Faible fièvre:</label>
                <input type="radio" id="symptom9_yes" name="symptom9" value="oui">
                <label for="symptom9_yes">Oui</label>
                <input type="radio" id="symptom9_no" name="symptom9" value="non">
                <label for="symptom9_no">Non</label>
            </div>
            <div class="symptom">
                <label for="symptom10">• Fatigue légère:</label>
                <input type="radio" id="symptom10_yes" name="symptom10" value="oui">
                <label for="symptom10_yes">Oui</label>
                <input type="radio" id="symptom10_no" name="symptom10" value="non">
                <label for="symptom10_no">Non</label>
            </div>
           <br>
           <div class="buttons">
                <button class="cancel" onclick="annuler()">Annuler</button>
                <button class="previous" onclick="retour()">Précédent</button> <!-- Ajout du bouton pour revenir à la page précédente -->
                <button class="next" onclick="suivant()">Suivant</button>
            </div>
        </div>
    </div>
</div>
<script>
    function confirmationAnnuler() {
        if (confirm("Êtes-vous sûr de vouloir annuler ?")) {
            annuler();
        }
    }

    function annuler() {
        sessionStorage.clear();
        window.location.href = "Accueil.php";
    }

    function loadAnswers() {
        let symptoms = ['symptom6', 'symptom7', 'symptom8', 'symptom9', 'symptom10'];
        symptoms.forEach(function(symptom) {
            let value = sessionStorage.getItem(symptom);
            if (value) {
                document.querySelector(`input[name="${symptom}"][value="${value}"]`).checked = true;
            }
        });
    }

    function saveAnswers() {
        let symptoms = ['symptom6', 'symptom7', 'symptom8', 'symptom9', 'symptom10'];
        symptoms.forEach(function(symptom) {
            let selectedOption = document.querySelector(`input[name="${symptom}"]:checked`);
            if (selectedOption) {
                sessionStorage.setItem(symptom, selectedOption.value);
            }
        });
    }

    function suivant() {
        var allAnswered = true;
        var symptoms = document.querySelectorAll('.symptom');
        symptoms.forEach(function(symptom) {
            var radios = symptom.querySelectorAll('input[type="radio"]');
            if (!Array.from(radios).some(radio => radio.checked)) {
                allAnswered = false;
            }
        });

        if (!allAnswered) {
            alert("Veuillez répondre à toutes les questions.");
            return;
        }

        saveAnswers();

        var ouiCount = document.querySelectorAll('input[type="radio"][value="oui"]:checked').length;
        if (ouiCount >= 4) {
            window.location.href = "Rhume_R.php";
        } else {
            window.location.href = "third.php";
        }
    }

    function retour() {
        saveAnswers();
        window.location.href = "first.php";
    }

    window.onload = loadAnswers;
</script>
</body>
</html>
