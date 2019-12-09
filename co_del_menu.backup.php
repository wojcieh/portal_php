 
 <?php include('functions.php');
include('header.php');?>

<h3>Który elementy skasować?</h3>
<hr>


<?php
$sql = "SELECT indeks, link, nazwa FROM menu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<li class=\"menu\"><a href=del_menu.php?coskasowac=" . $row["link"]. ">". $row["nazwa"]. "</a></li>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>



	

</body>
</html> 