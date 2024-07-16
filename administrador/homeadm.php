<?php 
require '../util/verificarAdm.php';

if(isset($_SESSION['admUser']) && !empty($_SESSION['admUser'])):


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/homeadm.css">
    <link rel="icon" href="../img/dropbarbershop-67hs_64ff5e61801ba.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ADM | DropBarbershop</title>
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
                    <a id="link" onclick="openSidebar()" href="lista_de_usu.php">Usuários</a>
                    <a id="link" onclick="openSidebar()" href="lista_de_pd.php">Pedidos</a>
                    <a id="link" onclick="openSidebar()" href="../metodo/logoutAdm.php">Sair</a>
                    
                </div>
            
         
        </div>
    </div>
    <main tabindex="0" onclick="closeSidebar()" id="main">
        <section class="topo hidden">
           
                <div class="flex">
                    
                       
                    
                </div>
        </section> 
    
</body>
</html>
<?php else: header("Location: loginpageadm.php"); endif; ?>