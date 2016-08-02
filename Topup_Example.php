<?php
    require './config.php';
    require './vendor/autoload.php';
    use Neka\Topup;

    var_dump(Topup::buy_request('09386510576',15000,'Ir','Ali Shop'));