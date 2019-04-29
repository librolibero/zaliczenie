<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="shortcut icon" href="images/header.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Książka telefoniczna</title>
    <link rel="stylesheet" href="css/mojestyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
     <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center;}
        .wrapper{ width: 350px; padding: 20px; }
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-image: url(images/128.gif);
         }
         
 
       
.form-group{
    width: 50%;
}
         .container {
    margin: 30px  auto;
     border-top-width: 15px;}   
         
          h1{
            text-align: center;
            color: #FFFFFF;
         }
         
         h2{
            text-align: center;
            color: #4B0082;
         }
         h4{
            text-align: center;
            color: white;

         }
 </style>
          
   

</head>

<body>

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
                    <li><a href="index.php">Strona główna</a></li>
                 <li><a href="login.php">Zaloguj się</a></li>
                 <li><a href="register.php">Zarejestruj się</a></li>
                 <li><a href="uploadd.php">Dodaj zdjęcie</a></li>
                 <li><a href="reset-password.php">Zresetuj hasło</a></li>
                    
                </ul>
            </nav>
        </aside>
        <!-- main -->
        <section id="main">
            <h1>Książka telefoniczna</h1>
            <br>
            <h4> Zaloguj się, by w pełni korzystać z zasbów książki.<br>
                Wymagana jest uprzednia rejestracja</h4>
        </section>

        <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2019</p>
        </footer>
     
</body>

</html>