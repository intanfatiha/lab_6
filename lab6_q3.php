<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
    $width = 5;
    $length = 8;

    function calculateArea($width,$length)
    {
        return $width * $length;
    }
  
    echo"<b>The area of a rectangle with a width of $width and length of $length is </b>"."<b>".calculateArea($width,$length)."</b>";
    
    ?>
</body>
</html>