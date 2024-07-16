<?php 
require '../persistencia/conexao.php';
require_once '../modelo/Usuario.class.php';
if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):
    $u = new Usuario();
    $userData = $u->logged($_SESSION['idUser']);
    $nomeUser = $userData['nome'];
    $emailUser = $userData['email'];
    if(isset($_POST['btn-salvar-n'])) {
        $novoNome = addslashes($_POST['txtnome']);

        $u->atualizarNome($_SESSION['idUser'], $novoNome);

        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }

    if (isset($_POST['btn-salvar'])) {
        // Verifique se o botão "Salvar" foi pressionado
        $novoEmail = addslashes($_POST['txtemail']);
        
        // Atualize o e-mail no banco de dados
        $u->atualizarEmail($_SESSION['idUser'], $novoEmail);
        
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }


    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/swiper-bundle.min.css">
    <link rel="stylesheet" href="../estilo/minhaconta.css">
    <link rel="icon" href="../img/dropbarbershop-67hs_64ff5e61801ba.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Minha Conta</title>
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
                    <a id="link" onclick="openSidebar()" href="#sobre">Sobre</a>
                    <a id="link" onclick="openSidebar()" href="../pages/galeria.html">Galeria</a>
                    <a id="link" onclick="openSidebar()" href="../pages/profile.html">Profile</a>
                    <a id="link" onclick="openSidebar()" href="../metodo/logout.php">Sair</a>
                  
                    <!-- <a onclick="openSidebar()" id="a-c" href="visao/cadastrar.php"><button class="btn btn-primary">Conectar-se</button></a>  -->
                </div>
            
         
        </div>
    </div>

<main>
        <section class="minha-conta">
            <div class="interface">
                <div class="flex">
                    <div class="profile-container">
                            <div class="profile-titulo">
                                <h1>Sua Conta</h1>
                            </div>

                            <div class="grid-profile">
                                <div class="profile-nome">
                                    <form action="" method="POST">
                                    <label class="label-input" for="txtnome">
                                        <i class="far fa-user icon-modify"></i>
                                        <input type="text" id="txtnome-e" name="txtnome" value="<?php echo $nomeUser;?>" disabled="">
                                        <input type="submit" name="btn-salvar-n" id="btns" class="btn btn-second" value="Salvar">
                                        
                                    </label>    
                                    </form>
                                    <button class="btn-edit" id="editar-nome" onclick="enableNameInput()"><i class="bi bi-pencil-square"></i></button>
                                </div>
                            </div>
                            <div class="grid-details">
                                <div class="details-infos">
                                    <form class="form" action="" method="post">
                                        <label class="label-input" for="txtemail">
                                            <i class="far fa-envelope icon-modify"></i>
                                            
                                            <input type="text" id="txtemail-e" name="txtemail" value="<?php echo $emailUser;?>" disabled="">
                                        </label>
                                        <label class="label-input" for="txtsenha">
                                            <i class="fas fa-lock icon-modify"></i>
                                            <input type="password" id="txtsenha-e" disabled="" name="txtsenha" placeholder="**********">
                                        </label>
                                        <div class="alterar">
                                            <input type="submit" name="btn-alt-senha" id="btns" class="btn-alt-senha" value="Mudar senha">
                                            <input type="button" id="btn-edit-email" class="btn-edit-email" value="Editar" onclick="enableEmailInput()">

                                        </div>
                                        <input type="submit" name="btn-salvar" id="btns" class="btn btn-second" value="Salvar">
                                    </form>
                                </div>
                            </div>

                    
                             <div class="grid-config">
                                 <div class="config-titulo">
                                        <h2>Configurações</h2>
                                        <button class="btn-edit"><i class="bi bi-gear-fill"></i></button>
                                    </div>
                            </div>
        
                            
                    </div>
                </div>
            </div>

        </section>

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
                        <a href="index.php" class="footer-link">Home</a>
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
    
                  <form action="" method="post">
                    <div id="input_group">
                        <input type="email" id="email">
                        <button>
                            <i class="fa-regular fa-envelope"></i>
                        </button>
                    </div>
                  </form>
                </div>
            </div>
    
            <div id="footer_copyright">
                &copy; Copyright 2023, Drop Barbershop | Desenvolvido por <a target="_blank" href="https://lucasoaresprofile.000webhostapp.com/"> Lucas Soares</a>
            </div>
        </footer>
    </main>
    
</body>
</html>
<script>
    function enableEmailInput() {
        var emailInput = document.getElementById('txtemail-e');
        var editButton = document.getElementById('edit-email');

        
        emailInput.removeAttribute('disabled');

        // Oculta o botão "Editar"
        editButton.style.display = 'none';

        function recarregarPagina() {
        location.reload();
        }
    } 
    
    function enableNameInput(){
        var nameInput = document.getElementById('txtnome-e');
        var editButton = document.getElementById('editar-nome');

        nameInput.removeAttribute('disabled');

        
    }
</script>
<script>    
    var header = document.getElementById('header');
    var navbar = document.getElementById('navbar-hd');
    var content = document.getElementById('main');
    var showSidebar = false;

    function openSidebar(){
        showSidebar = !showSidebar;
        if(showSidebar){
            navbar.style.marginLeft = '-10vw';
            navbar.style.animationName = 'showSidebar';
            content.style.filter = 'blur(2px)';
        }else{
            navbar.style.marginLeft = '-100vw'; 
            navbar.style.animationName = 'hideSidebar';
            content.style.filter = 'blur(0)';
        }
    }

    function closeSidebar(){
        if(showSidebar){
            openSidebar();
        }else{
            
        }
    }

    window.addEventListener('resize', function(event){
        if(window.innerWidth > 1020 && showSidebar){
            openSidebar();
        }
    });
    
</script>

<?php else: header("Location: cadastrar.php"); endif; ?>