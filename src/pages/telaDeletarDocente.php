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
    <link rel="stylesheet" href="../css/ExcluirDocente.css">

    <title>Excuir Docente</title>
</head>

<body>

<header>
        <div class="header-topo">
            <img class="logo" src="../images/SENAI_São_Paulo_logo.jpeg" alt="">
        </div>
    </header>

    <br>

    <section class="titulo_01">
        <h3>Excuir Docente</h3>
    </section>


    <br>
    
    <div class="seta">
        <a href="./../../index.php"><img class="seta-esquerda" src="../images/seta_esquerda.png"></a>
    </div>

    <br>

    <form method="post" action="deletarDocente.php">

        <table>

            <thead>

                <tr>
                    <th>NIF</th>
                    <th>NOME</th>
                    <th>Deletar</th>
                </tr>

            </thead>

            <tbody>

                <?php
                include_once('conexao.php');

                $sql = "SELECT * FROM docentes";
                $resultado_registro = $conn->query($sql);


                    while ($row_registro = mysqli_fetch_assoc($resultado_registro)) {
                        echo "<tr>";
                        echo "<td>" . $row_registro['nif'] . "</td>";
                        echo "<td>" . $row_registro['nome'] . "</td>";
                        echo "<td>";
                        echo "<p>";
                        echo "<input type='checkbox' name='excluir[]' value='" . $row_registro['nif'] . "' >";
                        echo "</p>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>

            </tbody>

        </table>

        <div class="align-btn">

            <button class="btn-button" type="submit" name="excluir_registros" id="btnExcluir">Excluir</button>
            <button class="btn-button" type="button"><a href="homeAdmin.php" id="btnVoltar">Voltar</a></button>
        </div>

        
    </form>

</body>
</html>