<?php 

class Usuario{


    public function login($email, $senha){
        global $pdo;

        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", md5($senha));
        $sql->execute();


        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            $_SESSION['idUser'] = $dado['codigo'];

            return true;

        }else{
            return false;
        }
    }

    public function logged($id){
        global $pdo;

        $array = array();

        $sql = "SELECT nome, email FROM usuarios WHERE codigo = :codigo";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("codigo", $id); 
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        
        }   
        
        return $array;
    }

    public function cadastrar($nome, $email, $senha){
        global $pdo;

        $sqlVerifica = "SELECT codigo FROM usuarios WHERE email = :email";
        $sqlVerifica = $pdo->prepare($sqlVerifica);
        $sqlVerifica->bindValue(":email", $email);
        $sqlVerifica->execute();

        if($sqlVerifica->rowCount() == 0){
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", md5($senha)); 
            $sql->execute();

            return true;
        }else{
            return false;
        }
    }

    

    public function cadastrarHorario($telefone, $data, $horarioBarbeiro, $servico, $mensagem) {
        global $pdo;
    
        
        if(isset($_SESSION['idUser'])) {
            $idUser = $_SESSION['idUser'];
    
            
            $sqlInsertHorario = "INSERT INTO horarios (telefone, data, horarioBarbeiro, servico, mensagem, codigo, nome, email)
                                 SELECT :telefone, :data, :horarioBarbeiro, :servico, :mensagem, u.codigo, u.nome, u.email
                                 FROM usuarios u
                                 WHERE u.codigo = :codigo";
    
            $stmtInsertHorario = $pdo->prepare($sqlInsertHorario);
            $stmtInsertHorario->bindValue(":telefone", $telefone);
            $stmtInsertHorario->bindValue(":data", $data);
            $stmtInsertHorario->bindValue(":horarioBarbeiro", $horarioBarbeiro);
            $stmtInsertHorario->bindValue(":servico", $servico);
            $stmtInsertHorario->bindValue(":mensagem", $mensagem);
            $stmtInsertHorario->bindValue(":codigo", $idUser);
    
            
            $stmtInsertHorario->execute();
    
            
            return $stmtInsertHorario->rowCount() > 0;
        }
    
       
        return false;
    }

    public function atualizarEmail($id, $novoEmail) {
        global $pdo;
    
        $sql = "UPDATE usuarios SET email = :novoEmail WHERE codigo = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("novoEmail", $novoEmail);
        $sql->bindValue("id", $id);
        $sql->execute();
    }

    public function atualizarNome($id, $novoNome){
        global $pdo;
    
        $sql = "UPDATE usuarios SET nome = :novoNome WHERE codigo = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("novoNome", $novoNome);
        $sql->bindValue("id", $id);
        $sql->execute();
    }


    public function deletarHorario($idHora) {
        global $pdo;
        
        if(!empty($_GET['idHora'])){
            $idHora = $_GET['idHora'];

            $sqlSelect = "SELECT * FROM horarios WHERE idHora=$idHora";
            $sqlSelect = $pdo->query($sqlSelect);

            if ($sqlSelect->num_rows > 0){
                $sql = "DELETE FROM horarios WHERE idHora=?";
                $sql = $pdo->prepare($sql);
                $sql->bindValue(1, $idHora);
                $sql->execute();

            }
        } 

            
    
       
       
    }  
    
    
    public function logarAdm($adm, $senha){
        global $pdo;

        $sql = "SELECT * FROM adm WHERE adm = :adm AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("adm", $adm);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            $_SESSION['admUser'] = $dado['idAdm'];

            return true;

        }else{
            return false;
        }

    }

    public function loggedAdm($idAdm){
        global $pdo;

        $array = array();

        $sql = "SELECT adm FROM adm WHERE idAdm = :idAdm";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("idAdm", $idAdm);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        
        }   
        
        return $array;
    }
       
    
    
    
    
    
}


?>