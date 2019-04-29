<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="shortcut icon" href="images/header.jpg">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    <meta charset="UTF-8">
    <title>Zaloguj się do książki</title>
    <link rel='stylesheet' href='css/mojestyle.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <style type="text/css">
     
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-image: url(images/128.gif);
         }
         h1{
             text-align: left;
             color:#FFFAF0;
         }
         
        
         
         h2{
            text-align: left;
            color: #FFFAF0	;
         }
         h4{
            text-align: center;
            color: #FFFAF0	;
         }
         h5{
            text-align: left;
            color: #FFFAF0	;
         }
         
          body{ font: 14px sans-serif; text-align: center; text-align: center}
        .wrapper{ width: 600px; padding: 10px;  }
        .form-group{
             
             width: 60%;
         }
      </style>
</head>
<body>
    <div class="container">

        <!-- header -->
        <header>
            <a href="index4.php"><img src="images/header.jpg" alt="" /></a>
        </header>
        <!-- sidebar -->
        <aside>
            <nav>

                <div class="mobimin" onclick="$('.menu').toggle();">
                    &equiv;
                </div>
                <ul class="menu">
                    <li><a href="index4.php">Strona główna</a></li>
                 <li><a href="login.php">Zaloguj się</a></li>
                 <li><a href="register.php">Zarejestruj się</a></li>
                 <li><a href="uploadd.php">Dodaj zdjęcie</a></li>
                 <li><a href="reset-password.php">Zresetuj hasło</a></li>
                    
                </ul>
            </nav>
        </aside>
        <!-- main -->
    <div class="page-header">
    <?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Prosze wpisz nazwę użytkownika.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Wpisz hasło.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "Hasło, które wpisałeś, nie pasuje.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "Nie ma konta z taką nazwą użytkownika.";
                }
            } else{
                echo "Oops! Coś poszło nie tak. Spróbuj później";
            }
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
           <!-- main -->
        <section id="main">
    <div class="wrapper">
    
        <h1>Zaloguj się do swojej książki</h1> </div>
       
            <h5>Uzupełnij dane.</h5>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <h4>Login</h4>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
             
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <h4>Hasło</h4>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
                
            <h5>Nie masz konta? <a href="register.php">Zarejestruj się tutaj</a>.</h5>
            <h5>Powrót do strony głównej <a href="index4.php">Tutaj </a>.</h5>
        </form>
                </div>
</section>   
    <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2019</p>
        </footer>
</body>
</html>