<?php

$servername = "eduweb.pwste.edu.pl";
$username = "s38992";
$password = "MACzek@000!";
$dbname = "s38992";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Checking user
$login =  $conn -> real_escape_string($_POST['login']);
$pswd = $conn -> real_escape_string($_POST['pswd']);
if($login==null || $pswd==null){
  echo '<script>       window.location.href = "logowanie.php";       alert("Błędne dane")       </script>';
}else{
  $sql="SELECT * FROM users WHERE login = '$login' AND haslo = '$pswd'";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_array($result);
  
  if($row[0]){
      
      session_start(); 
      $_SESSION['logged_in'] = true;
      $_SESSION['username'] = $login;
      $_SESSION['imie'] = $row['imie'];
      $_SESSION['nazwisko'] = $row['nazwisko'];
      $_SESSION['typ'] = $row['typ'];
      $_SESSION['id'] = $row['id'];
      header("Location: index.php");
  exit;
  } else{
    echo '<script>       window.location.href = "logowanie.php";       alert("Błędne dane")       </script>';
  }
}




?>
