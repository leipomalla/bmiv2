<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Your BMI result</title>
</head>

<body>
<a href="index.php">Back to previous page</a>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "bmi";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["nickname"]);
    $weight = test_input($_POST["weight"]);
    $height = test_input($_POST["height"]);
    
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


// Create connection
$con = new mysqli($servername, $username, $password, $dbname);


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql="INSERT INTO bmi_results (nickname, weight, height)

VALUES

('$_POST[nickname]','$_POST[weight]','$_POST[height]')";

echo "paino " . $_POST[weight];
$paino = $_POST[weight];
echo "Paino muuttujassa " . $paino;
$pituus = $_POST[height];

echo "pituus " . $_POST[height];

echo "Pituus muuttujassa " . $pituus;

$heighttwice = $pituus * $pituus;
 
echo "pituus potenssiin kaksi" . $heighttwice;

$bmi = $paino / $heighttwice;
$bmi = $bmi * 10000;
 

if ($con->query($sql) === TRUE) {
    echo "Hello " . $_POST[nickname] . ", your Body mass index is " . $bmi . ".";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$con->close();
?>

</body>

</html>

 

 

