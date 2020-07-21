<!-- galvenā lapa kur tiek novietoti saraksti (šī lapa tiek ielādēta index.php failā) -->
<!-- virsraksts -->
<h2 class="text-center mb-n2 pt-5">Darāmo lietu saraksts</h2>
<!-- izveido tagu kur tiks ievietotas ar javascript ģenerētās html formas -->
<div id="galv_sar">
</div>
<br>
<!-- poga uz lapu ar jauna saraksta pievienošanu -->
<div class="m-n2 text-center">
  <a href="public/pievieno.php" class="btn btn-primary mt-2">Pievienot jaunu</a>
</div>

 <?php
 //šeit dati, lai pieslēgtos lokālajam serverim no kura ņems tekstu formas tagiem
 $servername='localhost';
 $username="root";
 $pass="";
 $database="printful_uzd";
 // savienojas ar severi
 $conn= new mysqli($servername, $username, $pass, $database);
 // pārbauda savienojumu
 if($conn->connect_error){die("Nevar pievienoties datubāzei" . $conn->$connect_error);}
 //sagatavo datubāzes tabulas informāciju
 $sql = "SELECT id, virsraksts, apraksts, laiks FROM print_uzd_tab";
 // ielasa objektā informāciju no tabulas
 $result = $conn->query($sql);
//izveido ciklus, lai apstrādātu datus un palaistu javascript funkciju, kas ģenerēs formas
 if ($result->num_rows > 0) {
// izvada datus no katras tabulas rindas
   while($row = $result->fetch_assoc()) {
// papildus apzīmē tabulas datus
        $id=$row["id"];
        $virsr=$row["virsraksts"];
        $apr=$row["apraksts"];
        $laik=$row["laiks"];
?>
<!-- php mainīgos -$ pārveido par javascript mainīgajiem -var -->
<script type="text/javascript">
        var id="<?php echo $id ?>";
        var virsraksts4="<?php echo $virsr ?>";
        var apraksts4="<?php echo $apr ?>";
        var laiks4="<?php echo $laik ?>";

//palaiž javascript funkciju, kas ģenerē formas - failā mana_java2.js
        genereFormu();

</script>

<?php
    }

    }
 ?>
