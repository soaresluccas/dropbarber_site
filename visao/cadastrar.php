
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="../estilo/cadastrar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
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
                   
                    <a id="link" onclick="openSidebar()" href="../pages/galeria.html">Galeria</a>
                    <a id="link" onclick="openSidebar()" href="../pages/profile.html">Profile</a>
                </div>
            
         
        </div>
    </div>

    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem vindo!</h2>
                <p class="description description-primary">Se você já possui uma conta</p>
                <p class="description description-primary">por favor clique no botão abaixo!</p>
                <button id="signin" class="btn btn-primary">Entrar</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Criar conta</h2>
                <div class="social-media">
                    
                </div><!-- social media -->
                
                <form class="form" onsubmit="return validarCadastro()" action="../metodo/caduser.php" method="POST" name="formcad"  >
                    <label class="label-input" for="txtnome">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" id="txtnome" name="txtnome" placeholder="Nome">
                    </label>
                    
                    <label class="label-input" for="txtemail">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="text" id="txtemail" name="txtemail" placeholder="Email" >
                    </label>
                    
                    <label class="label-input" for="txtsenha">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" id="txtsenha" name="txtsenha" placeholder="Senha">
                    </label>
                    <p id="mensagemSenha" style="color: red;" ></p>
                    
                    <input type="submit" name="btn-cad" id="btns" class="btn btn-second" value="Inscrever-se">     
                </form>
                   
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Eae, parceiro!</h2>
                <p class="description description-primary">Ainda não possui uma conta?</p>
                <p class="description description-primary">cadastre-se e venha conferir o pequeno mundo da DROP</p>
                <button id="signup" class="btn btn-primary">Inscrever-se</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Fazer login!</h2>
                <div class="social-media">
                  
                </div><!-- social media -->
               
                <form class="form" action="../metodo/logar.php" method="POST" name="formlogin">
                
                    <label class="label-input" for="txtemail">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="text" name="txtemail" id="txtemail-e" placeholder="Email">
                    </label>
                
                    <label class="label-input" for="txtsenha">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="txtsenha" id="txtsenha-e" placeholder="Senha">
                    </label>
                    
                    <a class="password" href="#">Esqueceu sua senha?</a>
                  
                    <input type="submit" name="btn-entrar" id="btns" class="btn btn-second" value="Entrar">
                </form>
                
            </div><!-- second column -->
        </div><!-- second-content -->
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
    <script src="../js/app.js"></script>
    <script src="../js/validacao.js"></script>
</body>
</html>