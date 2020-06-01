<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formalario de Sintomas</title>
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="conteiner">
            <div class="conten primeiroconteiner">
                <div class="acessainfor">
                    <h2 class="titulo titulo-primario">Informaçãos</h2>
                    <p class="descricao descricao-primaria ">Olá aqui temos a lista de dados</p>
                    <button class="btn btn-primario " id="acessor1">Acessar</button>
                </div>
                <div class="form">
                    <form method="get"action="Grava.php" class="formulario" >
                        <h2 class="titulo titulo-segundario" >Seus dados</h2>
                        <p class="descricao descricao-segundaria ">preenchar o formulário</p>
                         
                        Nome:<input name="nome" class="input is-large" placeholder="Seu nome" autofocus="">
                           
                        Cidade:<input name="local" class="input is-large" type="text" placeholder="Sua cidade">
                        
                        Teve Febre?
                        <select name="febre">
                            <option value="sim" >Sim</option> 
                            <option value="não" >Não</option> 
                        </select>
                        
                        Teve Tosse?
                        <select name="tosse">
                            <option value="sim" >Sim</option> 
                            <option value="não" >Não</option>
                        </select>
                        
                        Teve Dor de garganta?
                        <select name="garganta">
                            <option value="sim" >Sim</option> 
                            <option value="não" >Não</option>
                        </select>
        
                        Teve perda de paladar ou olfato?
                        <select name="paladarouolfato" placeholder="Selecione">
                            <option value="sim" >Sim</option> 
                            <option value="não" >Não</option>
                        </select>
                        
                        Teve dificuldade de respirar ou falta de ar?
                        <select name="dificuldadederespirarfaltadear">
                            <option value="sim" >Sim</option> 
                            <option value="não" >Não</option>
                        </select>
                        
                        Teve diarreia?
                        <select name="diarreia">
                            <option value="sim" >Sim</option> 
                            <option value="não" >Não</option>
                        </select>
                        
                        Teve conjuntivite?
                        <select name="conjuntivite">
                            <option value="sim" >Sim</option> 
                            <option value="não" >Não</option>
                        </select>
                        Teve dor ou pressão no peito?
                        <select name="dornopeito">
                            <option value="sim" >Sim</option> 
                            <option value="não" >Não</option>
                        </select>

                        <button type="submit" class="btn btn-segundario" >Salvar</button>
                    </form>
                </div>
            </div>
            <div class="conten segundoconteiner">
                <div class="acessainfor">
                    <h2 class="titulo titulo-primario">Volta ao formulário</h2>
                    <p class="descricao descricao-primaria">Olá aqui o cadastro de dados</p>
                    <button id="acessor2" class="btn btn-primario">Acessar</button>
                </div>
                <div class="form">
                    <form method="get"action="Grava.php" class="formulario">
                        <h2 class=" titulo titulo-segundario" >Lista de dados</h2>
                        
                        <?php
                            include("conecta.php");
                            $selecionar = mysqli_query($conexao,"select * from dados order by id desc");//pego todos os dados da tabela usuarios
                            while($campo = mysqli_fetch_array($selecionar)){?>
                            <tr>
                                <td>Nome:<?=$campo["nome"]?></td>
                                <td>Situação:<?=$campo["situa"]?></td>
                            </tr>
                            <br>
                        <?php }?>
                            </form>
                </div>
            </div>
        </div>
    
    <script src="js/ani.js"></script>
    </body>

</html>