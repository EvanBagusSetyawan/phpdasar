<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .kotak{
            width: 45px;
            height: 45px;
            background:linear-gradient(to right,purple,orangered);
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
            background:linear-gradient(to left,purple,orangered);
        }

        .clear{
            clear: both;
        }
    </style>

</head>
<body>

    <?php 

    $angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9],
    ];

    // echo $angka[2][2];

    ?>

    <?php foreach ($angka as $a) :?>
        <?php foreach($a as $b):?>
            <div class="kotak">
                <?= "$b" ?>
            </div>
        <?php endforeach;?>
        <div class="clear"></div>
    <?php endforeach;?>


</body>
</html>