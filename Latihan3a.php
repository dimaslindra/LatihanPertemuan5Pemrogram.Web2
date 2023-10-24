<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function ganti_style($tulisan)
    {
        $css = "font-size: 40px; color: blueviolet; font-family: arial;";
        return "<span style='$css'>$tulisan</span>";
    }
    $tulisan = "Hello world!! Here I come!";

    echo ganti_style($tulisan);
    ?>
</body>

</html>