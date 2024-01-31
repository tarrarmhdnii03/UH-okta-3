<?php 

$abjad = ["A", "B", "C", "D", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "Y", "Z"];
$mapel = ["Pendidikan agama budi pengerti", "Pendidikan pancasila", "Bahasa indonesia", "Matematika", "Bahasa inggris", "Dasar-dasar kejurun RPL"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Mamba</title>
    <style>
        .bulet{
            width: 80px;
            height: 80px;
            background: green;
            text-align: center;
            line-height: 80px;
            color: #fff;
            border-radius: 80%;
            float: left;
            margin: 5px;
        }

        .clear{
            clear: both;
        }
        .kotak{
            width: 200px;
            height: 200px;
            background: blue;
            text-align: center;
            line-height: 200px;
            color: #fff;
            float: left;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>Abjad A - Z</h1>
    <?php for($i = 0; $i < count($abjad); $i++) : ?>
        <div class="bulet"><?= $abjad[$i]; ?></div>
        <?php endfor; ?>

        <div class="clear"></div>
     <h1>Mapel RPL 2</h1>
        <?php foreach($mapel as $data) : ?>
            <div class="kotak"><?= $data; ?></div>
            <?php endforeach; ?>
</body>
</html>