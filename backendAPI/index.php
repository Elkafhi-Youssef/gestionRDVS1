

<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');
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
