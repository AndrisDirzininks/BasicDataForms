<!-- lapa ar darbībām saraksta tabulas rediģēšanai -->
<!-- ielādē palīgfailus -->
<?php include_once("header.php");?>

<div class="container w-50 mx-auto mt-5">
<!-- virsraksti -->
  <h2>Darāmo lietu saraksts</h2>
  <h4>Labot</h4>

<!-- javascript funkcija labošanas formai - uzspiežot uz attiecīgās pogas, novada formas datus vai nu uz labošanas lapu vai dzēšanas lapu -->
<script type="text/javascript">
function submitForm(action) {
    var form = document.getElementById('manaForma3');
    form.action = action;
    form.submit();
  }
</script>

<?php
//apzīmē formas datus
$id=$_POST["id"];
$apraksts=$_POST["apraksts"];
$virsraksts=$_POST["virsraksts"];
//pārveido datus javascript funkcijai saprotamā formā
?>
<script type="text/javascript">
var id6= "<?php echo $id ?>";
var apraksts6= "<?php echo $apraksts ?>";
var virsraksts6= "<?php echo $virsraksts ?>";
</script>

<!-- izveido formu no kuras savāks datus ar post metodi un pēc apstiprināšanas aizvadīs lietotāja datus uz php failu ar tālākām darbībām-->
  <form id="manaForma3" method="post">

<!-- pievieno ievades laukus -->
    <label for="input1">Virsraksts:</label>
    <br>
    <input type="text" name="virsraksts" id="input1" value="" required>
    <br>
    <label for="input2">Apraksts:</label>
    <br>
    <textarea name="apraksts" id= "input2" rows="8" cols="80" value=""></textarea>
    <br>
    <input type="hidden" id="id" name="id" value="">
<!-- pogas iziešanai un saglabāšanai -->
    <a class="btn btn-primary" href="../index.php" role="button">Doties atpakaļ</a>
    <input class="btn btn-primary" onclick="submitForm('../php/dzest.php')" type="button" name="dzest" value="Dzēst">
    <input class="btn btn-primary" onclick="submitForm('../php/labo.php')" type="button" name="saglabat" value="Saglabāt">

  </form>
<!-- javascript funkcija, kas ievietos tekstu laukos (teksts ņemts no iepriekšējās tabulas ar formas post metodi) -->
<script type="text/javascript">
var virsraksts5=document.getElementById("input1").value=virsraksts6;
var apraksts5=document.getElementById("input2").value=apraksts6;
var id5=document.getElementById("id").value=id6;
// virsraksts5.innerHTML="čau";

</script>


</div>
