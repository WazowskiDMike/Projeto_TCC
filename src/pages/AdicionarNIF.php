<?php
session_start();
if (!isset($_SESSION['nif'])) {
    unset($_SESSION['nif']);

    echo "<script>alert('Apenas funcionários com permissões podem acessar!');</script>";
    echo "<script>javascript:history.back()</script>";
    exit;
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/AdicionarNif.css">
    <link rel="shortcut icon" href="../images/favicon/favicon.ico" type="image/x-icon">
    <title>Adicionar docente</title>
</head>

<body>

    <header>
        <div class="header-topo">
            <img class="logo" src="../images/SENAI_São_Paulo_logo.jpeg" alt="">
        </div>
    </header>

    <br>

    <section class="titulo_01">
        <h3>Adicionar Docente</h3>
    </section>


    <br>
    
    <div class="seta">
        <a href="./../../index.php"><img class="seta-esquerda" src="../images/seta_esquerda.png"></a>
    </div>

    <br>

    <div class="caixa-cadastro">

        <form action="adicionarDocente.php" method="POST">
            <label for="nif">NIF:</label><br>
            <input type="text" name="nif" required>
            <br>
            <label for="nome">Docente:</label><br>
            <input type="text" name="nome" required>
            <br>
            <label>Permissão de Administrador:</label><br>
            <select name="perm">
            <option value="1">Sim</option>
            <option value="0" selected>Não</option>
            </select>
            <br>

            <div class="align-btn">
             <input type="submit" class="btn-enviar" value="Enviar">
            </div>

        </form>

    </div>

</body>

</html>