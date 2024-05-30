<?php
include "db_conn.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Récupérer les informations du patient depuis la base de données
    $sql = "SELECT * FROM `patients` WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $data = [
            'first_name' => $row['first_name'],
            'last_name' => $row['last_name'],
            'email' => $row['email'],
            'symptoms' => $row['symptoms'],
            'created_at' => $row['created_at']
        ];
        echo json_encode($data);
    } else {
        echo json_encode(['error' => 'Aucun patient trouvé avec cet ID.']);
    }
} else {
    echo json_encode(['error' => 'ID du patient manquant.']);
}
?>
