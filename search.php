<?php
$servername = "localhost";
$username = "wda";
$password = "wd18";
$dbname = "archiwum";

// Zdefiniowanie polaczenia
$conn = new mysqli($servername, $username, $password, $dbname);
// Utwrzeie polaczenia
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$output = '';
if(isset($_POST['search'])) {
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
    $query = $mysqli_query("SELECT * FROM zbiory WHERE tytul LIKE'%$searchq%' OR autor LIKE '%$searchq%' OR gatunek LIKE '%$searchq%'") or die ("Nie ma nic");
    $count = mysqli_num_rows($query);
    if($count == 0){
        $output = 'Nie ma czegoś takiego';
    }else{
        while($row = mysqli_fetch_array($query)) {
            $tytul = $row['tytul'];
            $autor = $row['autor'];
            $gatunek = $row['id'];
            $output .= '<div' .$tytul.' '.$autor. ' ' .$gatunek. '</div>';
        }
    }
    
}

?>


