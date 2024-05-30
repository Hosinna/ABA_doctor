<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des médecins</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel = "stylesheet" href = "css/normalize.css">
    <!-- custom css -->
   
    <link rel = "stylesheet" href = "css/style.css">
</head>
<body>
<br><br><br>
  <div class="container">
    <h1></h1>
    <img src="images/doc-1.png"width="20%">
    
    <div class="doctor">
      <h2>Dr. Aouiche Rabah</h2>
      <p>Spécialité : ORL</p>
      <p>Horaires : Lundi à vendredi, 9h00 - 17h00</p>
      <p>Adresse : Annaba </p>
      <button onclick="takeAppointment('Dr. Jean Dupont')">Prendre rendez-vous</button>
    </div>
</p>

    <!-- Ajoutez d'autres médecins ici -->
  </div>
  <script>
    function takeAppointment(doctorName) {
  const appointmentDate = prompt(`Choisissez une date et heure pour votre rendez-vous avec ${doctorName}:`);

  if (appointmentDate) {
    alert(`Votre rendez-vous avec ${doctorName} est fixé au ${appointmentDate}. Merci !`);
  }
}

  </script>
</body>
</html>