<?php
  // DB Params
  define("DB_USER", "user");
  define("DB_PASS", "password");

  // Global Variables
  define('APPROOT', dirname(dirname(dirname(__FILE__))));
  define('URLROOT', substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], 'index.php') + 9));
  define('BASEROOT', substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], 'index.php')));
  define('SITENAME', 'Cocacola');
  