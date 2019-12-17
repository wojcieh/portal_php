<?php include('functions.php') ?>
<?php include('header.php') ?>
<section>
<div id="menu">
<?php include('menu.php')?>
</div>
<?php

$date = $_POST["date"];
$tytul = $_POST["tytul"];
$tresc = htmlspecialchars($_POST["tresc"]);

$sql = "INSERT INTO wpisy (Tytul_ART, Tresc_ART, Data_ART) VALUES ('$tytul', '$tresc', '$date')";


if ($conn->query($sql) === TRUE) {
    echo "Dodano nowy elementy menu";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

</section>
<?php include('footer.php') ?>