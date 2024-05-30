<?php
include "db_conn.php";

// Définir une variable pour stocker le message
$message = "";

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturer les données du formulaire
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $age = $_POST['age']; // Capturer l'âge

    // Requête SQL pour insérer un nouveau médecin
    $sql = "INSERT INTO `médecins` (`first_name`, `last_name`, `email`, `gender`, `password`, `age`) VALUES (?, ?, ?, ?, ?, ?)";

    // Préparation de la requête
    $stmt = $conn->prepare($sql);

    // Vérification de la préparation de la requête
    if ($stmt === false) {
        $message = 'Erreur de préparation de la requête';
    } else {
        // Liaison des paramètres
        $stmt->bind_param("sssssi", $first_name, $last_name, $email, $gender, $password, $age);

        // Exécution de la requête
        if ($stmt->execute()) {
            $message = "Nouvel enregistrement créé avec succès";
        } else {
            $message = "Erreur : " . $conn->error;
        }
    }

    // Fermeture du statement
    $stmt->close();
}

// Fermeture de la connexion
$conn->close();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Tutoriel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #0050d5;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }
        .card-title {
            font-size: 20px;
            font-weight: 600;
            text-align: center;
            padding: 10px 0;
        }
        .card-body {
            padding: 15px;
        }
        .form-floating label {
            color: #333;
        }
        .form-control {
            border-radius: 20px;
            border-color: #ccc;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 20px;
            padding: 8px 15px;
            font-weight: 600;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .small {
            color: #333;
            font-size: 14px;
        }
        .small a {
            color: #007bff;
            text-decoration: none;
        }
        .small a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Créer un Compte</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST">
                            <!-- Ajoutez votre formulaire ici -->
                            <?php if (!empty($message)) : ?>
                                <div class="alert alert-<?php echo strpos($message, 'Erreur') !== false ? 'danger' : 'success'; ?> alert-dismissible fade show" role="alert">
                                    <?php echo $message; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputFirstName" name="first_name" type="text" placeholder="Votre prénom" required />
                                        <label for="inputFirstName">Prénom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputLastName" name="last_name" type="text" placeholder="Votre nom" required />
                                        <label for="inputLastName">Nom</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-2">
                                <input class="form-control" id="inputEmail" name="email" type="email" placeholder="name@example.com" required />
                                <label for="inputEmail">Adresse Email</label>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Choisir un mot de passe" required />
                                        <label for="inputPassword">Mot de passe</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="inputGender" name="gender" aria-label="Gender" required>
                                            <option value="male">Homme</option>
                                            <option value="female">Femme</option>
                                        </select>
                                        <label for="inputGender">Sexe</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-2">
                                <input class="form-control" id="inputAge" name="age" type="number" placeholder="Votre âge" required />
                                <label for="inputAge">Âge</label>
                            </div>
                            <div class="mt-3 mb-0">
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-block" type="submit">Créer un Compte</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-2">
                        <div class="small">
                            <a href="Log_in_m.php">Vous avez déjà un compte? Connectez-vous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
