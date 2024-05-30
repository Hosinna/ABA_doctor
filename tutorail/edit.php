<?php
include "db_conn.php";
$id = $_GET["id"];

// Fetch the current values for the user
$sql = "SELECT * FROM `crud` WHERE `id` = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST["submit"])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $password = $_POST['password']; 
  $age = $_POST['age']; 

  // Ensure the query syntax is correct
  $sql = "UPDATE `crud` SET 
            `first_name` = '$first_name',
            `last_name` = '$last_name',
            `email` = '$email',
            `gender` = '$gender',
            `password` = '$password',
            `age` = '$age'
          WHERE `id` = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Edit User</title>
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
            width: 150px;
        }

        .btn-cancel {
            background-color: #dc3545;
            border: none;
            width: 150px;
        }

        .form-box {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        .form-control {
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .d-flex.justify-content-between {
            gap: 2px;
        }
    </style>
</head>

<body>
  <br>
    <nav class="navbar navbar-light bg-primary text-white justify-content-center fs-3 mb-5">
    Patient Update
    </nav>

    <div class="container">
        <div class="container d-flex justify-content-center">
            <div class="form-box">
                <form action="" method="post" style="width:50vw; min-width:300px;">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">First Name:</label>
                            <input type="text" class="form-control" name="first_name" placeholder="Albert" value="<?php echo $row['first_name']; ?>" required>
                        </div>
                        <div class="col">
                            <label class="form-label">Last Name:</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Einstein" value="<?php echo $row['last_name']; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="name@example.com" value="<?php echo $row['email']; ?>" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Password:</label>
                            <input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>" required>
                        </div>
                        <div class="col">
                            <label class="form-label">Age:</label>
                            <input type="number" class="form-control" name="age" placeholder="Age" value="<?php echo $row['age']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label><b>Gender:</b></label>
                        <div>
                            <input type="radio" class="form-check-input" name="gender" id="male" value="male" <?php echo ($row['gender'] == 'male') ? 'checked' : ''; ?> required>
                            <label for="male" class="form-check-label">Male</label>
                            <input type="radio" class="form-check-input" name="gender" id="female" value="female" <?php echo ($row['gender'] == 'female') ? 'checked' : ''; ?> required>
                            <label for="female" class="form-check-label">Female</label>
                        </div>
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
