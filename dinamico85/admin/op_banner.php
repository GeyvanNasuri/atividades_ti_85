<?php
    if(isset($_POST['txt_banner'])){
        require_once('Conexao.php');
        $titulo = $_POST['txt_banner'];
        $link = $_POST['url_banner'];
        $img = $_POST['img_banner'];
        $alt = $_POST['alt_banner'];
        $banner_ativo = isset($_POST['check_banner'])?'1':'0';
        $cmd = $cn->prepare('INSERT INTO banner (titulo_banner, link_banner, img_banner, alt, banner_ativo) VALUES (:titulo_banner, :link_banner, :img_banner, :alt, :banner_ativo)');
        $cmd->execute(array(
            ':titulo_banner' => $titulo,
            ':link_banner' => $link,
            ':img_banner' => $img,
            ':alt' => $alt,
            ':banner_ativo' => $banner_ativo
        ));
        header('location:Principal.php?link=8&msg=ok');
    }
    
    function listar_banner(){
        require_once('Conexao.php');
        $query = 'select * from banner';
        $cmd = $cn->prepare($query);
        $cmd->execute();
        return $cmd->fetchAll(PDO::FETCH_ASSOC);
    }
?>