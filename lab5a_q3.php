<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        // Function to calculate the area of a rectangle
        function calculateArea($width, $length) {
            return $width * $length;
        }

        $width  = 4;
        $length = 2;
        $area   = calculateArea($width, $length);

        echo "<b>The area of a rectangle with a width of $width and $length is $area</b>";
    ?>
</body>
</html>