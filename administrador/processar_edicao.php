<?php 
require '../persistencia/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : null;
    $nome = isset($_POST['edt-nome']) ? $_POST['edt-nome'] : null;
    $email = isset($_POST['edt-email']) ? $_POST['edt-email'] : null;

    
    $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE codigo = :codigo";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':codigo', $codigo);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    
    if ($stmt->execute()) {
        
        header("Location: lista_de_usu.php");
        exit();
    } else {
       
        echo "Erro ao atualizar o usuário. Motivo: " . implode(" - ", $stmt->errorInfo());
    }
} else {
    
    echo "Erro";
    exit();
}

?>