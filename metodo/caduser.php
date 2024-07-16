<?php


if (
    isset($_POST['txtnome']) && !empty($_POST['txtnome']) &&
    isset($_POST['txtemail']) && !empty($_POST['txtemail']) &&
    isset($_POST['txtsenha']) && !empty($_POST['txtsenha'])
) {
    require '../persistencia/conexao.php';
    require '../modelo/Usuario.class.php';

    $u = new Usuario();

    $nome = addslashes($_POST['txtnome']);
    $email = addslashes($_POST['txtemail']);
    $senha = addslashes($_POST['txtsenha']);

    // Aqui você pode realizar alguma validação antes de chamar a função de cadastro

    if ($u->cadastrar($nome, $email, $senha)) {
        // Cadastro realizado com sucesso
        header("Location: ../index.php");
    } else {
        // Erro no cadastro, redireciona para a página de cadastro novamente ou trata de alguma forma
        header("Location: ../visao/cadastrar.php");
    }
} else {
    // Redireciona para a página de cadastro caso os campos não estejam preenchidos
    header("Location: ../visao/cadastrar.php");
}
?>
