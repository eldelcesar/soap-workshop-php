<?php

    class server
    {
      public function __construct()
      {
        $this->con = (is_null($this->con)) ? self::connect() : $this->con;
      }

      static function connect()
      {
        $con = mysql_connect('localhost', 'root', 'root');
        $dv = mysql_select_db('example', $con);

        return $con;
      }
      
      public function getStudentName($id_array)
      {
          $id = $id_array['id'];
          $sql = "SELECT name FROM students WHERE id = '$id'";
          $qry = mysql_query($sql, $this->con);
          $res = mysql_fetch_array($qry);
          return $res['name'];
          //return 'Miguel';
      } 
    }


    $params = array('uri' => 'code/soap/server.php');
    $server = new SoapServer(NULL, $params);
    $server->setClass('server');
    $server->handle();
?>