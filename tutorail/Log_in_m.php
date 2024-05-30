<?php
include "db_conn.php";

// Définir une variable pour stocker le message d'erreur
$error_message = "";

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturer les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Requête SQL pour vérifier les informations de connexion
    $sql = "SELECT * FROM `médecins` WHERE `email` = ?";
    
    // Préparation de la requête
    $stmt = $conn->prepare($sql);

    // Vérification de la préparation de la requête
    if ($stmt === false) {
        $error_message = 'Erreur de préparation de la requête';
    } else {
        // Liaison des paramètres
        $stmt->bind_param("s", $email);

        // Exécution de la requête
        $stmt->execute();

        // Récupération des résultats
        $result = $stmt->get_result();

        // Vérification si l'utilisateur existe
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Comparaison du mot de passe soumis avec le mot de passe stocké dans la base de données
            if ($password === $row['password']) {
                // Redirection vers la page appropriée
                if ($email === 'linaalim13@gmail.com' && $password === 'aba_doctor_gen') {
                    header("Location: http://localhost/aba_doctor/interface_medecins.php");
                } else {
                    header("Location: http://localhost/aba_doctor/profile_medecins.php");
                }
                exit(); // Assure que le script se termine ici pour éviter tout autre traitement
            } else {
                $error_message = "Mot de passe incorrect";
            }
        } else {
            $error_message = "Adresse email incorrecte";
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Style CSS */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #0050d5;
        }

        .container {
            position: relative;
            max-width: 430px;
            width: 100%;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin: 0 20px;
        }

        .container .forms {
            display: flex;
            align-items: center;
            height: 440px;
            width: 200%;
            transition: height 0.2s ease;
        }

        .container .form {
            width: 50%;
            padding: 30px;
            background-color: #fff;
            transition: margin-left 0.18s ease;
        }

        .container.active .login {
            margin-left: -50%;
            opacity: 0;
            transition: margin-left 0.18s ease, opacity 0.15s ease;
        }

        .container .signup {
            opacity: 0;
            transition: opacity 0.09s ease;
        }

        .container.active .signup {
            opacity: 1;
            transition: opacity 0.2s ease;
        }

        .container.active .forms {
            height: 600px;
        }

        .container .form .title {
            position: relative;
            font-size: 27px;
            font-weight: 600;
        }

        .form .title::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            background-color: #16c5ff;
            border-radius: 25px;
        }

        .form .input-field {
            position: relative;
            height: 50px;
            width: 100%;
            margin-top: 30px;
        }

        .input-field input {
            position: absolute;
            height: 100%;
            width: 100%;
            padding: 0 35px;
            border: none;
            outline: none;
            font-size: 16px;
            border-bottom: 2px solid #ccc;
            border-top: 2px solid transparent;
            transition: all 0.2s ease;
        }

        .input-field input:is(:focus, :valid) {
            border-bottom-color: #4070f4;
        }

        .input-field i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 23px;
            transition: all 0.2s ease;
        }

        .input-field input:is(:focus, :valid) ~ i {
            color: #4070f4;
        }

        .input-field i.icon {
            left: 0;
        }

        .input-field i.showHidePw {
            right: 0;
            cursor: pointer;
            padding: 10px;
        }

        .form .checkbox-text {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
        }

        .checkbox-text .checkbox-content {
            display: flex;
            align-items: center;
        }

        .checkbox-content input {
            margin-right: 10px;
            accent-color: #4070f4;
        }

        .form .text {
            color: #333;
            font-size: 14px;
        }

        .form a.text {
            color: #4070f4;
            text-decoration: none;
        }

        .form a:hover {
            text-decoration: underline;
        }

        .form .button {
            margin-top: 35px;
        }

        .form .button input {
            border: none;
            color: #fff;
            font-size: 17px;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 6px;
            background-color: #4070f4;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .button input:hover {
            background-color: #265df2;
        }

        .form .login-signup {
            margin-top: 30px;
            text-align: center;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }

    </style>

    <title>Login médecins</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="forms">
                <div class="form login">
                    <span class="title">Se Connecter</span>

                    <form id="loginForm" action="#" method="POST" onsubmit="return validateForm()">
                        <div class="input-field">
                            <input type="text" id="email" name="email" placeholder="Email" required>
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" id="password" name="password" class="password" placeholder="Mot de passe" required>
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="logCheck" name="remember">
                                <label for="logCheck" class="text">Souviens-toi de moi</label>
                            </div>

                            <a href="#" class="text">Mot de passe oublié?</a>
                        </div>

                        <div class="input-field button">
                            <input type="submit" value="Login">
                        </div>

                        <div id="errorMessage" class="error-message">
                            <?php echo $error_message; ?>
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">Pas un membre?
                            <a href="register_m.php" class="text signup-link">S'inscrire maintenant</a>
                        </span>
                    </div>
                </div>
                <div id="image-container">
            <img src="images/dayergauche (1).png" alt="Médecin" style="max-width: 100%;">
        </div>
            </div>
        </div>
    </section>

    <script>
    // Afficher/Masquer le mot de passe
    const pwShowHide = document.querySelectorAll(".showHidePw"),
          pwFields = document.querySelectorAll(".password");

    pwShowHide.forEach(eyeIcon => {
        eyeIcon.addEventListener("click", () => {
            pwFields.forEach(pwField => {
                if (pwField.type === "password") {
                    pwField.type = "text";
                    pwShowHide.forEach(icon => {
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    })
                } else {
                    pwField.type = "password";
                    pwShowHide.forEach(icon => {
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    })
                }
            })
        })
    })

    // Validation côté client
    function validateForm() {
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const errorMessage = document.getElementById("errorMessage");

        if (email === "" || password === "") {
            errorMessage.textContent = "Veuillez remplir tous les champs.";
            return false;
        }

        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
            errorMessage.textContent = "Veuillez entrer une adresse email valide.";
            return false;
        }

        return true;
    }
</script>

</body>
</html>
