<?php
    require './config.php';
    require './vendor/autoload.php';
    use Neka\AuthenticationTest;
    if(AuthenticationTest::test() == true){
      echo 'Authentication Ok! :)';
    }else{
      echo 'Authentication Failed! :( ';
    }
