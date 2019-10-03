<?php
    // inicializar a sessão usuário
    if (!isset($_SESSION)) {
        session_start();
    }

    // definido padrão de Zona GMT (Time Zone) -3,0
    date_default_timezone_get('America/Sao_Paulo');

    // inicia carregamento das classes do projeto
    spl_autoload_register(function($nome_classe){
        $nome_arquivo = 'class'.DIRECTORY_SEPARATOR.$nome_classe.'.php';
        if (file_exists($nome_arquivo)) {
            require_once($nome_arquivo);
        }
    });

    // criar constantes do servidor de banco de dados
    define('IP_SERVER_DB', '127.0.0.1');
    define('HOSTNAME', 'ITQ0626040W10-1');
    define('NOME_BANCO', 'dinamico_db');
    define('USER_DB', 'root');
    define('PASS_DB', '');

?>