<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADM</title>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
    <section id="box-login">
        <nav id="formulario-login">
            <form id="frmlogin" name="frmlogin" action="op_login.php" method="post">
                <fieldset>
                    <legend>Faça o Login - Área Administrativa</legend>
                    <label for=""><span>Login</span></label>
                    <input type="text" name="txt_login" id="txt_login">
                    <label for=""><span>Senha</span></label>
                    <input type="password" name="txt_senha" id="txt_senha">
                    <input type="submit" name="logar" id="logar" value="logar" class="botao">
                </fieldset>
            </form>
        </nav>
    </section>
</body>
</html>