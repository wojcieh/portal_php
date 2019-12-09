<?php include('functions.php') ?>
<?php include('header.php') ?>
<section>
<div id="menu">
<?php include('menu.php')?>
</div>
<div id="main">
<h1>Dodaj wpis</h1>
 <form action="dodano_wpis.php" method="post">
 <input type="hidden" name="date" value="<?php DATE(Ymd); ?>">
  <input type="text" name="tytul" value="Tytuł"><br>
  
  <br>
  <textarea rows="10" cols="100" name="tresc" form="usrform">
Wpisz treść wpisu....</textarea><br>
<input type="submit" value="Submit" id="wyslij">
</form> 
</div>

</section>
<?php include('footer.php') ?>