<!DOCTYPE HTML>
<html lang='pl'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    <title>360</title>
    <link rel='stylesheet' href='css/mojestyle.css'>
	<script src="./index_files/jquery-1.7.1.min.js"></script>
<script src="./index_files/jquery.cyclotron.js"></script>
<script src="https://360player.io/static/dist/scripts/embed.js" async></script>
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
                <ul>
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
            <h1>Fotografia 360</h1>
           
           
	<?php	
echo '<iframe src="https://360player.io/p/mJKSZd/" frameborder="0" width=560 height=315 allowfullscreen data-token="mJKSZd"></iframe>';
?>
		 
		

        <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2019</p>
        </footer>
    </div>
</body>

</html>