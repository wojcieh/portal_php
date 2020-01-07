<?php include('functions.php') ?>
<?php include('header.php') ?>
<section>
<div id="menu">
<?php include('menu.php')?>
</div>
<div id="main">
<?php
$sql = "SELECT Tytul_ART, Tresc_ART FROM wpisy ORDER BY ID_ART DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h2>$row[Tytul_ART]</h2><br>
		<p>$row[Tresc_ART]</p><br>";
    }
} else {
    echo "0 results";
}

?>

</div>

</section>
<?php include('footer.php') ?>