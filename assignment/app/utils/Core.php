<?php
  /* 
   *  APP CORE CLASS
   *  Creates URL & Loads Core Controller
   *  URL Format - /controller/method/param1/param2
   */
  class Core {
    // Set Defaults
    protected $currentController = 'Home'; // Default controller
    protected $currentMethod = 'index'; // Default method
    protected $params = []; // Set initial empty params array

    public function __construct(){
      $url = $this->getUrl();
      if(strpos($url, '/') == false){
        $this->currentController = ucwords($url);
      } else {
        $this->currentController = ucwords(substr($url, 0, strpos($url, '/')));
        $this->params = [substr($url, strpos($url, '/')+1)];
      }

      if(isset($url) && file_exists('./app/controllers/'.$this->currentController.'.php')){
        $this->currentMethod = 'index';
      } else if(isset($url)){
        $this->currentMethod = 'error';
      }

      if($this->currentController == 'Model' && !isset($this->params)) $this->params = array('cocacola');

      require_once('./app/controllers/' . $this->currentController . '.php');

      $this->currentController = new $this->currentController;
      
      call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    // Construct URL From $_GET['url']
    public function getUrl(){
      $pageURI =$_SERVER['REQUEST_URI'];
      $pageURI =substr($pageURI,strrpos($pageURI,'index.php')+10);
	    if (!$pageURI)
		    return "home";
	    else
		    return $pageURI;
        // if(isset($_GET['url'])){
        //   $url = rtrim($_GET['url'], '/');
        //   $url = filter_var($url, FILTER_SANITIZE_URL);
        //   $url = explode('/', $url);
        //     return $url;
        // }
        // return [];
    }
  }