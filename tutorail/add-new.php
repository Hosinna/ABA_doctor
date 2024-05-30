<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password']; 
    $age = $_POST['age']; 

    // Requête SQL avec les nouveaux champs inclus
    $sql = "INSERT INTO `crud`(`first_name`, `last_name`, `email`, `gender`, `password`,  `age`) 
            VALUES ('$first_name','$last_name','$email','$gender','$password',$age)";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=New record created successfully");
        exit();
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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
body {
   background-color: #0050d5;
}

.navbar {
   background-color: #007bff !important;
}

.form-label {
    font-weight: bold;
}

.btn-save {
    background-color: #28a745;
    border: none;
    width: 150px; /* Taille fixe pour les boutons */
}

.btn-cancel {
    background-color: #dc3545;
    border: none;
    width: 150px; /* Taille fixe pour les boutons */
}

.form-box {
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}


</style>
   <title>patient</title>
</head>

<body>
   <br>
    <nav class="navbar navbar-light bg-primary text-white justify-content-center fs-3 mb-5">
    Add A New Patient
    </nav>

    <div class="container">
        

        <div class="container d-flex justify-content-center">
            <div class="form-box"> <!-- Ajout de la classe 'form-box' -->
                <form action="" method="post" style="width:50vw; min-width:300px;">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">First Name:</label>
                            <input type="text" class="form-control" name="first_name" placeholder="Albert" required>
                        </div>
                        <div class="col">
                            <label class="form-label">Last Name:</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Einstein" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
                    </div>
<!-- Ajout de champs pour le mot de passe, la ville et l'âge -->
<div class="row mb-3">
    <div class="col">
        <label class="form-label">Password:</label>
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
                        <label>Gender:</label>
                        &nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="male" value="male" required>
                        <label for="male" class="form-check-label">Male</label>
                        &nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="female" value="female" required>
                        <label for="female" class="form-check-label">Female</label>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="index.php" class="btn btn-danger btn-cancel">Cancel</a>
                        <button type="submit" class="btn btn-success btn-save" name="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>