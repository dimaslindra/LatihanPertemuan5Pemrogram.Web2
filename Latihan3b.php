<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function stylee($jawabaninsset, $jawabanempty) {
        $css = "font-size: 43px; color: blueviolet;";

        return  "<span style='$css'>$jawabaninsset $jawabanempty</span>";
    }

    $jawabaninsset = "insset adalah = memeriksa apakah suatu variabel sudah diatur atau belum.";   
    $jawabanempty = "Empty adalah =  berfungsi sebagai penanda suatu kondisi.";

    echo stylee($jawabaninsset, $jawabanempty);

    ?>
</body>
</html>
