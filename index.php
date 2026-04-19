<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h3>Area and Perimeter of Rectangle</h3>";
    $length = 20;
    $width = 10;
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);

    echo "Length = $length";
    echo "Width = $width";
    echo "Area = $area";
    echo "Perimeter = $perimeter";

    echo "<h3>VAT Calculation</h3>";
    $amount = 5000;
    $vat = $amount * 0.15;

    echo "Amount = $amount";
    echo "VAT (15%) = $vat";

    echo "<h3>Odd or Even</h3>";
    $number = 117;

    if ($number % 2 == 0) {
    echo "$number is Even";
    } else {
    echo "$number is Odd";
    }

    echo "<h3>Largest Number among Three Numbers</h3>";
    $a = 37;
    $b = 43;
    $c = 67;

    if ($a >= $b && $a >= $c) {
    echo "Largest number is: $a ";
    } elseif ($b >= $a && $b >= $c) {
    echo "Largest number is: $b";
    } else {
    echo "Largest number is: $c";
    }

    echo "<h3>Odd Numbers between 10 to 100</h3>";
   for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
    echo "<br>";

    echo"<h3>Search an Element from an Array</h3>";
    $arr = array(10, 20, 30, 40, 50);
    $item = 30;
    $found = false;

    foreach ($arr as $key => $value) {
    if ($value == $item) {
        echo "$item Exist in Array at Index $key.";
        $found = true;
        break;
    }
}

    if (!$found) {
    echo "$item not Exist in Array.";
}


echo"<h3>Print the Shapes</h3>";
echo "<pre>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}
echo "\n";


for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "\n";
}
echo "\n";


$ch = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch . " ";
        $ch++;
    }
    echo "\n";
}

echo "</pre>";

?>
</body>
</html>