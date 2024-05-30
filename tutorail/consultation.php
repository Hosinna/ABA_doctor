<?php
session_start();
include "db_conn.php";

if (isset($_POST["submit"])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $symptoms = $_POST['symptoms'];
    $chronic_disease = $_POST['chronic_disease'];

    // Requête SQL avec les nouveaux champs inclus
    $sql = "INSERT INTO `patients`(`first_name`, `last_name`, `email`, `gender`, `password`, `age`, `phone`, `symptoms`, `chronic_disease`, `created_at`) 
            VALUES ('$first_name','$last_name','$email','$gender','$password',$age, '$phone', '$symptoms', '$chronic_disease', NOW())";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $_SESSION['success_message'] = "Message envoyé avec succès";
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            background-color: #0050d5;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .form-box {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        .form-img {
            max-width: 100%;
            border-radius: 10px;
            margin-left: 20px;
        }

        .form-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .form-content {
            flex: 1;
        }

        @media (max-width: 768px) {
            .form-wrapper {
                flex-direction: column;
                align-items: center;
            }

            .form-img {
                margin-bottom: 20px;
                margin-right: 0;
            }
        }
    </style>

    <title>Patient</title>
</head>

<body>
    <br>
    <nav class="navbar navbar-light bg-primary text-white justify-content-center fs-3 mb-5">
        Formulaire du Consultation en ligne
    </nav>

    <div class="container form-container">
        <div class="form-box">
            <?php
            if (isset($_SESSION['success_message'])) {
                echo '<div class="alert alert-success" role="alert">' . $_SESSION['success_message'] . '</div>';
                unset($_SESSION['success_message']); // Clear the message after displaying it
            }
            ?>
            <div class="form-wrapper">
                <div class="form-content">
                    <form action="" method="post">
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Nom:</label>
                                <input type="text" class="form-control" name="first_name" placeholder="Albert" required>
                            </div>
                            <div class="col">
                                <label class="form-label">Prenom:</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Einstein" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email:</label>
                            <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Mote de passe :</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Age:</label>
                                <input type="number" class="form-control" name="age" placeholder="Age" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Sexe:</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="gender" id="male" value="male" required>
                            <label for="male" class="form-check-label">Homme</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="gender" id="female" value="female" required>
                            <label for="female" class="form-check-label">Femme</label>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Téléphone:</label>
                                <input type="text" class="form-control" name="phone" placeholder="Numéro de téléphone" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Symptômes:</label>
                            <textarea class="form-control" name="symptoms" placeholder="Décrivez les symptômes ici..."
                                required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Maladie Chronique:</label>
                            <textarea class="form-control" name="chronic_disease"
                                placeholder="Décrivez la maladie chronique ici..." required></textarea>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="http://localhost/aba_doctor/Erreur_R.php" class="btn btn-danger btn-cancel">Annuler</a>
                            <button type="submit" class="btn btn-success btn-save" name="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><img src="images/dayergauche (1).png" alt="Patient Image" class="form-img">
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'fr',
                selectable: true,
                select: function (info) {
                    document.getElementById('date').value = info.startStr; // Set selected date in input field
                },
                validRange: {
                    start: '2024-05-01', // Date à partir de laquelle les dates sont disponibles
                    end: '2024-05-31' // Date jusqu'à laquelle les dates sont disponibles
                },
                dayMaxEventRows: true,
                businessHours: {
                    daysOfWeek: [1, 2, 4], // Jours disponibles (1 = Lundi, 2 = Mardi, 4 = Jeudi)
                    startTime: '08:00', // Heure de début
                    endTime: '17:00' // Heure de fin
                }
            });
            calendar.render();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
