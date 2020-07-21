<!-- lapa ar darbībām saraksta tabulas izveidošanai, kurā var ievadīt datus -->
<!-- pievieno bootstrap css, javascript funkcijas u.c. -->
<?php include_once("header.php");?>

<div class="container w-50 mx-auto mt-5">
<!-- virsraksti -->
  <h2>Darāmo lietu saraksts</h2>
  <h4>Pievienot jaunu</h4>

    <!-- izveido formu no kuras savāks datus ar post metodi un pēc apstiprināšanas aizvadīs lietotāja datus uz php failu ar tālākām darbībām-->
  <form id="manaForma2" action="../php/vieno.php" method="post">

<!-- pievieno ievades laukus -->
    <label for="input1">Virsraksts:</label>
    <br>
    <input type="text" name="virsraksts" id="input1" value="" required/>
    <br>
    <label for="input2">Apraksts:</label>
    <br>
    <textarea name="apraksts" id= "input2" rows="8" cols="80"></textarea>
    <br>
    <!-- šajā input laukā javascript funkcija ieliek laika vērtību -->
    <input type="hidden" name="laiks" id="laiks">
<!-- pogas iziešanai un saglabāšanai -->
    <a class="btn btn-primary" href="../index.php" role="button">Doties atpakaļ</a>
    <input class="btn btn-primary"  type="submit" name="pievienot" value="Pievienot">

  </form>

</div>
