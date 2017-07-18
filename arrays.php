<?php

$api_icon_path = 'http://openweathermap.org/img/w/';

$icons = array();


$keys2xx = array(200, 201, 203, 210, 211, 212, 221, 230, 231, 232);
$keys3xx = array(300, 301, 302, 310, 311, 312, 313, 314, 321);
$keys50x = array(500, 501, 502, 503, 504);
$keys51x = array(511, 520, 521, 522, 531);
$keys6xx = array(600, 601, 602, 611, 612, 615, 616, 620, 621, 622);
$keys7xx = array(701, 711, 721, 731, 741, 751, 761, 762, 771, 781);
$otherkeys = array(801 => '02d.png', 802 => '03d.png', 803 => '04d.png', 804 => '04d.png');


$icons = array_fill_keys($keys2xx, '04d.png') + array_fill_keys($keys3xx, '09d.png') + array_fill_keys($keys50x, '10d.png') + array_fill_keys($keys51x, '09d.png') + array_fill_keys($keys6xx, '13d.png') + array_fill_keys($keys7xx, '50d.png') + array(800 => '01d.png') + $otherkeys;
?>