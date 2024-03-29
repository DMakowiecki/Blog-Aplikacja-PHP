<?php

$servername = "eduweb.pwste.edu.pl";
$username = "s38992";
$password = "MACzek@000!";
$dbname = "s38992";


$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if (isset($_GET["id"])) {
    $sql = "SELECT * FROM articles WHERE id_art= ".$_GET["id"];
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
  
    echo "<form method='POST' action=''>";
    echo "<input type='hidden' name='id' value='".$row["id_art"]."'>";
     
     echo "<label>Nowy tytul:</label>";
   
    echo '<input type="text" class="form-control" name="tytul" value="'.$row["tytul"].'">';
    echo "<label> Nowy artykuł:</label>";
   
    echo '<textarea class="form-control" rows="5" id="artykul" name="artykul">'.$row["artykul"].'</textarea>';
    echo '<button type="submit" class="btn btn-primary" name="zapisz">Wyslij artykul</button>';
 
    echo "</form>";
  }
  
  if (isset($_POST["zapisz"]) && isset($_POST["id"])) {
    $id = $conn -> real_escape_string($_POST["id"]);
    $tytul = $conn -> real_escape_string($_POST["tytul"]);
    $artykul = $conn -> real_escape_string($_POST["artykul"]);
  
    $sql = "UPDATE articles SET tytul='".$tytul."', artykul='".$artykul."' WHERE id_art=".$id;
    mysqli_query($conn, $sql);
    header("Location: index.php");
  }
  









?>