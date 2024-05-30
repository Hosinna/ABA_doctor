<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/StyleJdid.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header>
    <main>
        <div class="label_gene">
            <div class="contain">
                <h4>Conditions de l'Application</h4><br>

                <div class="conditions">
                    <p><b>Avant d'utiliser le contrôle veuillez lire les conditions de service et vous souvenir :</b></p><br>
                    <p><b>ABA Doctor n'est pas un diagnostic:</b> C'est seulement pour votre information et non un avis médical qualifié.</p><br>
                    <p><b>ABA Doctor n'est pas pour les urgences:</b> Appelez immédiatement votre numéro d'urgence local en cas d'urgence sanitaire.</p><br>
                    <p><b>Vos données sont en sécurité:</b> Les informations que vous donnez ne seront pas partagées ou utilisées pour vous identifier.</p><br>
                </div>
                
                <div class="accept">
                    <input type="checkbox" id="accepter"> 
                    <label for="accepter">J'accepte les conditions de l'application</label>
                </div>
                <br><br>
                <div class="btn_commancer">
                    <button class="btn btn-light-blue" id="startButton" style="position: absolute; left: 58%;background-color: #4070f4;">Commencer</button>
                    <button class="btn btn-light-blue" id="cancelButton" style="width: 160px;text-align: center;background-color: #4070f4;">Annuler</button>
                </div>
            </div>
        </div>
    </main>
</header>

<script>
    document.getElementById('startButton').addEventListener('click', function() {
        if (document.getElementById('accepter').checked) {
            window.location.href = 'first.php';
        } else {
            alert("Vous devez accepter les conditions de l'application avant de continuer.");
        }
    });

    document.getElementById('cancelButton').addEventListener('click', function() {
        window.location.href = 'Accueil.php';
    });
</script>
</body>
</html>
