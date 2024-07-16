    <?php session_start(); 
    require 'util/verifica.php';

    if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):

    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <link rel="stylesheet" href="estilo/swiper-bundle.min.css">
        <link rel="stylesheet" href="estilo/style.css">
        <link rel="icon" href="img/dropbarbershop-67hs_64ff5e61801ba.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
        <title>Home | DropBarberShop</title>
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
                        <img src="img/logo.png" alt="logotipo">
                    </div>
            
                    <div class="navbar-hd" id="navbar-hd">
                        <button onclick="openSidebar()" class="btn_icon_header">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </button>
                        <a id="link" href="index.html">Home</a>
                        <a id="link" onclick="openSidebar()" href="#sobre">Sobre</a>
                        <a id="link" onclick="openSidebar()" href="pages/galeria.html">Galeria</a>
                        <a id="link" onclick="openSidebar()" href="pages/profile.html">Profile</a>
                        
                        
                        
                       <ul id="mais">
                       <li id="user"><p><?php echo "Bem vindo,  ". $nomeUser;?> <i class="bi bi-three-dots-vertical"></i></p>
                            <ul id="sub-menu">
                                <li><a id="link" onclick="openSidebar()" href="visao/minhaconta.php">Minha Conta</a></li>
                                <li><a id="link" onclick="openSidebar()" href="visao/meusHorarios.php">Meus Horários</a></li>
                                <li><a id="link" onclick="openSidebar()" href="metodo/logout.php">Sair</a></li>
                            </ul>
                        </li>
                       </ul>
                        <!-- <a onclick="openSidebar()" id="a-c" href="visao/cadastrar.php"><button class="btn btn-primary">Conectar-se</button></a>  -->
                        
                    </div>
                
            
            </div>
        </div>
        <main tabindex="0" onclick="closeSidebar()" id="main">
            <section class="topo hidden">
            
                    <div class="flex">
                        
                            <div class="titulo-topo">
                                <h1><span>DROP</span> BARBERSHOP</h1>

                            
                            </div>
                        
                            <div class="btn-agendar">
                                <a href="visao/agendar.php">
                                    <button>Agende seu horário!</button>
                                </a>
                            </div>
                        
                    </div>
            </section> 
        
            <section class="sobre mySwiper hidden">

                <div class="flex" id="sobre">
                                
                    <div class="carrocel-container ">
                        
                        <div class="img-container">
                            
                            <video class="swiper-slide" width="400" height="150" loop autoplay>
                                <source src="videos/VID_33561023_214003_222.mp4" type="video/mp4">
                                <source src="videos/VID_33561023_214003_222.webm" type="video/webm">
                                
                            </video>
                            
                            
                            
                        </div>
                        
                    </div>

            
                
                    <div class="txt-sobre">
                        <h2>Muito prazer, <span>Somos a Drop Barbershop</span></h2> 
                        <p> Lorem ipsum dolor sit amet. Est dolor vero sed error excepturi aut provident delectus in facilis voluptatibus sed beatae consequatur. Ea deleniti sunt sit odio rerum vel ducimus Quis. Et reiciendis quibusdam et magni quia est eaque facere ut voluptatibus fugiat ut voluptatem maxime est assumenda suscipit et quae impedit!
                        </p>
                        <p>
                            Est accusantium nulla sed laborum nihil ut galisum sunt sed voluptatem eaque et accusantium voluptates qui consequatur tempora. 33 totam quidem ea ipsa provident in nemo porro? A corrupti quas qui dolorum doloremque eos veritatis quisquam eum doloremque animi qui quia quos ut doloribus dolorem. Cum perspiciatis quibusdam sed ratione dolor rem sint aperiam sed esse soluta.
                        </p>

                        <div class="btn-social">
                            <a href="https://www.instagram.com/drop_barbershop/" target="_blank"><button><i class="bi bi-instagram"></i></button></a>   
                        
                        </div>
                    </div>
                </div>
            </section>


            <section class="local hidden">
                <div class="interface" id="local">
                
                    <div class="flex">
                        <div class="text-box">
                            <h2>TODOS OS CAMINHOS TE LEVAM PARA...</h2>
                            <p>Endereço: R. Gen. Lima e Silva, 1064 - Cidade Baixa, Porto Alegre - RS, 90050-102 Est accusantium nulla sed laborum nihil ut galisum sunt sed voluptatem eaque et accusantium voluptates qui consequatur tempora. 33 totam quidem ea ipsa provident in nemo porro? A corrupti quas qui dolorum doloremque eos veritatis quisquam eum doloremque animi qui quia quos ut doloribus dolorem. Cum perspiciatis quibusdam sed ratione dolor rem sint aperiam sed esse soluta.</p>
                        </div>

                        <div id="linha-vertical"></div>
                        
                        <div class="mapBox" >
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.8073389038805!2d-51.217432593283!3d-30.042384657982453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951978543817cc05%3A0x65556fca6d966ee2!2sR.%20Gen.%20Lima%20e%20Silva%2C%201064%20-%20Cidade%20Baixa%2C%20Porto%20Alegre%20-%20RS%2C%2090050-102!5e0!3m2!1spt-BR!2sbr!4v1695577013840!5m2!1spt-BR!2sbr"  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    
                    </div>
                
                </div>
            </section>


            <section class="ambiente hidden">
                <div class="interface">
                    <div class="titulo-amb-1 hidden">
                        <h1>ambiente com...</h1>
                    </div>
                    <div class="flex">
                        <div class="container-amb">
                            
                            <div class="card-amb hidden">
                                <div class="img-amb hidden">
                                <img src="img/cerveja.png" alt="">
                                </div>
                                <div id="linha-horizontal"></div>
                                <div class="titulo-amb hidden">
                                    <h3>Bebidas geladas</h3>
                                </div>
                                <div class="p-amb hidden">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error iste labore quam sunt reprehenderit sint corporis, voluptatum blanditiis sed nihil incidunt ex adipisci, enim atque et illum nobis autem voluptates.</p>
                                </div>
                                
                            </div>
                            <div class="card-amb hidden">
                                <div class="img-amb hidden">
                                    <img src="img/cerveja.png" alt="">
                                </div>
                                <div id="linha-horizontal"></div>
                                <div class="titulo-amb hidden">
                                    <h3>Bebidas geladas</h3>
                                </div>
                                <div class="p-amb hidden">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error iste labore quam sunt reprehenderit sint corporis, voluptatum blanditiis sed nihil incidunt ex adipisci, enim atque et illum nobis autem voluptates.</p>
                                </div>
                            </div>
                            <div class="card-amb hidden">
                                <div class="img-amb hidden">
                                    <img src="img/cerveja.png" alt="">
                                </div>
                                <div id="linha-horizontal"></div>
                                <div class="titulo-amb hidden">
                                    <h3>Bebidas geladas</h3>
                                </div>
                                <div class="p-amb hidden">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error iste labore quam sunt reprehenderit sint corporis, voluptatum blanditiis sed nihil incidunt ex adipisci, enim atque et illum nobis autem voluptates.</p>
                                </div>
                            </div>
                            <div class="card-amb hidden">
                                <div class="img-amb hidden">
                                    <img src="img/cerveja.png" alt="">
                                </div>
                                <div id="linha-horizontal"></div>
                                <div class="titulo-amb hidden">
                                    <h3>Bebidas geladas</h3>
                                </div>
                                <div class="p-amb hidden">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error iste labore quam sunt reprehenderit sint corporis, voluptatum blanditiis sed nihil incidunt ex adipisci, enim atque et illum nobis autem voluptates.</p>
                                </div>
                            </div>
                        
                            
                                
                        </div>
                    </div>
                </div>
            </section>

            
            
            <section class="ch-galeria hidden">
                <div class="interface">
                    
                    <div class="carrosel-galeria">
                        <div class="more">
                            <a href="pages/galeria.html">MORE</a>
                        </div>
                        <div class="container" id="img">
                            <div class="overlay"></div>  
                            <img src="img/2.jpg" alt="">
                            <img src="img/3.jpg" alt="">
                            <img src="img/5.jpg" alt="">
                            <img src="img/2.jpg" alt="">
                            
                        </div>
                    </div>
                
                </div>
            </section>


                <section class="tabela hidden">
                    <div class="interface">
                        
                        
                        <div class="flex" id="tabela">
                            <div class="sv-pc">
                                <div class="sv-pc_titulos">
                                    <h1>TABELA</h1>
                                    <h5>de preços</h5>
                                </div>
                            
                            <table>
                                <tr>
                                    <th>Serviço</th>
                                    <th>Preço</th>
                                </tr>
                                <tr>
                                    <td class="service">
                                        CORTE<br>
                                        <span>(tesoura e/ou degradê)</span>
                                    </td>
                                    <td>R$45,00</td>
                                </tr>
                                <tr>
                                    <td class="service">
                                        CORTE E BARBA <br>
                                        <span>(máquina 1 pente)</span>
                                    </td>
                                    <td>R$30,00</td>
                                </tr>
                                <tr>
                                    <td class="service">
                                        BARBA COMPLETA <br>
                                        <span>(com toalha quente)</span>
                                    </td>
                                    <td>R$40,00</td>
                                </tr>
                                <tr>
                                    <td class="service">
                                        SOBRANCELHA
                                    </td>
                                    <td>R$10,00</td>
                                </tr>
                                <tr>
                                    <td class="service">
                                        ACABAMENTO
                                    </td>
                                    <td>R$15,00</td>
                                </tr>
                                <tr>
                                    <td class="service">
                                        COMBO DROP <br>
                                        <span>(corte + barba completa)</span>
                                    </td>
                                    <td>R$80,00</td>
                                </tr>
                                <tr>
                                    <td class="service">
                                        COMBO DROP'S <br>
                                        <span>(corte + barba completa + sobrancelha)</span>
                                    </td>
                                    <td>R$85,00</td>
                                </tr>
                                <tr>
                                    <td class="service">
                                        COLORAÇÃO 
                                    </td>
                                    <td>CONSULTAR</td>
                                </tr>
                            </table>
                            </div>

                            <div class="horarios">
                                <h1>HORÁRIO</h1>
                                <h5>DE FUNCIONAMENTO</h5>

                                <div class="info">
                                    <h6>SEGUNDA À SÁBADO</h6>
                                    <h5>10H ÀS 20H</h5>
                                    <h6>DOMINGO</h6>
                                    <h5>FECHADO</h5>

                                </div>
                                <div class="btn-agendar-h">
                                    <a href="visao/agendar.php"><button>AGENDAR</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            

            <section class="depoimentos hidden">
                <div class="interface">
                    <div class="flex">
                        <div class="slider-container swiper">
                            <div class="slide-conteudo">
                                <div class="cards-wrapper swiper-wrapper">
                                    <div class="card swiper-slide">
                                        <div class="imagem-conteudo">
                                            <span class="overlay_REW"></span>
            
                                            <div class="card-imagem">
                                                <img src="img/unnamed.png" alt="" class="card_img">
                                            </div>
            
                                            <div class="card-conteudo">
                                                <h2 class="nome">Lucas Marczal</h2>
                                                <p class="descricao">Acredito que já faz um ano que corto com o Gabriel, e através dele, conheci também a Nath. Os dois são pessoas e profissionais incríveis, confio totalmente no trabalho deles e desejo o maior sucesso do mundo.</p>
                                            </div>
                                            <button class="button">ver mais</button>
                                        </div>
                                    </div>
        
                                    <div class="card swiper-slide">
                                        <div class="imagem-conteudo">
                                            <span class="overlay_REW"></span>
            
                                            <div class="card-imagem">
                                                <img src="img/ErhardWitt.png" alt="" class="card_img">
                                            </div>
            
                                            <div class="card-conteudo">
                                                <h2 class="nome">Erhard Witt</h2>
                                                <p class="descricao">Acredito que já faz um ano que corto com o Gabriel, e através dele, conheci também a Nath. Os dois são pessoas e profissionais incríveis, confio totalmente no trabalho deles e desejo o maior sucesso do mundo.</p>
                                            </div>
                                            <button class="button">ver mais</button>
                                        </div>
                                    </div>
        
                                    <div class="card swiper-slide">
                                        <div class="imagem-conteudo">
                                            <span class="overlay_REW"></span>
            
                                            <div class="card-imagem">
                                                <img src="img/EnzoFerrari.png" alt="" class="card_img">
                                            </div>
            
                                            <div class="card-conteudo">
                                                <h2 class="nome">Enzo Ferrari</h2>
                                                <p class="descricao">Acredito que já faz um ano que corto com o Gabriel, e através dele, conheci também a Nath. Os dois são pessoas e profissionais incríveis, confio totalmente no trabalho deles e desejo o maior sucesso do mundo.</p>
                                            </div>
                                            <button class="button">ver mais</button>
                                        </div>
                                    </div>
        
                                    <div class="card swiper-slide">
                                        <div class="imagem-conteudo">
                                            <span class="overlay_REW"></span>
            
                                            <div class="card-imagem">
                                                <img src="img/KellyRodrigues.png" alt="" class="card_img">
                                            </div>
            
                                            <div class="card-conteudo">
                                                <h2 class="nome">Kelly Rodrigues</h2>
                                                <p class="descricao">Acredito que já faz um ano que corto com o Gabriel, e através dele, conheci também a Nath. Os dois são pessoas e profissionais incríveis, confio totalmente no trabalho deles e desejo o maior sucesso do mundo.</p>
                                            </div>
                                            <button class="button">ver mais</button>
                                        </div>
                                    </div>
        
                                    <div class="card swiper-slide">
                                        <div class="imagem-conteudo">
                                            <span class="overlay_REW"></span>
            
                                            <div class="card-imagem">
                                                <img src="img/AquilesDiniz.png" alt="" class="card_img">
                                            </div>
            
                                            <div class="card-conteudo">
                                                <h2 class="nome">Aquiles Diniz</h2>
                                                <p class="descricao">Acredito que já faz um ano que corto com o Gabriel, e através dele, conheci também a Nath. Os dois são pessoas e profissionais incríveis, confio totalmente no trabalho deles e desejo o maior sucesso do mundo.</p>
                                            </div>
                                            <button class="button">ver mais</button>
                                        </div>
                                    </div>
        
                                    <div class="card swiper-slide">
                                        <div class="imagem-conteudo">
                                            <span class="overlay_REW"></span>
            
                                            <div class="card-imagem">
                                                <img src="img/MatheusMachado.png" alt="" class="card_img">
                                            </div>
            
                                            <div class="card-conteudo">
                                                <h2 class="nome">Matheus Machado</h2>
                                                <p class="descricao">Acredito que já faz um ano que corto com o Gabriel, e através dele, conheci também a Nath. Os dois são pessoas e profissionais incríveis, confio totalmente no trabalho deles e desejo o maior sucesso do mundo.</p>
                                            </div>
                                            <button class="button">ver mais</button>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                            <div class="swiper-button-next" style="color: #C31613;"></div>
                            <div class="swiper-button-prev" style="color: #C31613;"></div>
                            
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


        <script src="js/scroll.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" defer></script>
    <script src="js/more_galeria.js" defer></script>
    

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

    <script src="js/swiper-bundle.min.js"></script>

    <script src="js/dopoimentos.js"></script>

        
    </body>



    </html>
    <?php else: header("Location: visao/cadastrar.php"); endif; ?>