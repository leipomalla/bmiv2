<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="style.css">
<title>Count your body mass index</title>
</head>

<body>
<div class="wrapper">
<p style="font-size: 20pt">Count your body mass index</p>

<form action="result.php" method="post">

<div class="slidecontainer">
  Your weight:
  <p><span id="current"></span></p>
  <input type="range" name="weight" min="1" max="200" value="75" class="slider" id="range"><br>
 Your height: 
 <p><span id="current2"></span></p>
 <input type="range" name="height" min="0" max="220" value="165" class="slider" id="range2"><br><br>
 </div>

<input type="submit" />

</form>
</div>
<script src="main.js"></script>

</body>
</html>
