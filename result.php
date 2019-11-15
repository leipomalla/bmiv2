<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <title>Your BMI result</title>
</head>

<body>

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

$sql = "INSERT INTO bmi_results (weight, height)

VALUES

('$_POST[weight]','$_POST[height]')";

$paino = $_POST[weight];
$pituus = $_POST[height];
$heighttwice = $pituus * $pituus;

$bmi = $paino / $heighttwice;
$bmi = $bmi * 10000;

echo "<div class='wrapper'>";

$addtext = "Here is how it compares to five previous results:";

if ($con->query($sql) === true) {
    echo  "<span class='infonumber'>" . round($bmi, 1) . "</span>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
 if($bmi <18.5){
     echo "<div class='info'> It means you are underweight. " . $addtext ."</div>";
 } elseif ($bmi > 18.5 && $bmi < 25){
     echo "<div class='info'>It means you are normal weight. " . $addtext ."</div>";
 } elseif ($bmi > 25 && $bmi < 35){
     echo "<div class='info'>It means you are overweight or obese. " . $addtext ."</div>";
 }else {
     echo "<div class='info'>It means you are severly overweight. " . $addtext ."</div>";
 }

echo "<br>";

$sql = "select * from bmi_results order by PersonID desc limit 5";

$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      
        $value = $row["weight"]/($row["height"]*$row["height"]);
        $value = round($value * 10000, 1);
        if ($value < 18.5) {
            echo "<div style='width:".$value * 6 . "px' class='bar purple'> " . $value . "</div><br><br>";
        } elseif ($value > 18.5 && $value < 25) {
            echo "<div style='width:" . $value * 6 . "px' class='bar green'> " . $value . "</div><br><br>";
        } elseif ($value > 25 && $value < 35) {
            echo "<div style='width:" . $value * 6 . "px' class='bar orange'> " . $value . "</div><br><br>";
        } else {
            echo "<div style='width:" . $value * 6 . "px' class='bar red'> " . $value . "</div><br><br>";
        }
        }

    } else {
    echo "Error";
}

?>
<div class="button_container">
    <div class="button">
<a href="index.php">Back</a>
</div>
</div>
</div>
<?php

$con->close();
?>

</body>

</html>





