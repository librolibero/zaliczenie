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
                    echo '<li><a href="index._1.php">Home</a></li>';
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
            
                                        echo ' <script src="https://static.kuula.io/embed.js" data-kuula="https://kuula.co/share/7lv3H?fs=0&vr=0&thumbs=1&hideinst=1&chromeless=0&logo=0" data-width="90%" data-height="640px"></script>';
                                        ?>
<div class="fb-share-button" data-href="https://kuula.co/share/7lv3H?fs=0&amp;vr=0&amp;zoom=1&amp;thumbs=1&amp;chromeless=0&amp;logo=0" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fkuula.co%2Fshare%2F7lv3H%3Ffs%3D0%26vr%3D0%26zoom%3D1%26thumbs%3D1%26chromeless%3D0%26logo%3D0&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Udostępnij</a></div>
        </section>

            
            
            
            
            



        <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2017</p>
        </footer>
    </div>
</body>

</html>