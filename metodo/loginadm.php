<?php 
if(isset($_POST['txtadm']) && !empty($_POST['txtadm']) && isset($_POST['txtsenha-adm']) && !empty($_POST['txtsenha-adm'])){

    require '../persistencia/conexao.php';
    require '../modelo/Usuario.class.php';

    $u = new Usuario();

    $adm = addslashes($_POST['txtadm']);
    $senha = addslashes($_POST['txtsenha-adm']);

    if($u->logarAdm($adm, $senha) === true){
        if(isset($_SESSION['admUser'])){
            header("Location: ../administrador/homeadm.php");
        }else{
            header("Location: ../administrador/logipagenadm.php");
        }
    }else{
        header("Location: ../administrador/logipagenadm.php");
    }

    
}else{
    header("Location: ../administrador/loginpageadm.php");
}


?>