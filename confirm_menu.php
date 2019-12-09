<?php include('functions.php');

$elementy = $_POST["elment"];
$adres = $_POST["adres"];

$sql = "INSERT INTO menu (nazwa, link) VALUES ('$elementy', '$adres')";

if ($conn->query($sql) === TRUE) {
    echo "Dodano nowy elementy menu";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); ?>

<a href="index.php">Powrót do strony głównej</a>