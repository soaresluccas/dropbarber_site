<?php
require '../persistencia/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    require '../modelo/Usuario.class.php';

    $u = new Usuario();


    $telefone = addslashes($_POST['txttelefone']);
    $data = addslashes($_POST['trip-start']);
    $horarioBarbeiro = addslashes($_POST['appt']);
    $servico = addslashes($_POST['selservico']);
    $mensagem = addslashes($_POST['textarea']);
    $u->cadastrarHorario($telefone, $data, $horarioBarbeiro, $servico, $mensagem);

    // Redireciona após cadastrar o horário
    header("Location: ../visao/meusHorarios.php");
} else {
    header("Location: ../visao/agendar.php");
}
?>

