<?php
    require './config.php';
    require './vendor/autoload.php';
    use Neka\Pin;

    Pin::add(1,10000,2); //Add 2 Pin's Mci 10000IRR | add(Operator number,Amount,Count)
    Pin::add(2,10000,1); //Add 1 Pin Irancell 10000IRR | add(Operator number,Amount,Count)

    var_dump(Pin::send_request());