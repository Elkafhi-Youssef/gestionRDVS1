

<?php

  // Define the directory deparator
const DS = DIRECTORY_SEPARATOR;
  require_once './config/config.php';

  // Autoload core classes
  spl_autoload_register(function($className ){
    try {
      require_once FRAMEWK_PATH.DS.$className.'.php';
    } catch (Exception $e) {
      die($e->getMessage());
    }
  });

  /**
   * 
   * Instantiate core class
   * 
   */
  new Core();
