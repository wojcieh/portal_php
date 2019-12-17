<?php include('functions.php') ?>
<?php include('header.php') ?>
<section>
<div id="menu">
<?php include('menu.php')?>
</div>
<div id="main">
<h1>Dodaj wpis</h1>
 <form action="dodano_wpis.php" method="POST" id="formularz">
 <input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>">
  <input type="text" name="tytul" value="Tytul"><br>
    <br>
  <textarea rows="10" cols="100" name="tresc" form="formularz">
Wpisz treść wpisu....</textarea><br>
<input type="submit" value="Submit" id="wyslij">
</form> 
</div>

</section>
<?php include('footer.php') ?>