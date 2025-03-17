<?php
require "Databaseconnectieles.php";




$personen = $pdo->query("SELECT * FROM producten");
$result = $personen->fetchAll();


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
.editbutton{                
        background-color:rgb(0, 145, 255);
        color: white;
}

.deletebutton{
    background-color:rgb(255, 30, 0);
    color: white;

}
    </style>
</head>
<body>
    <table class="table table-dark table-borderless">
      <tr>
        <th>product_code</th>
        <th>product_naam</th>
        <th>prijs_per_stuk</th>
        <th>omschrijving</th>
        <th>Action</th>
        <th></th>
      </tr>
      <tr>
       <?php
foreach($result as $product){
echo "<tr>";
echo "<td>". $product["product_code"]. "</td>";
echo "<td>". $product["product_naam"]. "</td>";
echo "<td>". "€". $product["prijs_per_stuk"]. "</td>";
echo "<td>". $product["omschrijving"]. "</td>";
echo "<td><input class='editbutton' type='button' value='edit'></td>";
echo "<td><input class='deletebutton' type='button' value='delete'></td>";
}
       ?>
      </tr>
    </table>
</body>
</html>