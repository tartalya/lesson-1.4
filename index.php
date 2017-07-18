<?php

$apipath = 'http://api.openweathermap.org/data/2.5/weather?q=dubna,ru&units=metric&appid=bb3b71163929908d7327cab9dcb39189';
$local_cache = 'cache.txt';
$cache_time = time('now') - filemtime($local_cache);


require_once'functions.php';


var_dump($cache_time);

if (file_exists($local_cache) && $cache_time < 600) {

    //echo 'Кэш есть и он живой';
    $info = read_from_cache();

    echo 'Город ' . $info['name'] . ' Температура ' . $info['main']['temp'];
} else {

    get_weather();
}


?>