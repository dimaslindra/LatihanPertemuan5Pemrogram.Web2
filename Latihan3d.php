<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function faktorial($a)
    {
        if ($a === 1 || $a === 1) {
            return 1;
        } else {
            return $a * faktorial($a - 1);
        }
    }
    $bilangan = 5;
    $faktorial = faktorial($bilangan);

    echo "Hasil hitunganan dari faktorial $bilangan = $faktorial";
    ?>
</body>

</html>