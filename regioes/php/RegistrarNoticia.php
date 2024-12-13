<?php
    if(isset($_POST['SubmitN']))
    {
        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) 
        {
            include_once('Config.php');

            $Tipo = $_POST['CheckN'];
            $Titulo = $_POST['TitleN'];
            $Subtitulo = $_POST['SubtitleN'];
            $Texto = $_POST['TextoN'];
            $Imagem = addslashes(file_get_contents($_FILES['imagem']['tmp_name']));

            $result = mysqli_query($Conection, 
            "INSERT INTO posts(PostTipo, PostTitulo, PostSubtitulo, PostTexto, PostImg)
            VALUE ('$Tipo', '$Titulo', '$Subtitulo', '$Texto', '$Imagem')");
        }
    }
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Reset.css">
    <link rel="stylesheet" href="regioes.css">

    <title>Document</title>
</head>

<body>
    <header class="header-s">
        <div class="container">
            <h1 class="logo">Bairro NaHora</h1>

            <nav class="menu">
                <ul>
                    <li><a href="../../index.html">Início</a></li>
                    <li><a href="noticias.html">Notícias</a></li>
                    <li><a href="contato.html">Contato</a></li>
                    <li><a class="active" href="sobre.html">Sobre</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <form action="RegistrarNoticia.php" method="post" enctype="multipart/form-data">
        <label for="NoticiaI">Noticia</label><input type="checkbox" id="NoticiaI" onchange="Change(1)">
        <label for="AnuncioI">Anuncio</label><input type="checkbox" id="AnuncioI" onchange="Change(2)"> 
        <label for="EventoI">Evento</label><input type="checkbox" id="EventoI" onchange="Change(3)"><br>

        <input type="hidden" id="CheckI" name="CheckN" value="">

        <input type="text" name="TitleN" maxlength="30"><br>
        <input type="text" name="SubtitleN" maxlength="45"><br>

        <textarea maxlength="1500" name="TextoN"></textarea><br>

        <input type="submit" name="SubmitN" value="Enviar" onclick="Sub()">

        <input type="file" name="imagem" required>
    </form>

    <script src="RegistrarNoticia.js"></script>
</body>

</html>