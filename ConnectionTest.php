<?php
    require './config.php';
    require './vendor/autoload.php';
    use Neka\ConnectionTest;
    if(ConnectionTest::test(md5(rand())) == true){
      echo 'Connection Ok! :)';
    }else{
      echo 'Connection Failed! :( ';
    }
