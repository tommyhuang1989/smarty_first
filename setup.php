<?php
   require_once 'libs/Smarty.class.php';

   Class sf_smarty_hello extends Smarty {
       function __contruct() {
           parent::__contruct();

           $this->setTemlateDir('templates/');
           $this->setCompileDir('templates_c/');
           $this->setConfigDir('configs/');
           $this->setCacheDir('cache/');

           $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
           $this->assign('app_name', 'hello');
       }
   }