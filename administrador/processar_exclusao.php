<?php
require '../persistencia/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $codUsuario = isset($_GET['codigo']) ? $_GET['codigo'] : null;

    if ($codUsuario) {
        $sql = "DELETE FROM usuarios WHERE codigo = :codigo";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':codigo', $codUsuario);

        if ($stmt->execute()) {
            header("Location: lista_de_usu.php");
            exit();
        } else {
            echo "Erro ao excluir o usuário. Motivo: " . implode(" - ", $stmt->errorInfo());
        }
    } else {
        echo "Código de usuário não fornecido.";
        exit();
    }
} else {
    echo "Método inválido.";
    exit();
}
?>