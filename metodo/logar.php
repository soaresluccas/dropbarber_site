<?php 

if(isset($_POST['txtemail']) && !empty($_POST['txtemail']) && isset($_POST['txtsenha']) && !empty($_POST['txtsenha'])){

    require '../persistencia/conexao.php';
    require '../modelo/Usuario.class.php';

    $u = new Usuario();

    $email = addslashes($_POST['txtemail']);
    $senha = addslashes($_POST['txtsenha']);

    if($u->login($email, $senha) === true){
        if(isset($_SESSION['idUser'])){
            header("Location: ../index.php");
        }else{
            header("Location: ../visao/cadastrar.php");
        }
    }else{
        header("Location: ../visao/cadastrar.php");
    }

    
}else{
    header("Location: ../visao/cadastrar.php");
}





?>