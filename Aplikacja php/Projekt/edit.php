<!DOCTYPE html>
<html>
<head>
  <title>Makowiecki</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styl.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>

<div class="container p-5  text-white text-center hb" >
	<div class="row">
		<div class="col-sm-5">
			<img src="pwste.png">
		</div>
		<div class="col-sm-7">
       
			  <h1>PROJEKT WWW </h1>
  <p>Projekt WWW</p> 
		</div>
	</div>

</div>
<div class="container  navi"  >
	<nav class="navbar navbar-expand-sm navbar-dark  bg-black  " style="margin-top: 0px;">
  <div class="container-fluid ">
  		

    <a class="navbar-brand" href="index.php">Strona główna</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
             <?php
            session_start();
            if (isset($_SESSION['logged_in'])) {
           
              if ($_SESSION['logged_in']) {
                echo '<li class="nav-item">'."Witaj, ".$_SESSION['imie']." ".$_SESSION['nazwisko'].", ".$_SESSION['id']."!" .'</li>';
            } else {
                echo "Nie jesteś zalogowany.";
            }
          }else{
            echo '  <li class="nav-item">';
            echo ' <a class="nav-link" href="logowanie.php">Logowanie</a>';
            echo ' </li>';
            echo '  <li class="nav-item">';
            echo '     <a class="nav-link" href="rejestracja.php">Rejestracja</a>';
            echo '   </li>';
          }
         
           
            ?>
        
            <?php
            
            if (isset($_SESSION['logged_in'])) {
           
              if ($_SESSION['logged_in']) {
                echo '<li class="nav-item">'."Witaj, ".$_SESSION['imie']." ".$_SESSION['nazwisko'].", ".$_SESSION['id']."!" .'</li>';
            } else {
                echo "Nie jesteś zalogowany.";
            }
          }

           
            ?>

      </ul>
      <form action="" method="POST">
      <button class="btn btn-primary" type="submit" name="log_out" style="margin-right:50px;">Wyloguj </button>
      <?php
      if (isset($_POST['log_out'])) {
        echo"Koniec sesji";
        session_destroy();
        header("Location: index.php");
        exit;
     }
      ?>

    </div>
  </div>

</nav>
</div>
<div class="container mt-5 " style="margin-bottom:30px" >
  <div class="row" >
  <div  class="col-sm-3">

</form>
  </div>
    <div class="col-sm-9">
    <?php 
    include "edit-post.php";
?>
   
    </div>
  
    <?php
include 'show_post.php'
?>
      
    </div>
  </div>
</div>
<div class="container p-5  text-white text-center hb">
	<div class="row">
		<div class="col-sm-2">
			<h4> Państwowa Wyższa Szkoła Techniczno-Ekonomiczna</h4>
			<p> Czarnieckiego 16,<br/> 37-500 Jarosław</p>
		</div>
		<div class="col-sm-9">
			  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.9570713468916!2d22.6709749159326!3d50.01215982672896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473c9bd00702269d%3A0x34c3e02f77a47069!2sPa%C5%84stwowa%20Wy%C5%BCsza%20Szko%C5%82a%20Techniczno-Ekonomiczna!5e0!3m2!1spl!2spl!4v1679297200763!5m2!1spl!2spl"  height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="map"></iframe>
		</div>
		<div class="col-sm-1">
			<p> <i class="glyphicon glyphicon-cloud"></i></p>
     <i class="bi bi-0-circle"></i>
		</div>
	</div>

</div>

</body>
</html>