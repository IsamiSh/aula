<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 29/10/15
 * Time: 10:03
 */
require_once "conexaoDB.php";

echo "### Executando Fixture ###";

$conn = conexaoDB();

echo "Removendo tabela";
$conn->query("DROP TABLE IF EXISTS teste;");
echo " - Ok\n";

echo "Criar tabela";
$conn->query("CREATE TABLE teste (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) CHARACTER  SET 'utf8' NULL,
  PRIMARY KEY (id));
");
echo " - Ok\n";

echo "INSERINDO DADOS";
for($x = 0; $x <= 9; $x++){
    $nome = "Teste {$x}";

    $smt = $conn->prepare("INSERT INTO teste (nome) VALUE (:nome);");
    $smt->bindParam(":nome", $nome);
    $smt->execute();
}
echo " - Ok\n";

echo "### Concluido ###\n";