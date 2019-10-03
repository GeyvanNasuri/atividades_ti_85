<?php
    // arquivo de conexão de banco e depois será classe
    include_once('../Config.php');
    $cn = new PDO("mysql:host=".IP_SERVER_DB.";dbname=".NOME_BANCO,USER_DB,PASS_DB);
    $cn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>