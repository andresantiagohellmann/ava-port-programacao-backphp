<?php
include("conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha_simples = $_POST['senha'];
$senha = md5($senha_simples);

$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if (mysqli_query($conecta, $sql)) {
    echo "Cadastrado concluído!";
} else {
    echo "Erro no cadastro do usuário, verifique o log: " . mysqli_error($conecta);
}
mysqli_close($conecta);

?>