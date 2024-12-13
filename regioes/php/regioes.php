<?php
    include_once('Config.php');

    $sql = "SELECT * FROM posts WHERE ID = 0";

    $result = $Conection->query($sql);

    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()) 
        {
            $Tipo = $row["PostTipo"];
            $Titulo = $row["PostTitulo"];
            $Subtitulo = $row["PostSubtitulo"];
            $Texto = $row["PostTexto"];
            $Img = $row["PostImg"];
        }
    }
    else
    {
        echo "<P>0 resultados</p>";
    }
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bairro NaHora</title>

    <link rel="stylesheet" href="Reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../css/jf-inicio.css">
</head>

<body>
    <nav class="menu-lateral">
        <div class="btn-expandir">
            <i class="bi bi-list" id="botao-exp"></i>
        </div>
        <ul>
            <hr class="linha-home">
            <li class="item-menu">
                <a href="../páginas/JF.html">
                    <span class="icon"><img src="../../imgs/icons/icons8-casa-30.png" alt=""></i></span>
                    <span class="txt-link">início</span>
                </a>
            </li>
        </ul>

        <ul>
            <li class="item-menu">
                <a href="#">
                    <span class="icon">
                        <img src="../../imgs/icons/icons8-cidade-30.png" alt="">
                    </span>
                    <span class="txt-link">Regiões</span>
                </a>
                <div class="dropdown-container">
                    <ul class="dropdown">
                        <li><a href="#">Ceilândia Norte</a></li>
                        <li><a href="#">Ceilândia Sul</a></li>
                        <li><a href="#">P Sul</a></li>
                        <li><a href="#">Sol Nascente</a></li>
                    </ul>
                </div>
            </li>
        </ul>

        <ul>
            <li class="item-menu">
                <a href="../../páginas/eventos.html">
                    <span class="icon"><img src="../../imgs/icons/icons8-prato-30.png" alt=""></span>
                    <span class="txt-link">Anúncio/Eventos</span>
                </a>
            </li>
        </ul>


        <ul>
            <li class="item-menu">
                <a href="../../páginas/contato.html">
                    <!-- <span class="icon"><img src="../imgs/icons/icons8-mensagem-30.png" alt=""></i></span> -->
                    <span class="txt-link">Contato</span>
                </a>
            </li>
        </ul>


        <ul>
            <li class="item-menu">
                <a href="../../páginas/sobre.html">
                    <span class="icon"><img src="../../imgs/icons/icons8-sobre-30.png" alt=""></span>
                    <span class="txt-link">Sobre</span>
                </a>
            </li>
        </ul>
    </nav>

    <header class="header">
        <div class="container">
            <h1 class="logo">Bairro NaHora</h1>
            <nav class="menu">
                <ul>
                    <li><a class="active"href="">Início</a></li>
                    <li><a  href="sobre.html">Sobre</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div>
        <?php 
            echo '<div class="tematicas">';
            echo '  <h4>'."$Titulo".'</h4>';
            echo '  <h5>'."$Subtitulo".'</h5>';
            echo '</div>';

            echo '<div class="container-imagem">';
            echo '  <img src="data:image/jpeg;base64,'.base64_encode($Img).'" />';
            echo '  <p>'."$Texto".'</p>';
            echo '</div>';
        ?>
    </div>

    <footer class="gray-background">
        <div class="rodape">
            <div class="logo-rodape">
                <h1 class="logo">Bairro naHora</h1>
                <p>noticias quentinhas do seu bairro para você
                    &#128513;</p>
            </div>
        </div>

        <hr class="linha-final">

        <div class="linha">
            <p>&copy;Bairro naHora 2024 - Sempre com você </p>
        </div>
    </footer>

    <script src="regioes.js"></script>
</body>

</html>