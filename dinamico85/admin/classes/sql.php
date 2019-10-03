<?php
    include_once('../Conexao.php');
    class SQL extends PDO{
        private $cn;
        public function __construct(){
            $this->cn = new PDO("mysql:host=".IP_SERVER_DB.";dbname=".NOME_BANCO,USER_DB,PASS_DB);
            $cn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
    }
?>