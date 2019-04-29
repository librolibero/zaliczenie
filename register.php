<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="shortcut icon" href="images/header.jpg">
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    <title>Zarejestruj sie</title>
     <link rel='stylesheet' href='css/mojestyle.css'>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
     <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <style type="text/css">
        
        body {padding-top: 40px;
            padding-bottom: 40px;
            background-image: url(images/128.gif);}
        .container{
            margin: 20px auto;
        }
        .main{
            float: none;
        }
        
        h1{
             text-align: center;
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
         .form-group{
             
             width: 50%;
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
        <section id="main">
    <?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Proszę podać login";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Ten login jest zajęty.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Coś poszło nie tak.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Prosze podać hasło.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Hasło musi zawierać 6 znaków!.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Potwierdź hasło.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Hasło nie pasuje.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Coś poszło nie tak.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
    <div class="wrapper">
        <h2>Zarejestruj się</h2>
        <h5>Uzupełnij pola, by stworzyć konto.</h5>
      
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <h4>Login</h4>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <h4>Hasło</h4>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <h4>Potwierdź hasło</h4>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <h5>
            <div class="form-group">
                <input type="submit" class="btn btn-info" value="Potwierdż">
                
            </div>
            </h5>
            <h5>Masz już konto? <a href="login.php">Zaloguj się</a>.</h5>
        </form>
    </div>    
        </section>
        <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2019</p>
        </footer>
</body>
</html>