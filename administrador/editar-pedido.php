<?php 
    require '../persistencia/conexao.php';

    $codPedido = isset($_GET['codigo']) ? $_GET['codigo'] : null;
    
    if ($codPedido) {
        $sql = "SELECT * FROM horarios WHERE codigo = :codigo";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':codigo', $codPedido);
        $stmt->execute();
    
        $pedido = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if (!$pedido) {
            header("Location: lista_de_pd.php");
            exit();
        }
    } else {
        header("Location: lista_de_pd.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <title>Editar Pedido</title>
</head>
<body>
    <form action="processar_edicao_pd.php" method="POST">
        <input type="hidden" name="codigo" value="<?php echo $pedido['codigo']; ?>">

        <label for="edt-telefone">Telefone:</label>
        <input type="text" id="edt-telefone" name="edt-telefone" value="<?php echo $pedido['telefone']; ?>">

        <label for="edt-data">Data:</label>
        <input type="date" id="edt-data" name="edt-data" value="<?php echo $pedido['data']; ?>">

        <label for="edt-horario">Horário:</label>
        <input type="time" id="edt-horario" name="edt-horario" value="<?php echo $pedido['horarioBarbeiro']; ?>">

        <label for="edt-servico">Serviço:</label>
        <input type="text" id="edt-servico" name="edt-servico" value="<?php echo $pedido['servico']; ?>">

        <label for="edt-mensagem">Mensagem:</label>
        <textarea id="edt-mensagem" name="edt-mensagem"><?php echo $pedido['mensagem']; ?></textarea>

        

        <input type="submit" name="salvar-alt" value="Salvar Alterações">
    </form>
</body>
</html>