<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Lista Categoria</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <table id="tb_categoria" width="100%" border="0" cellpadding="0" cellspacing="1" bg-color="#fcfcfc">
        <tr bg-color="#993300" text-align="center">
            <th width="10%" height="2"><font size="2" color="#fff">Código</font></th>
            <th width="50%" height="2"><font size="2" color="#fff">Categoria</font></th>
            <th width="15%" height="2"><font size="2" color="#fff">Ativo</font></th>
            <th colspan="2"><font size="2" color="#fff">Opções</font></th>
        </tr>
        <?php 
            require_once('op_categoria.php');
           $categorias_retornadas = listar_categoria();
           if(count($categorias_retornadas)>0){
           foreach($categorias_retornadas as $categoria){
        ?>
        <tr>
            <td><font size="2" face="verdana, arial" color="#0cc" style="margin-left: 40%;">
                <?php echo $categoria['id_categoria']; ?></font></td>
            <td><font size="2" face="verdana, arial" color="#cc0" style="margin-left: 40%;">
                <?php echo $categoria['categoria']; ?></font></td>
            <td><font size="2" face="verdana, arial" color="#c0c" style="margin-left: 40%;">
                <?php echo $categoria['cat_ativo']=='1'?'Sim':'Não'; ?></font></td>
            <td text-align="center"><font size="2" face="verdana, arial" color="#fff">
                <a href="principal.php?link=" style="color: white; margin-left: 20%;"><i class="fa fa-pencil">Alterar</i></font></a></td>
            <td text-align="center"><font size="2" face="verdana, arial" color="#fff">
                <a href="principal.php?link=" style="color: white; margin-left: 20%;"><i class="fa fa-trash-o">Excluir</i></font></a></td>
        </tr>
<?php }} ?>
    </table>
    
</body>
</html>