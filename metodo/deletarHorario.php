<?php   
    if(!empty($_GET['idHora'])){
        require '../persistencia/conexao.php';
        $idHora = $_GET['idHora'];

        $sqlSelect = "SELECT * FROM pedidos WHERE idPedidos=$idHora";
        $result = $pdo->query($sqlSelect);

        if ($result->num_rows > 0){
            $sql = "DELETE FROM horarios WHERE idHora=?";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("idHora", $idHora);
            $sql->execute();

        }
    }   
?>