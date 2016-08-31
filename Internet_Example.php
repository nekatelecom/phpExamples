<?php
    require './config.php';
    require './vendor/autoload.php';
    use Neka\Topup;

    var_dump(Topup::buy_request('093500...',175000,'Ir',null,null,false,"14")); // برای مثال خرید بسته با کد33 برای سیمکارت اعتباری ایرانسل
