<!-- lapa ar darbībām saraksta tabulas rediģēšanai un pieslēgšanos serverim -->
<?php

 //drošībai pārbauda vai formā tiešām savadīti minimālie nepieciešamie dati
if(isset($_POST['virsraksts'])&& $_POST['virsraksts']!=""&& !empty($_POST['virsraksts'])){

     $virsraksts=$_POST['virsraksts'];
     $apraksts=$_POST['apraksts'];
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
     //apdeito datubāzes tabulu pēc id
     $sql = "UPDATE print_uzd_tab SET virsraksts='$virsraksts', apraksts='$apraksts' WHERE `id`=$id";
     //ja neizdodotos apdeitot, tad paziņotu...
     if ($conn->query($sql) === !TRUE){
       echo "Error updating record: " . $conn->error;
}

//pēc darbības izpildes nonākam sākuma lapā
      header("Location: http://" . $_SERVER["HTTP_HOST"] . "/printful_skola/index.php");

//beidz savienojumu ar datubāzi
      $conn->close();
//ja nav ievadīts virsraksts, tad lietotāju aizvada sākuma lapā
 }else{header("Location: http://" . $_SERVER["HTTP_HOST"] . "/printful_skola/index.php");}

  ?>
