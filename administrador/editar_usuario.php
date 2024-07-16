<?php 
require '../persistencia/conexao.php';

$codigo = isset($_GET['codigo']) ? $_GET['codigo'] : null;

if($codigo) {
    $sql = "SELECT * FROM usuarios WHERE codigo = :codigo";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':codigo', $codigo);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$usuario){
        header("Location: lista_de_usu.php");
        exit();
    }
}else{
    header("Location: lista_de_usu.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <title>editar usuário</title>
</head>
<body>

<body>
    
    <form action="processar_edicao.php" method="POST">
        <input type="hidden" name="codigo" value="<?php echo $usuario['codigo']; ?>">

        <label for="edt-nome">Nome:</label>
        <input type="text" id="edt-nome" name="edt-nome" value="<?php echo $usuario['nome']; ?>">

        <label for="edt-email">E-mail:</label>
        <input type="text" id="edt-email" name="edt-email" value="<?php echo $usuario['email']; ?>">

        

        <input type="submit" name="salvar-alt" value="Salvar Alterações">
    </form>

    
</body>
</html>