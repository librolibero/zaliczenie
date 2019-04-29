<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    <title>bxSlider</title>
    <link rel='stylesheet' href='css/mojestyle.css'>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"> </script>
  
    <script>
      $(document).ready(function(){
        $('.slider').bxSlider();
      });
    </script>
  
    
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
     <div class="slider">
         <?php
        echo '<div><img src="images/show2/b001.jpg" width="100%"></div>';
        echo '<div><img src="images/show2/b002.jpg" width="100%"></div>';
        echo '<div><img src="images/show2/b003.jpg" width="100%"></div>';
        echo '<div><img src="images/show2/b004.jpg" width="100%"></div>';
        echo '<div><img src="images/show2/b005.jpg" width="100%"></div>';
        echo '<div><img src="images/show2/b006.jpg" width="100%"></div>';
        echo '<div><img src="images/show2/b007.jpg" width="100%"></div>';
        echo '<div><img src="images/show2/b008.jpg" width="100%"></div>';
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