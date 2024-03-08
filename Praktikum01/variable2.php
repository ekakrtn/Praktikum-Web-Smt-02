<?php

$animals = ["kucing", "ayam", "ikan", "burung"];
echo $animals[0]; // Output: Kucing
	echo "<br>";
	echo $animals[2]; // Output: Ikan
	echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p>Nama-nama hewan</p>
   <ul>
    <?php
    foreach($animals as $animals) {
        echo "<li>". $animals."<li>";
    }
   </ul> 
</body>
</html>