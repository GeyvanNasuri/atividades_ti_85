# Removidos
## lista_categoria.php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Lista de Categoria</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <table id="tb_categoria">
        <tr>
            <th id="cod">Código</th>
            <th id="cat">Categoria</th>
            <th id="ati">Ativo</th>
            <th id="opc" colspan="2">Opções</th>
        </tr>
        <?php
            require_once('op_categoria.php');
            $categorias_retornadas = listar_categoria();
            if(count($categorias_retornadas)>0){
                foreach($categorias_retornadas as $categoria){
        ?>
        <tr>
            <td><?php echo $categoria['id_categoria'];?></td>
            <td><?php echo $categoria['categoria'];?></td>
            <td><?php echo $categoria['cat_ativo']=='1'?'Sim':'Não'; ?></td>
            <td style="text-align: center; font-size: 2; font: verdana, arial; color: white;"><a href="Principal.php?link="><i>Alterar</i></a></td>
            <td style="text-align: center; font-size: 2; font: verdana, arial; color: white;"><a href="Principal.php?link="><i>Excluir</i></a></td>
        </tr>
    </table>
    <?php } } ?>
    
</body>
</html>

# dinamico_85
projeto da UC 12

## Preparação do ambiente 25 / 09 / 2019

### Criação de pastas e principais da arvore

#'select * from ´tabela´ where nome like %'+Nome+'%';