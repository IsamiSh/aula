<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Aula</title>
            <?php require_once ("configuracao.php");?>
    </head>
    <body>
    <?php require_once ("menu.php"); ?>
        <div class="span5 offset5">
            <form action="formulario.php" method="POST">
                <fieldset>
                    <legend>Contato</legend>
                        <label>Nome:</label>
                            <input type="text" name="nome" placeholder="Nome Completo">
                        <label>E-mail:</label>
                            <input type="text" name="email" placeholder="E-mail">
                        <label>Assunto:</label>
                            <input type="text" name="assunto" placeholder="Assunto">
                        <label>Mensagem:</label>
                            <textarea rows="5" cols="10" name="mensagem" class="span5"></textarea>
                    <button type="submit" class="btn">Enviar</button>
                </fieldset>
            </form>
        </div>
    </body>
</html>
