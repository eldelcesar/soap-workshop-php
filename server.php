<?php

    class server
    {
      public function __construct()
      {
        $this->con = (is_null($this->con)) ? self::connect() : $this->con;
      } 
      
      public function getStudentName($id_array)
      {
          return 'Miguel';
      } 
    }


    $params = array('uri' => 'code/soap/server.php');
    $server = new SoapServer(NULL, $params);
    $server->setClass('server');
    $server->handle();
?>