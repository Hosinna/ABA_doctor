

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
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
            max-width: 500px;
            width: 100%;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin: 0 20px;
        }

        .container .title {
            font-size: 27px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .container .input-field {
            position: relative;
            height: 50px;
            width: 100%;
            margin-top: 20px;
        }

        .input-field input, .input-field select {
            position: absolute;
            height: 100%;
            width: 100%;
            padding: 0 15px;
            border: 2px solid #ccc;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            transition: all 0.2s ease;
        }

        .input-field input:is(:focus, :valid), .input-field select:is(:focus, :valid) {
            border-color: #4070f4;
        }

        .container .button {
            margin-top: 30px;
        }

        .container .button input {
            border: none;
            color: #fff;
            font-size: 17px;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 6px;
            background-color: #4070f4;
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 15px;
            width: 100%;
        }

        .container .button input:hover {
            background-color: #265df2;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="title">Registration Form</div>
        <form action="#" method="POST">
            <div class="input-field">
                <input type="text" name="nom" placeholder="Nom" required>
            </div>
            <div class="input-field">
                <input type="text" name="prenom" placeholder="Prénom" required>
            </div>
            <div class="input-field">
                <input type="number" name="age" placeholder="Âge" required>
            </div>
            <div class="input-field">
                <select name="sexe" required>
                    <option value="" disabled selected>Sexe</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="input-field">
                <input type="text" name="ville" placeholder="Ville" required>
            </div>
            <div class="input-field">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-field">
                <input type="password" name="mtps" placeholder="Mot de passe" required>
            </div>
            <div class="button">
                <input type="submit" value="S'inscrire">
            </div>
        </form>
    </div>
</body>
</html>
