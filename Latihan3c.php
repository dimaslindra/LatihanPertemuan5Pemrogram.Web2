<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function pangkat($angka, $pangkat)
    {
        $css = "font-family: serif; font-size: 40px; color: blueviolet; border: 2px solid red;";

        return pow($angka, $pangkat);
    }

    $angka = 5;
    $pangkat = 4;
    $hasil = pangkat($angka, $pangkat);

    echo "$angka $pangkat $hasil";
    ?>
</body>

</html>