<?php
    // require_once 'setup.php';
    require_once 'libs/Smarty.class.php';
//    require_once '../templates/hello.tpl';
    $smarty = new Smarty();//sf_smarty_hello();
    $smarty->testInstall();

    $smarty->assign('title', 'hello guys.');
    $smarty->assign('content', 'i want you');

    $smarty->display('hello.tpl');