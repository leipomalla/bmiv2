<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Count your body mass index</title>
    <style>
    .bg-1 {
    background-color: #ff6600; 
    color: #000000;
    padding: 15px;
    margin: 15px;
    } 
    body {
      font: 20px "Montserrat", sans-serif;
    }
    </style>
  }
</head>

<body>
<div class="container-fluid bg-1 text-center">
<h1 style="margin-left:auto, margin-right:auto">Insert your weight and your height <br>to count your body mass index</h1>

<form action="result.php" method="post">

Your name: <input type="text" name="nickname" /><br><br>

Your weight: <input type="text" name="weight" /><br><br>

Your height: <input type="text" name="height" /><br><br>

<input type="submit" />

</form>
</div>

</body>
</html>
