<?php
include_once 'images.php';
?>


<html lang="ru">
    <head>
        <title>Погода</title>
        <meta charset="utf-8">

        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

        <style>
            body {
                font-family: sans-serif;
            }
            dl {
                display: table-row;
            }
            dt {
                font-family: Oswald;
                display: table-cell;
                padding: 5px 10px;
            }
            dd {
                font-family: Oswald;
                display: table-cell;
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h1>Температура в городе: <?= $info['name'] ?></h1>
        <dl>
            <dt>Температура</dt>
            <dd><?= round($info['main']['temp']) ?> Градусов цельсия</dd>
        </dl>
        <dl>
            <dt>Скорость ветра</dt>
            <dd><?= $info['wind']['speed'] ?> мс</dd>
        </dl>
        <dl>
            <dt>сейчас </dt>
            <dd><?= $info['weather'][0]['description'] ?> <img src="<?= $img_url ?>"></dd>
        </dl>
        <dl>
            <dt>Влажность </dt>
            <dd><?= $info['main']['humidity'] ?> %</dd>
        </dl>
        <dl>
            <dt>Восход</dt>
            <dd><?= date('H:i:s', $info['sys']['sunrise'] + date($timezone)) ?></dd>
        </dl>

        <dl>
            <dt>Закат</dt>
            <dd><?= date('H:i:s', $info['sys']['sunset'] + date($timezone)) ?></dd>
        </dl>



    </body>
</html>
