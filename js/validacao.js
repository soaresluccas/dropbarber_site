

function validarCadastro() {
        var nome = document.getElementById('txtnome').value;
        var email = document.getElementById('txtemail').value;
        var senha = document.getElementById('txtsenha').value;

        // Validar Nome
        if (nome.trim() === '') {
            alert('Por favor, preencha o campo Nome.');
            return false;
        }

        // Validar E-mail
        if (email.trim() === '') {
            alert('Por favor, preencha o campo E-mail.');
            return false;
        } 
        // Validar Senha
        if (senha.trim() === '') {
            alert('Por favor, preencha o campo Senha.');
            return false;
        }else if (!validarSenha(senha)) {
           
            return false;
        }

        
        return true;
    }

    // function validarEmail(email) {
    //     // Expressão regular simples para validar e-mail
    //     var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     return regex.test(email);
    // }
    function validarSenha(senha){
       
        var senha = document.getElementById('txtsenha').value;
        var mensagemSenha = document.getElementById('mensagemSenha');
    
        // Lógica de validação da senha
        var regexMinusc = /[a-z]/;
        var regexMaiusc = /[A-Z]/;
        var regexNumero = /[0-9]/;
        var regexEspecial = /[@#$%^&*()_+!]/;
    
        if (senha.length < 6) {
            mensagemSenha.textContent = 'A senha deve ter pelo menos 6 caracteres.';
            
        } else if (!regexMinusc.test(senha)) {
            mensagemSenha.textContent = 'A senha deve conter pelo menos uma letra minúscula.';
          
        } else if (!regexMaiusc.test(senha)) {
            mensagemSenha.textContent = 'A senha deve conter pelo menos uma letra maiúscula.';
           
        } else if (!regexNumero.test(senha)) {
            mensagemSenha.textContent = 'A senha deve conter pelo menos um número.';
            
        } else if (!regexEspecial.test(senha)) {
            mensagemSenha.textContent = 'A senha deve conter pelo menos um caractere especial.';
            
        } else {
            mensagemSenha.textContent = '';
            return true;
        }
    }
   