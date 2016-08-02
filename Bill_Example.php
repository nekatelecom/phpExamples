<?php
    require './config.php';
    require './vendor/autoload.php';
    use Neka\Bill;
    var_dump(Bill::Pay_bill('2895691809050','32852433'));
