<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/loginadm.css">
    <link rel="icon" href="../img/dropbarbershop-67hs_64ff5e61801ba.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login | DropBarbershop</title>
</head>
<body>
    <div class="container">
        <div class="content second-content">
            <div class="second-column">
                <h2 class="title title-second">Fazer login!</h2>
            
               
                <form class="form" action="../metodo/loginadm.php" method="POST" name="formlogin">
                
                    <label class="label-input" for="txtadm">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="text" name="txtadm" id="txtemail-e" placeholder="Nome">
                    </label>
                
                    <label class="label-input" for="txtsenha-adm">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="txtsenha-adm" id="txtsenha-e" placeholder="Senha">
                    </label>
                  
                    <input type="submit" name="btn-entrar" id="btns" class="btn btn-second" value="Entrar">
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>