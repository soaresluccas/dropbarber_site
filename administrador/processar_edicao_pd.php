<?php
require '../persistencia/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $codPedido = isset($_POST['codigo']) ? $_POST['codigo'] : null;
    $telefone = isset($_POST['edt-telefone']) ? $_POST['edt-telefone'] : null;
    $data = isset($_POST['edt-data']) ? $_POST['edt-data'] : null;
    $horario = isset($_POST['edt-horario']) ? $_POST['edt-horario'] : null;
    $servico = isset($_POST['edt-servico']) ? $_POST['edt-servico'] : null;
    $mensagem = isset($_POST['edt-mensagem']) ? $_POST['edt-mensagem'] : null;

    // Adicione os binds restantes conforme necessário
    
    $sql = "UPDATE horarios SET telefone = :telefone, data = :data, horarioBarbeiro = :horario, servico = :servico, mensagem = :mensagem WHERE codigo = :codigo";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':codigo', $codPedido);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':data', $data);
    $stmt->bindParam(':horario', $horario);
    $stmt->bindParam(':servico', $servico);
    $stmt->bindParam(':mensagem', $mensagem);
    
    if ($stmt->execute()) {
        
        header("Location: lista_de_pd.php");
        exit();
    } else {
       
        echo "Erro ao atualizar o pedido. Motivo: " . implode(" - ", $stmt->errorInfo());
    }
} else {
    
    echo "Erro";
    exit();
}
?>
