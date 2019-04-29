<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="shortcut icon" href="images/libr.jpg">
    <meta charset="UTF-8">
     <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    <title>Resetowanie hasła</title>
    <link rel='stylesheet' href='css/mojestyle_1.css'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; text-align: center}
        .wrapper{ width: 350px; padding: 10px;  }
        body {padding-top: 40px;
            padding-bottom: 40px;
            background-image: url(images/libr.jpg);}
        h1{
             text-align: left;
             color:#FFFAF0;
         }
         
         h2{
            text-align: center;
            color: #FFFAF0	;
         }
         h4{
            text-align: center;
            color: #FFFAF0	;
         }
         h5{
            text-align: center;
            color: #FFFAF0	;
         }
        
    </style>
</head>
<body>
    <?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login_1.php");
    exit;
}
 
// Include config file
require_once "config_1.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Wpisz nowe hasło.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Hasło musi zawierać sześć znaków.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Potwierdź hasło.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Hasło nie pasuje.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login_1.php");
                exit();
            } else{
                echo "Oops! Coś poszło nie tak";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
    <div class="container">

        <!-- header -->
        <header>
            <a href"index3_1"><img src="images/archiwum2.png" alt="" /></a>
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
                 <li><a href="uploadd_1.php">Dodaj zdjęcie</a></li>
                 <li><a href="reset-password_1.php">Zresetuj hasło</a></li>
                    
                </ul>
            </nav>
        </aside>
        <!-- main -->
         <section id="main">
             
    <div class="wrapper">
        <h1>Resetowanie hasła</h1>
        <h4>Wpisz nowe hasło.</h4>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <h5>Nowe hasło</h5>
                <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <h5>Potwierdź hasło</h5>
                <input type="password" name="confirm_password" class="form-control">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <h5>
            <div class="form-group">
                <input type="submit" class="btn btn-danger" value="Potwierdź">
                <a class="btn btn-warning" href="welcome_1.php">Anuluj</a>
            </h5>
            </div>
        </form>
    </div>    
         </section>
         <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2019</p>
        </footer>
</body>
</html>