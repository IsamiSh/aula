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
            <form action="contato.php" method="POST">
                <fieldset>
                    <legend>Dados enviado com Sucesso !</legend>
                    <label>Segue os dados enviados:</label>
                        <label>Nome: <?php echo $_POST["nome"];?></label>
                        <label>E-mail: <?php echo $_POST["email"];?></label>
                        <label>Assunto: <?php echo $_POST["assunto"];?></label>
                        <label>Mensagem: <?php echo $_POST["mensagem"];?></label>
                    <button type="submit" class="btn">Voltar</button>
                </fieldset>
            </form>
        </div>
    </body>
</html>
