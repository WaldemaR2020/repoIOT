<!DOCTYPE html>
<html>
<body>

<h1>My First Heading</h1>
<p>My first paragraph.</p>

<?php

// utworzenie uchwytu do pliku
$plik = fopen('dane.txt','r');

$zawartosc = '';

// przypisanie zawartości do zmiennej
while(!feof($plik))
{
   $linia = fgets($plik);
   $zawartosc .= $linia;
}

echo $zawartosc;

?>

</body>
</html>