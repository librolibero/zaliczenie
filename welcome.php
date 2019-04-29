<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="shortcut icon" href="images/header.jpg">
    <meta charset="UTF-8">
     <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    <title>Książka telefoniczna</title>
     <link rel='stylesheet' href='css/mojestyle.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center;}
        .wrapper{ width: 350px; padding: 10px; }
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-image: url(images/128.gif);
             padding: 20px 20px 20px 20px;
         }
         
 
         

         
.form-group{
    width: 50%;
}
        
         
          h1{
            text-align: left;
            color: #FFFAF0;
         }
         
         h2{
            text-align: left;
            color: #FFFFFF;
         }
         h4{
            text-align: center;
            color: white;

         }
         h5{
            text-align: left;
            color: #FFFAF0	;
         }
         ul, ul li {
	display: block;
	list-style: none;
	margin: 0;
	padding: 0;
}

ul {
	float: left;
	width: 100%;
	border-bottom: 1px solid #365;
	padding-left: 20px;
}

    </style>
</head>
<body>
    <?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
    <div class="container">

        <!-- header -->
        <header>
            <a href="index4.php"> <img src="images/header.jpg" alt="" /></a>
        </header>
        <!-- sidebar -->
        <aside>
            <nav>

                <div class="mobimin" onclick="$('.menu').toggle();">
                    &equiv;
                </div>
                <ul class="menu">
                    <li><a href="index4.php">Strona główna</a></li>
                 <li><a href="login.php">Zaloguj się</a></li>
                 <li><a href="register.php">Zarejestruj się</a></li>
                 <li><a href="uploadd.php">Dodaj zdjęcie</a></li>
                 <li><a href="reset-password.php">Zresetuj hasło</a></li>
                    
                </ul>
            </nav>
        </aside>
        <!-- main -->
    <section id="main">
        <h1>Hej, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Twoja strona.</h1>
   
        <h2>Wprowadź dane do systemu</h2>
            </b>
    <h5>
		<?php
			if( isset($_POST["nazwisko"]) ){
			        $nazwisko = $_POST["nazwisko"];	
                                $imie = $_POST["imie"];
				$telefon = $_POST["telefon"];
				$miasto = $_POST["miasto"];
                             
                                 
                  					
					$conn = new mysqli("localhost", "wda", "wd18", "wda_1");
					
					$odp = $conn->query("INSERT INTO ksiazka(nazwisko, imie, telefon, miasto) VALUES ('$nazwisko', '$imie', '$telefon', '$miasto')");
echo "<br>";
					if($odp){
						echo "Udało się!";
					}else {
						echo "Nie udało się dodać użytkownika";
					}
					
					$conn->close();
				}
				
			
			
		?>
   
            <form method="POST" action="welcome.php"> 
		
<form action= method="post">
       
            <div class="form-group ">
                <h4>Nazwisko</h4>
                <input type="text" name="nazwisko"  class="form-control">
            </div>    
            <div class="form-group  ">
                <h4>Imię</h4>
                <input type="text" name="imie" class="form-control">               
 <span class="help-block"></span>
                <span class="help-block"></span>
            </div>
     <div class="form-group  ">
                <h4>Miasto</h4>
                <input type="text" name="miasto" class="form-control" >
                <span class="help-block"></span>
            </div>    
            <div class="form-group ">
                <h4>Telefon<h4>
                        <input type="number" name="telefon" class="form-control" >
                        
                <span class="help-block"></span>
            </div>
   <div class="form-group">
       <h4> <input type="submit"  class="btn btn-primary" value="Zapisz"> </h4>
            </div>
    </div>
    <p>
    <h4>
        <a href="reset-password.php" class="btn btn-info">Zresetuj hasło</a>
        <a href="logout.php" class="btn btn-primary">Wyloguj się. </a>
        <a href="uploadd.php" class="btn btn-info"> Chcesz dodać zdjęcie?</a>
        <a href="list.php" class="btn btn-primary"> Możesz zobaczyć swoje wyniki tutaj</a>
        <br>
        <hr>
        <a href = "logout.php" class="btn btn-primary">Kliknij tu by wyczyścić sesję</a>
    </h4>
    </p>
    </section>
     <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2019</p>
        </footer>
</body>
</html>