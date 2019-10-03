<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banner</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header id="box-cadastro">
        <nav id="formulario-menor">
            <form action="op_banner.php" method="POST" name="frmbanner" id="frmbanner">
                <fieldset>
                    <legend>Cadastro de Banner</legend>
                    <label>
                        <span>Titulo do Banner</span>
                        <input type="text" name="txt_banner" id="txt_banner" required>
                    </label>
                    <label>
                        <span>Link do Banner</span>
                        <input type="text" name="url_banner" id="url_banner" required>
                    </label>
                    <label>
                        <span>Imagem do Banner</span>
                        <input type="text" name="img_banner" id="img_banner">
                    </label>
                    <label>
                        <span>Alt</span>
                        <input type="text" name="alt_banner" id="alt_banner" required>
                    </label>
                    <nav>
                        <p id="p_ativo">Ativo
                            <input type="checkbox" name="check_banner" id="check_banner" checked>
                        </p>
                        <br>
                        <input type="submit" value="Cadastrar" class="botao" name="btn_cadastrar">
                        <span><?php echo isset($_GET['msg'])?'Sucesso':''; ?></span>
                    </nav>
                </fieldset>
            </form>
        </nav>
    </header>
</body>
</html>