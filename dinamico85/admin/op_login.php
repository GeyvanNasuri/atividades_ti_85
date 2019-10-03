<?php
    // sem sabotagem
    include_once('../Config.php');
    require_once('Conexao.php');
    $txt_login = isset($_POST['txt_login'])?$_POST['txt_login']:'';
    $txt_senha = isset($_POST['txt_senha'])?$_POST['txt_senha']:'';

    // echo $txt_login.' - '.$txt_pass;

    if (empty($txt_login) || empty($txt_senha)) {
        echo 'preencha os dados corretamente';
        exit;
    }

    $query = 'SELECT * FROM administrador WHERE login= :login AND senha= :senha';
    $cmd = $cn->prepare($query);
    $cmd->bindParam(':login',$txt_login);
    $cmd->bindParam(':senha',$txt_senha);
    $cmd->execute();
    $user_return = $cmd->fetchAll(PDO::FETCH_ASSOC);
    if(count($user_return)>0){
        print '<script type="text/javascript">location.href="principal.php"</script>';
    }
    else{
        print '<meta http-equiv=refresh content = "0"; URL="Index.php">
        <script type="text/javascript">windown.alert("Login ou senha incorreta, tente de novo")</script>';
    }
?>

