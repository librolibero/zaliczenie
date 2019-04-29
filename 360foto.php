<!DOCTYPE HTML>
<html lang='pl'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    <title>Foto</title>
    <link rel='stylesheet' href='css/mojestyle.css'>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>

<body>

    <div class="container">

        <!-- header -->
        <header>
            <img src="images/header.jpg" alt="" />
        </header>

        <!-- sidebar -->

        <aside>
            <nav>
                <div class="mobimin" onclick="$('.menu').toggle();">
                    &equiv;
                </div>
                <ul class="menu">
                    <?php
                    echo '<li><a href="index_1.php">Home</a></li>';
                    echo '<li><a href="foto.php">Foto</a></li>';
                    echo '<li><a href="video.php">Video</a></li>';
                    echo '<li><a href="360foto.php">360Foto</a></li>';
                    echo '<li><a href="FbUdostepnij.php">FB Udostępnij</a></li>';
                    echo '<li><a href="bxSlider.php">bxSlider</a></li>';
                    echo '<li><a href="cycle2.php">Cycle2</a></li>';
                    echo '<li><a href="360.php">360</a></li>';
                            ?>
                </ul>
            </nav>
        </aside>

        <!-- main -->
        <section id="main">
            <h1>360 Foto</h1>
            <?php
     echo '  <script src="https://static.kuula.io/embed.js" data-kuula="https://kuula.co/share/7lv3H?fs=1&vr=0&zoom=1&autorotate=0.45&thumbs=1&hideinst=1&chromeless=0&logo=0" data-width="90%" data-height="640px"></script>';
        ?>

        </section>

        <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2019</p>
        </footer>
    </div>
</body>

</html>