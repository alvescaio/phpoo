<?php

class Conexao extends mysqli {

    // instancia unica 
    private $instance = null;
    
    private $user = "root";
    private $pass = "";
    private $dbName = "uniA2";
    private $dbHost = "localhost";

    
  
    public function __construct() {
        parent::__construct($this->dbHost, $this->user, $this->pass, $this->dbName);
        if (mysqli_connect_error ()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
        
        parent::select_db($this->dbName);
        parent::set_charset('utf-8');
             
    }

}

