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
  Your weight (kg):
  <p><span id="current">80</span></p>
  <input type="range" name="weight" min="30" max="130" value="80" class="slider" id="range"><br>
 Your height (cm): 
 <p><span id="current2">180</span></p>
 <input type="range" name="height" min="120" max="240" value="180" class="slider" id="range2"><br><br>
 </div>

<input type="submit" />

</form>
</div>
<script src="main.js"></script>

</body>
</html>
