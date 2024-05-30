<?php
include "db_conn.php";
session_start();

if (!isset($_SESSION["id"])) {
    die("Erreur : ID utilisateur non défini dans la session.");
}

$id = $_SESSION["id"];
$nom = $_POST["nom"] ?? null;
$email = $_POST["email"] ?? null;
$numtelf = $_POST["numtelf"] ?? null;
$symptomes = $_POST["symptomes"] ?? null;
$date = $_POST["date"] ?? null;
$infos = $_POST["infos"] ?? null;

if (!$nom || !$email || !$numtelf || !$symptomes || !$date || !$infos) {
    die("Erreur : Toutes les données du formulaire ne sont pas présentes.");
}

// Préparer une déclaration d'insertion
$sql = "INSERT INTO `rendez_vous`(`id_R`, `id`, `nom`, `email`, `numtelf`, `symptomes`, `date_rdv`, `autres_informations`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)";
if ($stmt = mysqli_prepare($link, $sql)) {
    mysqli_stmt_bind_param($stmt, "issssss", $id, $nom, $email, $numtelf, $symptomes, $date, $infos);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: success.php");
        exit();
    } else {
        echo "Quelque chose a mal tourné. Veuillez réessayer plus tard.";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Erreur : Impossible de préparer la déclaration SQL.";
}

mysqli_close($link);
?>
