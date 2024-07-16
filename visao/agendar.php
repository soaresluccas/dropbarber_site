<?php 
session_start();

?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/dropbarbershop-67hs_64ff5e61801ba.png">
    <link rel="stylesheet" href="../estilo/style_ag.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="js/jquery.js" defer></script>
    <script src="js/script.js" defer></script>
    <script src="js/html5shiv.js" defer></script>
    <title>Agendar | Drop Barbershop</title>
</head>
<body>


    <header>
        <div class="interface">
        
                <div class="logotipo">
                    <img src="../img/logo.png" alt="logotipo">
                </div>
                <nav class="navbar">
                    <ul>
                        <li id="a-f"><a href="../index.php">Home</a></li>
                        <li id="a-f"><a href="../pages/profile.html">Profile</a></li>
                        <li id="a-f"><a href="../pages/galeria.html">Galeria</a></li>
                    </ul>
                </nav>
            
            
        </div>
        
            
    </header>

    <section class="agendar">
        <div class="interface">
            <div class="flex">
                <div class="container">
                    <h2  class="titulo">AGENDAR <span>HORÁRIO</span></h2>

                <form action="../metodo/agendamento.php" method="POST" name="form_agendar">
                    <input type="text" name="txttelefone" id="txttelefone" placeholder="Digite seu telefone">
                    <input type="time" id="appt" name="appt" min="09:00" max="20:00" required />
                    <input type="date" id="start" name="trip-start" value="2024-01-1" min="2024-01-01" max="2026-12-31" />
                    <div class="container-sel">
                        <label for="selservico">Escolha um Barbeiro:</label>
                        <select name="selbarber" id="selbarber">
                            <optgroup>
                                <option value="gabriel">Gabriel</option>
                                <option value="Nathalia">Nathalia</option>
                                <option value="sem-preferencia">Sem preferência</option>
                            </optgroup>
                            
                        </select>
                    </div>
                    <div  class="container-sel">
                        <label for="selservico">Escolha um Serviço:</label>
                        <select name="selservico" id="selservico">
                            <optgroup >
                                <option value="corte">Corte</option>
                                <option value="corte-barba">Corte e Barba</option>
                                <option value="barbaCompleta">Barba Completa</option>
                                <option value="sobrancelha">Sobrancelha</option>
                                <option value="acabamento">Acabamento</option>
                                <option value="comboDrop">Combo Drop</option>
                                <option value="comboDropS">Combo Drop's</option>
                                <option value="coloracao">Coloraçaõ</option>
                            </optgroup>
                            
                        </select>
                    </div>
                    <textarea name="textarea" id="textarea" placeholder="Digite sua mensagem" ></textarea>

                    <div class="btn-enviar"><input type="submit" value="AGENDAR"></div>
                </form>
                </div>

                <div class="flex-tb-h">
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
    
</body>
</html>