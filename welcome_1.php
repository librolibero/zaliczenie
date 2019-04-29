<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="shortcut icon" href="images/libr.jpg">
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    <title>Witamy na stronie Archiwum</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
     <link rel='stylesheet' href='css/mojestyle_1.css'>
     <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <style type="text/css">
         body{ font: 14px sans-serif; text-align: center; text-align: center}
        .wrapper{ width: 350px; padding: 10px;  }
          body {padding-top: 40px;
            padding-bottom: 40px;
            background-image: url(images/libr.jpg);
            padding: 20px 20px 20px 20px;
          }
        h1{
             text-align: left;
             color:#FFFAF0;
         }
         
         h2{
            text-align: left;
            color: #FFFAF0	;
         }
         h4{
            text-align: center;
            color: #FFFAF0	;
         }
         h5{
            text-align: left;
            color: #FFFAF0	;
         }
         .form-group{
             
             width: 100%;
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
    header("location: login_1.php");
    exit;
}
?>
    <div class="container">
    <!-- header -->
        <header>
            <a href="index3_1.php"> <img src="images/archiwum2.png" alt="" /></a>
        </header>
    <!-- sidebar -->
        <aside>
            <nav>

                <div class="mobimin" onclick="$('.menu').toggle();">
                    &equiv;
                </div>
                <ul class="menu">
                    <li><a href="index3_1.php">Home</a></li>
                    <li><a href="login_1.php">Zaloguj się</a></li>
                    <li><a href="register_1.php">Zarejestruj się</a></li>
                    <li><a href="uploadd_1.php.php">Dodaj zdjęcie</a></li>
                    <li><a href="reset-password_1.php">Zresetuj hasło</a></li>
                    
                </ul>
            </nav>
        </aside>
        <!-- main -->
         <section id="main">
 <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> Strona Archiwum.</h1>
        <h2>Wprowadź dane do systemu</h2>
            </b>
            <h5>
		<?php
			if( isset($_POST["tytul"]) ){
			        	
                                $tytul = $_POST["tytul"];
				$autor = $_POST["autor"];
				$gatunek = $_POST["gatunek"];
                             
                                 
                  					
					$conn = new mysqli("localhost", "wda", "wd18", "wda_1");
					
					$odp = $conn->query("INSERT INTO zbiory( tytul, autor, gatunek) VALUES ( '$tytul', '$autor', '$gatunek')");
echo "<br>";
					if($odp){
						echo "Udało się!";
					}else {
						echo "Nie udało się";
					}
					
					$conn->close();
				}
		?>
       
                                <div class="news normaltext">
				<form id="search_form" action="https://a.webdesign.evps.pl/listowanie.php" method="post" accept-charset="UTF-8">
                                    <input type="text" name="search" value="" class="form-control" placeholder="Szukaj">&nbsp;
					<input type="submit" name="submit" value="Szukaj" class="btn btn-warning" >
					<input type="hidden" name="advanced" value="0"></form>
				<?php print("$output");?>
            </h5>
 
            <form method="POST" action="welcome_1.php"> 
           
<form action= method="post">
    
            <div class="form-group">
                <h4>Tytuł</h4>
                    
                <input type="text" name="tytul" class="form-control">
            </div>    
            <div class="form-group">
                <h4>Autor</h4>
                    <input type="text" name="autor" class="form-control">               
 <span class="help-block"></span>
                <span class="help-block"></span>
            </div>
            <div class="form-group ">
                <h4>Gatunek</h4>
                    <input type="text" name="gatunek"  class="form-control">
                        
                <span class="help-block"></span>
            </div>
   <div class="form-group">
       <h4> <input type="submit"  class="btn btn-danger" value="Zapisz"></h4>
            </div>
            </div>
    <p>
    <h4>        <a href="reset-password_1.php" class="btn btn-warning">Zresetuj hasło</a>
        <a href="logout_2.php" class="btn btn-danger">Wyloguj się. </a>
        <a href="uploadd_1.php" class="btn btn-warning"> Chcesz dodać zdjęcie?</a>
        <a href="listowanie.php" class="btn btn-danger"> Możesz zobaczyć swoje wyniki tutaj</a>
        <br>
        <hr>
        <a href = "logout_2.php" class="btn btn-danger">Kliknij tutaj, aby wyczyścić sesję</a>
        </h4>
    </p>
    </section>
         <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2019</p>
        </footer>
</body>
</html>