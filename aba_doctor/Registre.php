<?php

$nom_serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$nom_base_donnees = "aba_doctor";
$conn = new mysqli($nom_serveur, $utilisateur, $mot_de_passe, $nom_base_donnees);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connect successfully";

if (isset($_POST['submit'])) {

    // Vérifier si le formulaire est soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $Email_patient = $_POST['Email_patient'];
        $mtps_patient = $_POST['mtps_patient'];
        $confirm_password = $_POST['confirm_password'];
        $Nom_patient = $_POST['Nom_patient'];
        $Prenom_patient = $_POST['Prenom_patient'];
        $Sexe = $_POST['Sexe'];
        $Ville = $_POST['Ville'];

        // Vérifier que le mot de passe et la confirmation sont identiques
        if ($mtps_patient !== $confirm_password) {
            die("Les mots de passe ne correspondent pas.");
        }

        // Hacher le mot de passe pour le stockage
        $hashed_password = password_hash($mtps_patient, PASSWORD_DEFAULT);

        // Préparer la requête d'insertion
        $sql =" INSERT INTO `patient`(`Id_patient`, `Nom_patient`, `Prenom_patient`, `Age`, `Sexe`, `Ville`, `Email_patient`, `mtps_patient`) VALUES ('NULL' ,'$Nom_patient', '$Prenom_patient', '$Sexe', '$Ville', '$Email_patient', '$mtps_patient')";
       
         $result = mysqli_query($conn, $sql);
           if ($result) {
              header("Location: index.php?msg=New record created successfully");
            } else {
                 echo "Failed: " . mysqli_error($conn);
   }
    }
}

// Fermer la connexion
$conn->close();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABA Doctor</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->

<style>


body {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	background: #4070f4;
}
.clearfix {
	&:after {
		content: "";
		display: block;
		clear: both;
		visibility: hidden;
		height: 0;
	}
}
.form_wrapper {
	background: #fff;
	width: 400px;
	max-width: 100%;
	box-sizing: border-box;
	padding: 25px;
	margin: 4% auto 0;
	position: relative;
	z-index: 1;
	border-top: 5px solid#4070f4;
	-webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
	-moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
	box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
    -webkit-transform-origin: 50% 0%;
    transform-origin: 50% 0%;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
    -webkit-transition: none;
    transition: none;
    -webkit-animation: expand 0.8s 0.6s ease-out forwards;
    animation: expand 0.8s 0.6s ease-out forwards;
    opacity: 0;}

	h2 {
		font-size: 1.5em;
		line-height: 1.5em;
		margin: 0;
	}
	.title_container {
		text-align: center;
		padding-bottom: 15px;
	}
	h3 {
		font-size: 1.1em;
		font-weight: normal;
		line-height: 1.5em;
		margin: 0;
	}
    label {
        font-size: 12px;
    }
	.row {
		margin: 10px -15px;
		>div {
			padding: 0 15px;
			box-sizing: border-box;
		}
	}
	.col_half {
		width: 50%;
		float: left;
	}
	.input_field {
		position: relative;
		margin-bottom: 20px;
        -webkit-animation: bounce 0.6s ease-out;
  	     animation: bounce 0.6s ease-out;
		>span {
			position: absolute;
			left: 0;
			top: 0;
			color: #333;
			height: 100%;
			border-right: 1px solid grey;
			text-align: center;
			width: 30px;
			>i {
				padding-top: 10px;
			}
		}
	}
	.textarea_field {
		>span {
			>i {
				padding-top: 10px;
			}
		}
	}
	input {
    &[type="text"], &[type="email"], &[type="password"] {
      width: 100%;
      padding: 8px 10px 9px 35px;
      height: 35px;
      border: 1px solid grey;
      box-sizing: border-box;
      outline: none;
      -webkit-transition: all 0.30s ease-in-out;
      -moz-transition: all 0.30s ease-in-out;
      -ms-transition: all 0.30s ease-in-out;
      transition: all 0.30s ease-in-out;
    }
    &[type="text"]:hover, &[type="email"]:hover, &[type="password"]:hover {
      background: #fafafa;
    }
    &[type="text"]:focus, &[type="email"]:focus, &[type="password"]:focus {
      -webkit-box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
      -moz-box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
      box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
      border: 1px solid #4070f4;
      background: #fafafa;
    }
    &[type="submit"] {
		background: #4070f4;
		height: 35px;
		line-height: 35px;
		width: 100%;
		border: none;
		outline: none;
		cursor: pointer;
		color: #fff;
		font-size: 1.1em;
		margin-bottom: 10px;
		-webkit-transition: all 0.30s ease-in-out;
		-moz-transition: all 0.30s ease-in-out;
		-ms-transition: all 0.30s ease-in-out;
		transition: all 0.30s ease-in-out;
		:hover {
			background-color: darken(#4070f4,7%);
		}
		&:focus {
			background: darken(#4070f4,7%);
		}
	}    
    &[type="checkbox"], &[type="radio"] {
      border: 0;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px;
    }
  }

.form_container {
	.row {
		.col_half.last {
			border-left: 1px solid grey;
		}
	}
}
.checkbox_option{
       >label {
        margin-right: 1em;
        position: relative;
        &:before {
          content: "";
          display: inline-block;
          width: 0.5em;
          height: 0.5em;
          margin-right: 0.5em;
          vertical-align: -2px;
          border: 2px solid grey;
          padding: 0.12em;
          background-color: transparent;
          background-clip: content-box;
          transition: all 0.2s ease;
        }
        &:after {
          border-right: 2px solid black;
          border-top: 2px solid black;
          content: "";
          height: 20px;
          left: 2px;
          position: absolute;
          top: 7px;
          transform: scaleX(-1) rotate(135deg);
          transform-origin: left top;
          width: 7px;
          display: none;
        }
    }
    >input {
    &:hover + label:before {
      border-color: black;
    }
    &:checked + label {
      &:before {
        border-color:black;
      }
      &:after {
        -moz-animation: check 0.8s ease 0s running;
        -webkit-animation: check 0.8s ease 0s running;
        animation: check 0.8s ease 0s running;
        display: block;
        width: 7px;
        height: 20px;
        border-color: black;
      }
    }
  }
}
.radio_option {
  >label {
      margin-right: 1em;
    &:before {
      content: "";
      display: inline-block;
      width: 0.5em;
      height: 0.5em;
      margin-right: 0.5em;
      border-radius: 100%;
      vertical-align: -3px;
      border: 2px solid grey;
      padding: 0.15em;
      background-color: transparent;
      background-clip: content-box;
      transition: all 0.2s ease;
    }
  }
  >input {
    &:hover + label:before {
      border-color: black;
    }
    &:checked + label:before {
      background-color: black;
      border-color: black;
    }
  }
}
.select_option {
  position: relative;
  width: 100%;
  >select {
    display: relative;
    width: 100%;
    height: 35px;
    padding: 0px 15px;
    cursor: pointer;
    color: #7b7b7b;
    border: 1px solid grey;
    border-radius: 0;
    background: #fff;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    transition: all 0.2s ease;
    &::-ms-expand {
      display: none;
    }
    &:hover, &:focus {
      color: black;
      background: #fafafa;
      border-color: black;
      outline: none;
    }
  }
}
.select_arrow {
  position: absolute;
  top: calc(50% - 4px);
  right: 15px;
  width: 0;
  height: 0;
  pointer-events: none;
  border-width: 8px 5px 0 5px;
  border-style: solid;
  border-color: #7b7b7b transparent transparent transparent;
}

.select_option select {
  &:hover + .select_arrow, &:focus + .select_arrow {
    border-top-color: black;
  }
}
.credit {
	position: relative;
	z-index: 1;
	text-align: center;
	padding: 15px;
	color: #4070f4;
>a {
		color: darken(#4070f4,7%);
	}
}
@-webkit-keyframes check {
  0% { height: 0; width: 0; }
  25% { height: 0; width: 7px; }
  50% { height: 20px; width: 7px; }
}

@keyframes check {
  0% { height: 0; width: 0; }
  25% { height: 0; width: 7px; }
  50% { height: 20px; width: 7px; }
}

@-webkit-keyframes expand { 
	0% { -webkit-transform: scale3d(1,0,1); opacity:0; }
	25% { -webkit-transform: scale3d(1,1.2,1); }
	50% { -webkit-transform: scale3d(1,0.85,1); }
	75% { -webkit-transform: scale3d(1,1.05,1); }
	100% { -webkit-transform: scale3d(1,1,1);  opacity:1; }
}

@keyframes expand { 
	0% { -webkit-transform: scale3d(1,0,1); transform: scale3d(1,0,1);  opacity:0; }
	25% { -webkit-transform: scale3d(1,1.2,1); transform: scale3d(1,1.2,1); }
	50% { -webkit-transform: scale3d(1,0.85,1); transform: scale3d(1,0.85,1); }
	75% { -webkit-transform: scale3d(1,1.05,1); transform: scale3d(1,1.05,1); }
	100% { -webkit-transform: scale3d(1,1,1); transform: scale3d(1,1,1);  opacity:1; }
}


@-webkit-keyframes bounce { 
	0% { -webkit-transform: translate3d(0,-25px,0); opacity:0; }
	25% { -webkit-transform: translate3d(0,10px,0); }
	50% { -webkit-transform: translate3d(0,-6px,0); }
	75% { -webkit-transform: translate3d(0,2px,0); }
	100% { -webkit-transform: translate3d(0,0,0); opacity: 1; }
}

@keyframes bounce { 
	0% { -webkit-transform: translate3d(0,-25px,0); transform: translate3d(0,-25px,0); opacity:0; }
	25% { -webkit-transform: translate3d(0,10px,0); transform: translate3d(0,10px,0); }
	50% { -webkit-transform: translate3d(0,-6px,0); transform: translate3d(0,-6px,0); }
	75% { -webkit-transform: translate3d(0,2px,0); transform: translate3d(0,2px,0); }
	100% { -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0); opacity: 1; }
}
@media (max-width: 600px) {
	.form_wrapper {
		.col_half {
			width: 100%;
			float: none;
		}
	}
	.bottom_row {
		.col_half {
			width: 50%;
			float: left;
		}
	}
	.form_container {
		.row {
			.col_half.last {
				border-left: none;
			}
		}
	}
	.remember_me {
		padding-bottom: 20px;
	}
} </style>
</head>
<body>
<div class="form_wrapper">
    <div class="form_container">
        <div class="title_container">
            <h2>Formulaire d'inscription</h2>
        </div>
        <div class="row clearfix">
            <div class="">
                <form id="registrationForm" action="save_patient.php" method="POST">
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                        <input type="email" name="Email_patient" id="Email_patient" placeholder="Email" required />
                    </div>
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                        <input type="password" name="mtps_patient" id="mtps_patient" placeholder="Mot de passe" required />
                    </div>
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirmez le mot de passe" required />
                    </div>
                    <div class="row clearfix">
                        <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                <input type="text" name="Nom_patient" id="Nom_patient" placeholder="Nom" required />
                            </div>
                        </div>
                        <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                <input type="text" name="Prenom_patient" id="Prenom_patient" placeholder="Prenom" required />
                            </div>
                        </div>
                    </div>
                    <div class="input_field radio_option">
                        <input type="radio" name="Sexe" id="rd1" value="Homme" required>
                        <label for="rd1">Homme</label>
                        <input type="radio" name="Sexe" id="rd2" value="Femme" required>
                        <label for="rd2">Femme</label>
                    </div>
                    <div class="input_field select_option">
                        <select name="Ville" required>
                            <option value="">Sélectionnez une ville</option>
                            <option>Adrar</option>
                            <option>Chlef</option>
                            <!-- Add other cities here -->
                        </select>
                        <div class="select_arrow"></div>
                    </div>
                    <div class="input_field checkbox_option">
                        <input type="checkbox" id="cb1" required>
                        <label for="cb1">J'accepte les termes et conditions</label>
                        <a href="condition.html">Lire Plus</a>
                    </div>
                    
                    <div class="button">
                        <input class="button" type="submit" value="Register" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
 <!--<script>
document.getElementById("registrationForm").addEventListener("submit", function(event) {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;

    if (password !== confirmPassword) {
        alert("Les mots de passe ne correspondent pas.");
        event.preventDefault();
    }
});
</script>-->
</body>
</html>