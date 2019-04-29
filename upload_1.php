<!DOCTYPE html>
<html lang="pl">
    <head>
        <link rel="shortcut icon" href="images/libr.jpg">
        <meta charset="UTF-8" />
        <title>Upload zajęcia do bazy danych</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <link rel='stylesheet' href='css/mojestyle_1.css'>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <style type="text/css">
            body{ font: 14px sans-serif; text-align: center;}
        .wrapper{ width: 350px; padding: 10px; }
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-image: url(images/libr.jpg);
             filter: alpha(opacity=90);
         }

h3{
    text-align: center;
        color: #FFFFFF;
}
         
        
         h5{
             text-align: center;
         }
            </style>
           
    </head>
    <body>
          <div class="container">
    <!-- header -->
        <header>
            <a href="index3_1.php"><img src="images/archiwum2.png" alt="" /></a>
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
                 <li><a href="upload_1.php">Dodaj zdjęcie</a></li>
                 <li><a href="reset-password_1.php">Zresetuj hasło</a></li>
                </ul>
            </nav>
        </aside>
        <!-- main -->
         <section id="main">
        
             <h5><a href="uploadd_1.php" class="btn btn-danger">Powrót (wyświetlenie zdjęć)</a>.</h5>
             <h3>
    <?php
// Include the database configuration file
include 'dbConfig_1.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "Plik ".$fileName. " został dodany poprawnie.";
            }
            else{
                $statusMsg = "Próba dodania pliku nie powiodła się, spróbuj później.";
            } 
        }else{
            $statusMsg = "Pojawił się błąd przy dodawaniu zdjęcia.";
        }
    }else{
        $statusMsg = 'Obsługiwany format plików to: JPG, JPEG, PNG, GIF, & PDF .';
    }
}else{
    $statusMsg = 'Proszę wybrać plik do dodania.';
}

// Display status message
echo $statusMsg;
?>
          
        </h3>
        </section>
         <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2019</p>
        </footer>
      
        
    </body>
</html>