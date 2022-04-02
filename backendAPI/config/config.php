<?php

  /* ========================================
   * this file contains all the configuration
   * needed to start the application
   * =======================================*/

   // ROOT Directory
   define('ROOT', getcwd());
 
   // Application path
   define('APPLICATION_PATH', ROOT.DS.'application');
   
   // Config path
   define('CONFIG_PATH', ROOT.DS.'config');
   // Framework path
   define('FRAMEWK_PATH', ROOT.DS.'framework');
   // Public path
   define('PUBLIC_PATH', ROOT.DS.'public');

   // Sub directories
   define('VIEWS_PATH', APPLICATION_PATH.DS.'views');
   

   // Database params
   define('DB_NAME','gestionrdvs');
   define('DB_USER','root');
   define('DB_HOST','127.0.0.1');
   define('DB_PASSWD','');

   // URL ROOT
   define('URLROOT', 'http://127.0.0.1/gestionRDVS/backendAPI');

   // Access Control Allow Origin
  //  define('ORIGIN', 'http://localhost/gbests');
   
   