<?php
require '../persistencia/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $idHora = isset($_GET['idHora']) ? $_GET['idHora'] : null;

    if ($idHora) {
        $sql = "DELETE FROM horarios WHERE idHora = :idHora";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':idHora', $idHora);

        if ($stmt->execute()) {
            header("Location: lista_de_pd.php");
            exit();
        } else {
            echo "Erro ao excluir o horário. Motivo: " . implode(" - ", $stmt->errorInfo());
        }
    } else {
        echo "ID do horário não fornecido.";
        exit();
    }
} else {
    echo "Método inválido.";
    exit();
}
?>
