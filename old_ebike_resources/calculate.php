<?php
require 'config.php';
// работает
if (isset ($_GET['test'])){
    echo 'da';
    $calc = new exists_bikes_calc(250,5000,0,8000);
    var_dump($calc->calculate());
}