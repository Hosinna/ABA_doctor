<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Patients</title>
</head>

<body>
  <br>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style=" background-color: #0050d5;color:white;"><br>
    <h1>Dossiers medicaux<h1>
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
      <a href="http://localhost/aba_doctor/Interface_Admin.php" class="btn btn-dark me-2">Annuler</a>
    </div>

    <?php
    $sql = "SELECT * FROM `patients`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="images/profile_patient.png" class="img-fluid rounded-start" alt="Profile Photo" style="max-width: 150px; max-height: 150px;">
            <h4 class="card-title"><strong>  <?php echo $row["first_name"] . " " . $row["last_name"]; ?></strong></h4> 
        </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title"><strong><?php echo $row["first_name"] . " " . $row["last_name"]; ?></strong></h5>
              <p class="card-text"><strong>Age:</strong> <?php echo $row["age"]; ?></p>
              <p class="card-text"><strong>Sexe:</strong> <?php echo $row["gender"]; ?></p>
              <p class="card-text"><strong>Email:</strong> <?php echo $row["email"]; ?></p>
             
              <p class="card-text"><strong>Symptomes:</strong> <?php echo $row["symptoms"]; ?></p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card-body">
              <p class="card-text"><strong>Crée à :</strong> <?php echo $row["created_at"]; ?></p><br>
              <button onclick="sendDiagnostic(<?php echo $row['id']; ?>)" class="btn btn-success me-2"><i class="fa-solid fa-paper-plane"></i> Envoyer le diagnostic</button><br>
             <br><a href="delete_dossier.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Supprimer</a>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
  <script>
    function sendDiagnostic(patientId) {
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
    }</script>
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
