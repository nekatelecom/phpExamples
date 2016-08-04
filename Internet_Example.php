<?php
    require './config.php';
    require './vendor/autoload.php';
    use Neka\Topup;

    var_dump(Topup::buy_request('09386510576',175000,'Ir',null,null,false,33)); // InternetPackage Code IS:33