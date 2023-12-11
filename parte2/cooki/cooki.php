<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leer cookie</title>
</head>
<body>

    <?php
    if (isset($_COOKIE["cookie"])) {
        echo $_COOKIE["cookie"] . "<br>";
    } else {
        echo " no se ha creado cookies" . "<br>";
    }
    


    ?>
    
</body>
</html>