<ul id="menu">
<?php
$sql = "SELECT indeks, link, nazwa FROM menu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<li class=\"menu\"><a href=" . $row["link"]. ">". $row["nazwa"]. "</a></li>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</ul>