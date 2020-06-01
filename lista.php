<html>
    <head>
    <meta charset="utf-8">
    <script src="script.js"></script>
    </head>
    <body>
        <h1>Listagem de Dados</h1>
        <table width="100%" borde="1" bordercolor="#EEE" cellspacing="0">
        <tr>
            <td><strong>Nome</strong></td>
            <td><strong>Situação</strong></td>
        </tr>
        <?php
        include("conecta.php");
        $selecionar = mysqli_query($conexao,"select * from dados order by id desc");//pego todos os dados da tabela usuarios
        while($campo = mysqli_fetch_array($selecionar)){?>
        <tr>
            <td><?=$campo["nome"]?></td>
            <td><?=$campo["situa"]?></td>
        </tr>
       <?php }?>
        </table>
    </body>


</html>