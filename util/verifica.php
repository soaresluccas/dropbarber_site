<?php 
require 'persistencia/conexao.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){
    require_once 'modelo/Usuario.class.php';
    $u = new Usuario();

    $listlogged = $u->logged($_SESSION['idUser']);
    $nomeUser = $listlogged['nome'];
}else{
    header("Location: ../visao/cadastrar.php");
}
?>