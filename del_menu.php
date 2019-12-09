<?php include('functions.php');

$cosksowac = $_POST["coskasowac"];

$sql = "DELETE FROM menu WHERE link = '$cosksowac'";

if ($conn->query($sql) === TRUE) {
    echo "Usunięto element menu";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); ?>

<a href="index.php">Powrót do strony głównej</a>