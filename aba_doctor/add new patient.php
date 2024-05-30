<?php


include "db_regist.php";


$sql = "SELECT * FROM patients";
$result = $conn->query($sql);

$patients = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $patients[] = $row;
    }
}

echo json_encode($patients);

$conn->close();
?>
