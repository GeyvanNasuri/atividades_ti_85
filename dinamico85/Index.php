<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <header id="estrutura">
        <nav id="topo" class="espacamento"></nav>
        <nav id="menu">
            <ul>
                <li><a href="index.php?link=1"><i class="fa fa-home">Home</i></a></li>
                <li><a href="#"><i class="fa fa-wrench">Serviços</i></a></li>
                <li><a href="index.php?link=3"><i class="fa fa-dropbox">Produtos</i></a></li>
                <li><a href="#"><i class="fa fa-phone-square">Contatos</i></a></li>
            </ul>
        </nav>
        <nav id="banner" class="banner"></nav>
        <section id="corpo">
            <nav id="esquerda" class="esquerda">
                <h1>Produtos</h1>
                <li><a href="Index.php?link=5"><i>Produto 1</i></a></li>
                <li><a href="Index.php?link="><i>Produto 2</i></a></li>
                <li><a href="Index.php?link="><i>Produto 3</i></a></li>
                <li><a href="Index.php?link="><i>Produto 4</i></a></li>
            </nav>
            <nav id="centro" class="centro">
                <?php
                    $link = $_GET['link'];
                    $pag[1] = "home.php";
                    $pag[5] = "produto.php";
                    if (!empty($link)){
                        if(file_exists($pag[$link])){
                            include($pag[$link]);
                        }
                        else{
                            include($pag[1]); // mostre o home
                        }
                    }
                    else{
                        include($pag[1]); // mostre o home
                    }
                    
                ?>
            </nav>
            <nav id="direita" class="direita">
                <div id="noticias">
                    <h3>Imagem notícia</h3>
                    <div class="itens-noticias">
                        <span>08/09/2018</span>
                        <a href="index.php?link=">Lançamento do dia</a>
                    </div>
                    <div class="itens-noticias">
                        <span>18/10/2018</span>
                            <a href="index.php?link=">Lançamento do dia</a>
                    </div>                    
                    <div class="itens-noticias">
                        <span>07/03/2018</span>
                            <a href="index.php?link=">Lançamento do dia</a>
                    </div>
                    <div class="itens-noticias">
                        <span>02/01/2018</span>
                        <a href="index.php?link=">Lançamento do dia</a>
                    </div>
                </div>
                <div id="adm">
                    Área do Administrador
                    <a href="admin/index.php">Acesso a áre administrativa</a>
                </div>
            </nav>
        </section>
        <footer id="rodape" class="container bg-gradient">
            <div class="social-icons">
                <a href="https://www.facebook.com/gabriel.vergilio.5" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fa fa-google"></i></a>
                <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                <a href="#" target="_blank"><i class="fa fa-envelope"></i></a>
            </div>
            <p class="copyright">
                Copyright © Dos Titios 2019. Todos os direitos reservados.
            </p>
        </footer>
    </header>
</body>
</html>