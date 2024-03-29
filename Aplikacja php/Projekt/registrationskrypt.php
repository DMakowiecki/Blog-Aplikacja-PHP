<?php
$servername = "eduweb.pwste.edu.pl";
$username = "s38992";
$password = "MACzek@000!";
$dbname = "s38992";



$conn = mysqli_connect($servername, $username, $password,$dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$login = $_POST['login'];
$pswd = $_POST['pswd'];
$sql = "SELECT * FROM users WHERE login = '$login'";
$result = mysqli_query($conn, $sql);
if($imie==null || $nazwisko==null|| $login==null|| $pswd==null){

echo '<script>       window.location.href = "rejestracja.php";       alert("Błędne dane")       </script>';
}else if(mysqli_num_rows($result) > 0) {
  echo '<script>       window.location.href = "rejestracja.php";       alert("Błędne dane")       </script>';

}else{
  $sql = "INSERT INTO users (imie, nazwisko, login, haslo , typ) VALUES ('$imie', '$nazwisko', '$login', '$pswd','u')";
  $result = mysqli_query($conn, $sql);
  header("Location: index.php");
  exit;
}
?>
