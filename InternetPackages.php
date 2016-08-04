<?php
    require './config.php';
    require './vendor/autoload.php';
    use Neka\InternetPackages;
    var_dump(InternetPackages::get_packages());
