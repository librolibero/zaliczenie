<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    <title>Cycle2</title>
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
       <h1>Cycle2</h1>  
     <script src="http://malsup.github.com/jquery.cycle2.js"></script>
<div class="cycle-slideshow">
       <?php 
    echo '<img src="images/show1/a001.jpg" width="51%">';
    echo '<img src="images/show1/a002.jpg" width="51%">';
    echo '<img src="images/show1/a003.jpg" width="51%">';
    echo '<img src="images/show1/a004.jpg" width="51%">';
    echo '<img src="images/show1/a005.jpg" width="51%">';
    echo '<img src="images/show1/a006.jpg" width="51%">';
    echo '<img src="images/show1/a007.jpg" width="51%">';
    echo '<img src="images/show1/a008.jpg" width="51%">';
    echo '<img src="images/show1/a009.jpg" width="51%">';
    echo '<img src="images/show1/a010.jpg" width="51%">';
   ?>
</div>
</section>
        <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2019</p>
        </footer>
    </div>
</body>
</html>