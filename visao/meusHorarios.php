<?php 
require '../persistencia/conexao.php';
require_once '../modelo/Usuario.class.php';


if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):
    $idUser = $_SESSION['idUser'];

    
    $sql = "SELECT telefone, data, horarioBarbeiro, servico FROM horarios WHERE codigo = :idUser";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':idUser', $idUser, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/meusHorarios.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Meus Horários</title>
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
                    <a id="link" href="../index.php">Home</a>
                    <a id="link" onclick="openSidebar()" href="pages/galeria.html">Galeria</a>
                    <a id="link" onclick="openSidebar()" href="pages/profile.html">Profile</a>
                </div>
            
         
        </div>
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
                             <th>.......</th>
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
                        echo "<td><button class='btn-clear'><a id='link' href='../metodo/deletarHorario.php?idHora={$row['idHora']}'><i class='bi bi-trash'></i></a></button></td>";
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

    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                

                <div id="footer_social_media">
                    <a href="https://www.instagram.com/drop_barbershop/" target="_blank" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            
            <ul class="footer-list">
                <li>
                    <h3>Navegação</h3>
                </li>
                <li>
                    <a href="../index.php" class="footer-link">Home</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Topo</a>
                </li>
              
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Produtos</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">App</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Agendar</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Galeria</a>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3>Inscrever-se</h3>

                <p>
                    Digite seu e-mail para ser notificado sobre nossas soluções de notícias
                </p>

                <div id="input_group">
                    <input type="email" id="email">
                    <button>
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="footer_copyright">
            &copy; Copyright 2023, Drop Barbershop | Desenvolvido por <a target="_blank" href="https://lucasoaresprofile.000webhostapp.com/"> Lucas Soares</a>
        </div>
    </footer>
</body>
</html>
<?php else: header("Location: cadastrar.php"); endif; ?>