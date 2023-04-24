<!DOCTYPE html>
<html>
<head>
  <title>Bluementa</title>
  <link rel="stylesheet" href="bmenta.css">
  <style>
    section {
      background-color: #fff;
      width: 50%;
      padding: 50px;
      font-family: Arial, sans-serif;
      font-size: 16px;
      border: 3px solid #ccc;
      border-radius: 22px;
      margin: 127px auto;
      height: 153.12123123123313px;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
  </style>
</head>
<body>
  <nav>
    <div>
      <a href="#">Asztal</a>
      <a href="#">Feladattár</a>
      <a href="#">Csoportok</a>
      <a href="#">Katalógus</a>
      <a href="#">Direktcím</a>
      <a href="#">Árak</a>
    </div>
  </nav>
   <div class="container">
   <?php
    include('backend.php');
    $sectionszamok = $rowcount;
    for ($i = 0; $i < $sectionszamok; $i++) {
      echo "<section data-sections='$sectionszamok'><div>Kérdés<div><hr><div>Válaszok<div></section>";
    }
    ?>
    </div>
</body>
</html>