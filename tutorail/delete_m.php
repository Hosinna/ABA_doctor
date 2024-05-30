<?php
include "db_conn_m.php";
$id = $_GET["id"];
$sql = "DELETE FROM `médecins` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index_m.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
