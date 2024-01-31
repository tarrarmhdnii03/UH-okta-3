<?php 

$nilai = [3, 5, 18, 25, 78, 100];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Mamba</title>
    <style>
        .bulet{
            width: 50px;
            height: 50px;
            background: green;
            text-align: center;
            line-height: 50px;
            color: #fff;
            float: left;
            margin: 5px;
        }

        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php for($i = 0; $i < count($nilai); $i++) : ?>
        <div class="bulet"><?= $nilai[$i]; ?></div>
        <?php endfor; ?>

        <div class="clear"></div>

        <?php foreach($nilai as $data) : ?>
            <div class="bulet"><?= $data; ?></div>
            <?php endforeach; ?>
</body>
</html>