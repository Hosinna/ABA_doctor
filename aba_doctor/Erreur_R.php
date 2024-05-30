<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur R - Résultats du Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0050d5;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #e74c3c;
        }
        p {
            font-size: 18px;
            margin: 20px 0;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 10px 0 10px;
            font-size: 16px;
            color: #fff;
            background-color: #3498db;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #2980b9;
        }
        .form-container {
            display: none;
            text-align: left;
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Erreur_R</h1>
        <p>Vous avez validé le test, mais aucun résultat n'a été affiché.</p>
        <p>Nous vous recommandons de consulter un médecin pour obtenir plus d'informations et une assistance supplémentaire.</p>
        <a href="Accueil.php" class="btn">Annuler</a>
        <a href="http://localhost/tutorail/consultation.php" class="btn">Consulter Notre médecin</a>
        <button class="btn" onclick="showForm()">Rendez-vous</button>

        <div class="form-container" id="appointmentForm">
            <div class="form-group">
                <label for="fullName">Nom Complet:</label>
                <input type="text" id="fullName" placeholder="Entrez votre nom complet">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Entrez votre email">
            </div>
            <div class="form-group">
                <label for="appointmentDate">Date et Heure:</label>
                <input type="datetime-local" id="appointmentDate">
            </div>
            <div class="form-group">
                <label for="doctor">Choisir le Médecin:</label>
                <select id="doctor">
                    <option value="drsmith">Dr. Smith</option>
                    <option value="drjones">Dr. Jones</option>
                    <option value="drbrown">Dr. Brown</option>
                </select>
            </div>
            <div class="form-group">
                <label for="specialty">Spécialité:</label>
                <select id="specialty">
                    <option value="cardiology">Cardiologie</option>
                    <option value="neurology">Neurologie</option>
                    <option value="orthopedics">Orthopédie</option>
                </select>
            </div>
            <button class="btn" onclick="submitAppointment()">Soumettre</button>
        </div>
    </div>

    <script>
        function showForm() {
            var form = document.getElementById('appointmentForm');
            if (form.style.display === 'none' || form.style.display === '') {
                form.style.display = 'block';
            } else {
                form.style.display = 'none';
            }
        }

        function submitAppointment() {
            var fullName = document.getElementById('fullName').value;
            var email = document.getElementById('email').value;
            var appointmentDate = document.getElementById('appointmentDate').value;
            var doctor = document.getElementById('doctor').value;
            var specialty = document.getElementById('specialty').value;

            if (fullName && email && appointmentDate && doctor && specialty) {
                alert('Rendez-vous soumis avec succès!');
                // You can add AJAX code here to submit the form data to the server if needed
            } else {
                alert('Veuillez remplir tous les champs.');
            }
        }
    </script>
</body>
</html>
