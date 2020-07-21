<!-- lapa ar darbībām saraksta tabulas datu aizvadīšanai uz serveri -->
<?php
//drošības pēc pārbauda vai formā tiešām savadīti dati
if(isset($_POST['pievienot'])&& $_POST["pievienot"]=="Pievienot" ){
  if(isset($_POST['virsraksts'])&& $_POST['virsraksts']!=""&& !empty($_POST['virsraksts'])){
}
}
// apzīmē datus no formas
$virsraksts=$_POST['virsraksts'];
$apraksts=$_POST['apraksts'];
$laiks=$_POST["laiks"];
//šeit dati, lai pieslēgtos lokālajam serverim
$servername='localhost';
$username="root";
$pass="";
$database="printful_uzd";
// savienojas ar severi
$conn= new mysqli($servername, $username, $pass, $database);
// pārbauda savienojumu
if($conn->connect_error){die("Nevar pievienoties datubāzei" . $conn->$connect_error);}
//sagatavo datubāzē sošo tabulu
$sql=$conn->prepare("INSERT INTO `print_uzd_tab` (`virsraksts`, `apraksts`, `laiks`) VALUES (?, ?, ?)");
//ievieto datubāzes tabulā sagatavotots formas datus
$sql->bind_param("sss", $virsraksts, $apraksts, $laiks);
$sql->execute();
//aizver tabulu un beidz savienojumu ar datubāzi
$sql->close();
$conn->close();
//pēc darbības izpildes nonākam sākuma lapā
header("Location: http://" . $_SERVER["HTTP_HOST"] . "/printful_skola/index.php");
?>
