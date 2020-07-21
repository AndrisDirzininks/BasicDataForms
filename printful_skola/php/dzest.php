<!-- lapa ar darbībām saraksta tabulas dzēšanai -->
<?php
 //drošībai pārbauda vai formā tiešām savadīti minimālie nepieciešamie dati
   if(isset($_POST['virsraksts'])&& $_POST['virsraksts']!=""&& !empty($_POST['virsraksts'])){

//apzīmē mainīgo no formas - vajadzēs tikai id, lai atpazītu rindu
     $id=$_POST['id'];

     //šeit dati, lai pieslēgtos lokālajam serverim
     $servername='localhost';
     $username="root";
     $pass="";
     $database="printful_uzd";

     // savienojas ar severi
     $conn= new mysqli($servername, $username, $pass, $database);
     // pārbauda savienojumu
     if($conn->connect_error){die("Nevar pievienoties datubāzei" . $conn->$connect_error);}
     //izdzēš datubāzes tabulu pēc id
     $sql = "DELETE FROM print_uzd_tab WHERE id=$id";
//      ja neizdodotos apdeitot, tad paziņotu...
     if ($conn->query($sql) === !TRUE){
       echo "Error updating record: " . $conn->error;
}
//beidz savienojumu ar datubāzi
      $conn->close();
//pēc darbības izpildes nonākam sākuma lapā
      header("Location: http://" . $_SERVER["HTTP_HOST"] . "/printful_skola/index.php");

 }

  ?>
