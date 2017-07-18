<?php

//error_reporting(0);
$apipath = 'http://api.openweathermap.org/data/2.5/weather?q=dubna,ru&units=metric&lang=ru&appid=bb3b71163929908d7327cab9dcb39189';
$local_cache = 'cache.txt';
$max_cache_time = 300;
$timezone = (3 * 60 * 60);


require_once'functions.php';


if (!file_exists($local_cache)) {

    touch('cache.txt'); // На тот случай если не пройдет put_content(не будет связи с api сервером), появится хотя бы пустой.
    get_weather($apipath, $local_cache);
}

$cache_time = time('now') - filemtime($local_cache);


if ($cache_time > $max_cache_time) {

    get_weather($apipath, $local_cache);
}


if (file_exists($local_cache) && filesize($local_cache) > 0) {

    $info = read_from_cache($local_cache);

    require_once'template.php';
} else {

    echo 'у меня нет даже закешированных данных для отображения'; // Маловероятно конечно
}
?>