<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Przechwytywanie zmiennych </title>
    <link rel="stylesheet" href="css/mojestyle.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>

    <div class="container">

        <!-- header -->

        <header>
            <a href="index1.php"> <img src="images/header.jpg" alt="Logo"></a>
        </header>
        <!-- sidebar -->
        <aside>
            <nav>
                <div class="mobimin" onclick="$('.menu').toggle();">
                    &equiv;
                </div>
                <ul class="menu">
                    <li><a href="?id=1">Start</a></li>
                    <li><a href="?id=2">O mnie</a></li>
                    <li><a href="?id=3">Zaintersowania</a></li>
                    <li><a href="?id=4">Portoflio</a></li>
                    <li><a href="?id=5">Kontakt</a></li>
                </ul>
            </nav>

        </aside>
        <!-- main -->
        <?php
            if (isset($_GET['id'])) {
            $przechwycona_zmienna = $_GET['id'];
            switch ($przechwycona_zmienna)
            {
            case '1': print "<h1>Moja strona WWW</h1>"; break;
            case '2': print "<h1>O mnie</h1>"; break;
            case '3': print "<h1>Zainteresowania</h1>"; break;
            case '4': print "<h1>Portfolio</h1>"; break;
            case '5': print "<h1>Kontakt</h1>"; break;
            }
            }
            ?>
        <section id="main">
            
            
        </section>

        <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2018</p>
        </footer>

    </div>

</body>

</html>