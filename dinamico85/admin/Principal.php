<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - X</title>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
    <header id="principal">
        <nav id="cabecalho">
            <section id="titulo_topo">
                <img src="img/a-admin.png" alt="">
                <br>
                <p><a href="../Index.php"><i class="fa fa-close">Sair</i></a></p>
            </section>
        </nav>
        <nav id="corpo">
            <nav id="esquerdo">
                <section class="sessao">Categoria
                    <ul>
                        <li><a href="Principal.php?link=2"><i class="fa fa-tasks">Cadastrar</i></a></li>
                        <li><a href="Principal.php?link=3"><i class="fa fa-paint-brush">Editar</i></a></li>
                    </ul>
                </section>
                <section class="sessao">Post
                    <ul>
                        <li><a href="Principal.php?link=4"><i class="fa fa-tasks">Cadastrar</i></a></li>
                        <li><a href="Principal.php?link=5"><i class="fa fa-paint-brush">Editar</i></a></li>
                    </ul>
                </section>
                <section class="sessao">Notícia
                    <ul>
                        <li><a href="Principal.php?link=6"><i class="fa fa-tasks">Cadastrar</i></a></li>
                        <li><a href="Principal.php?link=7"><i class="fa fa-paint-brush">Editar</i></a></li>
                    </ul>
                </section>
                <section class="sessao">Banner
                    <ul>
                        <li><a href="Principal.php?link=8"><i class="fa fa-tasks">Cadastrar</i></a></li>
                        <li><a href="Principal.php?link=9"><i class="fa fa-paint-brush">Editar</i></a></li>
                    </ul>
                </section>
            </nav>
            <section id="direito">
                <?php
                        if(isset($_GET['link'])){
                            $link = $_GET['link'];
                            $pag[1]="home.php";
                            $pag[2]="frm_categoria.php";
                            $pag[3]="lista_categoria.php";
                            $pag[4]="frm_post.php";
                            $pag[5]="lista_post.php";
                            $pag[6]="frm_noticia.php";
                            $pag[7]="lista_noticia.php";
                            $pag[8]="frm_banner.php";
                            $pag[9]="lista_banner.php";
                            if(!empty($link)){
                                if(file_exists($pag[$link])){
                                    include $pag[$link];
                                }
                                else{
                                    include $pag[1];
                                }
                            }
                        }
                        else{
                            include "home.php";
                        }
                    ?>
            </section>
        </nav>
    </header>
</body>
</html>