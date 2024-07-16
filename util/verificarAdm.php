<?php 
require '../persistencia/conexao.php';

if(isset($_SESSION['admUser']) && !empty($_SESSION['admUser'])){
    require_once '../modelo/Usuario.class.php';
    $u = new Usuario();

    $listadm = $u->loggedAdm($_SESSION['admUser']);
    $nomeAdm = $listadm['adm'];
}else{
    header("Location: ../administrador/loginpageadm.php");
}
?>