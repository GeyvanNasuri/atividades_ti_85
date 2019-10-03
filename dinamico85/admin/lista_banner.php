<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Lista Banner</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <table id="tb_banner" width="100%" border="0" cellpadding="0" cellspacing="1" bg-color="#fcfcfc">
        <tr bg-color="#993300" text-align="center">
            <th width="10%" height="2"><font size="2" color="#fff">Código</font></th>
            <th width="15%" height="2"><font size="2" color="#fff">Titulo do Banner</font></th>
            <th width="20%" height="2"><font size="2" color="#fff">Link do Banner</font></th>
            <th width="25%" height="2"><font size="2" color="#fff">Imagem do Banner</font></th>
            <!-- <th width="10%" height="2"><font size="2" color="#fff">Alt</font></th> -->
            <th width="10%" height="2"><font size="2" color="#fff">Ativo</font></th>
            <th colspan="2"><font size="2" color="#fff">Opções</font></th>
        </tr>
        <?php 
            require_once('op_banner.php');
           $banners_retornados = listar_banner();
           if(count($banners_retornados)>0){
           foreach($banners_retornados as $banner){
        ?>
        <tr>
            <td><font size="2" face="verdana, arial" color="#0cc">
                <?php echo $banner['id_banner']; ?></font></td>
            <td><font size="2" face="verdana, arial" color="#cc0">
                <?php echo $banner['titulo_banner']; ?></font></td>
            <td><font size="2" face="verdana, arial" color="#cc0">
                <?php echo $banner['link_banner']; ?></font></td>
            <td><font size="2" face="verdana, arial" color="#cc0">
                <?php echo $banner['img_banner']; ?></font></td>
            <!-- <td><font size="2" face="verdana, arial" color="#cc0">
                <#?php echo $banner['alt']; ?></font></td> -->
            <td><font size="2" face="verdana, arial" color="#c0c">
                <?php echo $banner['banner_ativo']=='1'?'Sim':'Não'; ?></font></td>
            <td text-align="center"><font size="2" face="verdana, arial" color="#fff">
                <a href="principal.php?link=" style="color: white; margin-left: 20%;"><i class="fa fa-pencil">Alterar</i></font></a></td>
            <td text-align="center"><font size="2" face="verdana, arial" color="#fff">
                <a href="principal.php?link=" style="color: white; margin-left: 20%;"><i class="fa fa-trash-o">Excluir</i></font></a></td>
        </tr>
<?php }} ?>
    </table>
    
</body>
</html>