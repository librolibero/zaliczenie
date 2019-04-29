<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Przechwytywanie zmiennych + CW10</title>
    <link rel="stylesheet" href="css/mojestyle.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    	<script src="./index_files/jquery-1.7.1.min.js"></script>
<script src="./index_files/jquery.cyclotron.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"> </script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script>
     <script>
      $(document).ready(function(){
        $('.slider').bxSlider();
      });
    </script>
     <script src="http://malsup.github.com/jquery.cycle2.js"></script>
  
</head>

<body>
      <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div class="container">

        <!-- header -->

        <header>
            <a href="index2.php"> <img src="images/header.jpg" alt="Logo"></a>
        </header>
        <!-- sidebar -->
        <aside>
            <nav>
                <div class="mobimin" onclick="$('.menu').toggle();">
                    &equiv;
                </div>
                <ul class="menu">
                    <li><a href="?id=1">Start</a></li>
                    <li><a href="?id=2">Foto</a></li>
                    <li><a href="?id=3">Video</a></li>
                    <li><a href="?id=4">Foto360</a></li>
                    <li><a href="?id=5">Udostępnij</a></li>
                    <li><a href="?id=6">bxSlider</a></li>
                    <li><a href="?id=7">Cycle2</a></li>
                   <li><a href="?id=8">360</a></li>
                    
                    
                    
                </ul>
            </nav>

        </aside>
        <!-- main -->
      
        <section id="main">
        
        <?php
        if (isset($_GET['id'])) {
        $przechwycona_zmienna = $_GET['id'];
        
                if ($przechwycona_zmienna == 1) {
                    echo "<h1>Moja strona WWW</h1>";
                    echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum tempus mi, maximus volutpat urna sollicitudin vitae. Vivamus rutrum mi sit amet commodo rutrum. Suspendisse potenti. Sed a ullamcorper eros. Maecenas dapibus erat mi,
                a egestas ipsum cursus volutpat. Aliquam posuere mi at consectetur convallis. Cras vitae ligula eget leo ultrices hendrerit nec sed ex. Morbi at ipsum rhoncus, dictum elit in, consectetur lorem. Aliquam suscipit diam sit amet mauris luctus,
                a egestas magna pharetra. Donec laoreet viverra risus nec fermentum. Maecenas gravida lectus vel ante commodo bibendum.";
        } elseif ($przechwycona_zmienna ==2){
            echo "<h1>Foto</h1>";
            echo '<img style="width: 95%;" src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Masca_Road.jpg">'; 
                    
                } elseif ($przechwycona_zmienna ==3){
            echo "<h1>Video</h1>";
             echo '<iframe width="600" height="315" src="https://www.youtube.com/embed/aL1DXmlbJo4" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>';
        
        }  elseif ($przechwycona_zmienna ==4){
            echo "<h1>Foto360</h1>";
            echo '<script src="https://static.kuula.io/embed.js" data-kuula="https://kuula.co/share/7lv3H?fs=0&vr=0&thumbs=1&hideinst=1&chromeless=0&logo=0" data-width="90%" data-height="640px"></script>';
        
            } elseif ($przechwycona_zmienna ==5) {
            echo "<h1>FbUdostępnij</h1>";
            echo '<script src="https://static.kuula.io/embed.js" data-kuula="https://kuula.co/share/7lv3H?fs=0&vr=0&thumbs=1&hideinst=1&chromeless=0&logo=0" data-width="90%" data-height="640px"></script>';
            echo '<div class="fb-share-button" data-href="https://kuula.co/share/7lv3H?fs=0&amp;vr=0&amp;zoom=1&amp;thumbs=1&amp;chromeless=0&amp;logo=0" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fkuula.co%2Fshare%2F7lv3H%3Ffs%3D0%26vr%3D0%26zoom%3D1%26thumbs%3D1%26chromeless%3D0%26logo%3D0&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Udostępnij</a></div>';
        
            } elseif ($przechwycona_zmienna ==6) {
                echo "<h1>BxSlider</h1>";
            echo '  <div class="slider">
        <div><img src="images/show2/b001.jpg" width="100%"></div>
        <div><img src="images/show2/b002.jpg" width="100%"></div>
        <div><img src="images/show2/b003.jpg" width="100%"></div>
        <div><img src="images/show2/b004.jpg" width="100%"></div>
        <div><img src="images/show2/b005.jpg" width="100%"></div>
        <div><img src="images/show2/b006.jpg" width="100%"></div>
        <div><img src="images/show2/b007.jpg" width="100%"></div>
        <div><img src="images/show2/b008.jpg" width="100%"></div>

      </div>';
            }  
        
        
        } elseif ($przechwycona_zmienna ==7) {
            echo "<h1> Cycle2 </h1>";
            echo '<div class="cycle-slideshow">';
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

      echo '</div>';
        }
        elseif ($przechwycona_zmienna ==8) {
            echo "<h1>360</h1>";
            echo '<div class="cycle" style="background:url(images/360/c001.jpg);height:1200px; width:785px"></div>';
        }
        else {
        echo "To co zrobiłeś jest niedozwolone";
        }
        
  //  }
       
        
        
       ?>
                 <script>
		$(document).ready(function ($) {
			$('.cycle').cyclotron();
		});
            </script>
            
            
        </section>

        <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2019</p>
        </footer>

    </div>

</body>

</html>

