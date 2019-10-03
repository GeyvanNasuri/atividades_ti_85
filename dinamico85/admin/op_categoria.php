<?php
    if(isset($_POST['txt_categoria'])){
        require_once('Conexao.php');
        $categoria = $_POST['txt_categoria'];
        $ativo = isset($_POST['check_ativo'])?'1':'0';
        $cmd = $cn->prepare('INSERT INTO categoria  (categoria, cat_ativo) VALUES (:cat, :ativ)');
        $cmd->execute(array(
            ':cat' => $categoria,
            ':ativ' => $ativo
        ));
        header('location:Principal.php?link=2&msg=ok');
    }

    function listar_categoria(){
        require_once('Conexao.php');
        $query = 'select * from categoria';
        $cmd = $cn->prepare($query);
        $cmd->execute();
        return $cmd->fetchAll(PDO::FETCH_ASSOC);
    }
?>