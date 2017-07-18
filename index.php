<?php

$apipath = 'http://api.openweathermap.org/data/2.5/weather?q=dubna,ru&units=metric&appid=bb3b71163929908d7327cab9dcb39189';
$local_cache = 'cache.txt';
$cache_time = time('now') - filemtime($local_cache);
$timezone = '3';


require_once'functions.php';




if (file_exists($local_cache) && $cache_time < 600) {

    //echo 'Кэш есть и он живой';
    $info = read_from_cache();

    require_once'template.php';
    
} else {

    get_weather();
}



?>