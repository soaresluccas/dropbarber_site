<?php 
    require '../persistencia/conexao.php';
    require_once '../modelo/Usuario.class.php';

    if(isset($_SESSION['admUser']) && !empty($_SESSION['admUser'])):

        $termo_busca = '';

        if (isset($_GET['busca']) && !empty($_GET['busca'])) {
            $termo_busca = $_GET['busca'];

            $sql = "SELECT * FROM horarios WHERE telefone LIKE :termo OR data LIKE :termo OR horarioBarbeiro LIKE :termo OR servico LIKE :termo OR mensagem LIKE :termo OR codigo = :codigo OR nome LIKE :termo OR email LIKE :termo";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':termo', "%$termo_busca%");
            $stmt->bindValue(':codigo', $termo_busca);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
        
            $sql = "SELECT * FROM horarios";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo-pedidos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Pedidos</title>
</head>
<body>
    <div class="header" id="header">
        <div class="interface">
            <button onclick="openSidebar()" class="btn_icon_header">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list-nested" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.5 11.5A.5.5 0 0 1 5 11h10a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5m-2-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m-2-4A.5.5 0 0 1 1 3h10a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5"/>
                  </svg>
            </button>

                <div class="logotipo">
                    <img src="../img/logo.png" alt="logotipo">
                </div>
           
                <div class="navbar-hd" id="navbar-hd">
                    <button onclick="openSidebar()" class="btn_icon_header">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </button>
                    <a id="link" onclick="openSidebar()" href="homeadm.php">home</a>
                    <a id="link" onclick="openSidebar()" href="lista_de_usu.php">Usuários</a>
                    
                    
                    
                </div>
            
         
        </div>
    </div>

    <div class="buscar">
        <form method="GET" action="lista_de_pd.php">
            <label for="busca">Buscar:</label>
            <input type="text" id="busca" name="busca" oninput="buscarPedidos()">
            <button type="submit">Buscar</button>
        </form>
    </div>
    <div class="container">
       
        <p>
        <?php 
        if ($result) {
        ?>
             <table summary="Tabela de pedidos" border="1">
                 <caption>Pedidos</caption>
                 <thead>
                     <tr>
                         <th>Telefone</th>
                         <th>Data</th>
                         <th>Hora</th>
                         <th>Serviço</th>
                         <th>Mensagem</th>
                         <th>codigo</th>
                         <th>nome</th>
                         <th>email</th>
                         
                     </tr>
                 </thead>
                 <tbody>
                 <?php
                // Preenche a tabela com os dados obtidos da consulta SQL
                foreach ($result as $row) {
                    echo "<tr>";
                    echo "<td>{$row['telefone']}</td>";
                    echo "<td>{$row['data']}</td>";
                    echo "<td>{$row['horarioBarbeiro']}</td>";
                    echo "<td>{$row['servico']}</td>";
                    echo "<td>{$row['mensagem']}</td>";
                    echo "<td>{$row['codigo']}</td>";
                    echo "<td>{$row['nome']}</td>";
                    echo "<td>{$row['email']}</td>";
                    echo "<td><button class='btn-clear'><a id='link' href='editar-pedido.php?codigo={$row['codigo']}'><i class='bi bi-pencil-square'></i></a></button></td>";
                    echo "<td><button class='btn-clear'><a id='link' href='processar_exclusao_pd.php?idHora={$row['idHora']}'><i class='bi bi-trash'></i></a></button></td>";
                    echo "</tr>";
                    
                }
                ?>

                 </tbody>
             </table>
             <?php
                } else {
                    echo "<p>Você ainda não tem horários agendados.</p>";
                }
             ?>      
         </p>
         
        </div>
    
</body>
</html>
<script>
        function buscarPedidos() {
            // Obtém o valor da caixa de pesquisa
            var termo = document.getElementById('busca').value;

            // Faz uma solicitação AJAX para buscar pedidos
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Atualiza a tabela com os resultados
                    document.getElementById('tabela-pedidos').innerHTML = xhr.responseText;
                }
            };
            xhr.open('GET', 'lista_de_pd.php?busca=' + termo, true);
            xhr.send();
        }
</script>
<?php else: header("Location: loginpageadm.php"); endif; ?>