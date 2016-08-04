<?php
    require './config.php';
    require './vendor/autoload.php';
    use Neka\AuthenticationTest;
	$test = AuthenticationTest::test();
    if(isset($test['status']) AND $test['status'] == true){
      echo 'Authentication Ok! :)';
    }else{
      echo 'Authentication Failed! :( ';
    }
