<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patients</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    .meet-schedule {
      display: none;
      margin-top: 15px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #0050d5; color: white;">
    <h1>Dossiers médicaux</h1>
  </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

    <div class="mb-3 d-flex">
      <a href="consultation.php" class="btn btn-dark me-2">Ajouter</a>
      <a href="http://localhost/aba_doctor/interface_medecins.php" class="btn btn-dark me-2">Annuler</a>
    </div>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nom</th>
          <th scope="col">Email</th>
          <th scope="col">Genre</th>
          <th scope="col">Âge</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `patients`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["first_name"] . " " . $row["last_name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["gender"]; ?></td>
            <td><?php echo $row["age"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td>
               <a href="delete_dossier.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Supprimer</a>
              <div id="scheduleForm-<?php echo $row['id']; ?>" class="meet-schedule">
                <input type="text" class="form-control mb-2" id="meetLink-<?php echo $row['id']; ?>" placeholder="Lien Google Meet">
                <input type="datetime-local" class="form-control mb-2" id="meetDateTime-<?php echo $row['id']; ?>" placeholder="Date et heure">
                <button class="btn btn-secondary" onclick="saveSchedule(<?php echo $row['id']; ?>)">Enregistrer</button>
              </div>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <script>
    function sendDiagnostic(patientId) {
      // AJAX call to send the diagnostic email
      $.ajax({
        url: 'send_diagnostic.php',
        type: 'GET',
        data: { id: patientId },
        success: function(response) {
          const data = JSON.parse(response);
          if (data.error) {
            alert(data.error);
          } else {
            const email = data.email;
            const subject = "Votre diagnostic médical";
            const body = `
              <h3>Bonjour ${data.first_name} ${data.last_name},</h3>
              <p>Voici votre diagnostic médical basé sur les symptômes que vous avez fournis :</p>
              <p><strong>Symptômes:</strong> ${data.symptoms}</p>
              <p><strong>Diagnostic:</strong> [Votre diagnostic ici]</p>
              <p>Merci de nous avoir fait confiance.</p>
              <p>Cordialement,<br>Votre équipe médicale</p>
            `;

            // Utiliser jsEmail pour envoyer l'email
            const jsEmail = new JsEmail({
              publicKey: 'L57-rJ_2PlNJ-l6jU'
            });

            jsEmail.send({
              to: email,
              subject: subject,
              body: body
            }).then(response => {
              alert('Le diagnostic a été envoyé avec succès.');
            }).catch(error => {
              alert('Erreur lors de l\'envoi du diagnostic : ' + error);
            });
          }
        }
      });
    }

    function showScheduleForm(patientId) {
      const scheduleForm = document.getElementById(`scheduleForm-${patientId}`);
      scheduleForm.style.display = scheduleForm.style.display === 'none' || scheduleForm.style.display === '' ? 'block' : 'none';
    }

    function saveSchedule(patientId) {
      const meetLink = document.getElementById(`meetLink-${patientId}`).value;
      const meetDateTime = document.getElementById(`meetDateTime-${patientId}`).value;
      
      if (meetLink && meetDateTime) {
        // Save the meet link and datetime to the server or database
        alert('Consultation Google Meet planifiée avec succès !');
      } else {
        alert('Veuillez remplir les deux champs.');
      }
    }
  </script>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
