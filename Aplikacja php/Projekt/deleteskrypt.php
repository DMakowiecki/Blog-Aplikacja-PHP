<?php
$servername = "eduweb.pwste.edu.pl";
$username = "s38992";
$password = "MACzek@000!";
$dbname = "s38992";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

if (isset($_GET["id"])) {
    
    $sql = " DELETE FROM articles WHERE id_art = ".$_GET["id"];
    $result = mysqli_query($conn, $sql);
    if($result){
    header("Location: index.php");
    exit;
}else{
        
        echo '<script>       window.location.href = "logowanie.php";       alert("Nastąpił problem z usuwaniem")       </script>';
       
}
  }



?>