<?php
    final class Usuario{

        public $nome;
        public $email;
        public $nascimento;
        public $telefone;

        public function __construct($nome, $email, $nascimento, $telefone){
            $this->nome = $nome;
            $this->email = $email;
            $this->nascimento = $nascimento;
            $this->telefone = $telefone;
        }

        public function UsuarioExiste($conteudo, $caminhoArquivo){

            $arquivo = json_decode(file_get_contents($caminhoArquivo));
        
            foreach($arquivo as $usuario){
        
                if($usuario->email == $conteudo->email){
                    
                    return TRUE;
                }
                    
            }
            return FALSE;
        }

        public function EscreveArquivo($dados, $caminhoArquivo){
    
            $arquivoJSON = json_decode(file_get_contents($caminhoArquivo));
            $arquivo = $arquivoJSON;
            $usuarioExiste = $this->UsuarioExiste($dados, $caminhoArquivo);
        
            if($usuarioExiste){
                
                return TRUE;
        
            } else{
                
                array($arquivo);
                array_push($arquivo,$dados);
                file_put_contents($caminhoArquivo, json_encode($arquivo, JSON_PRETTY_PRINT));
            }
        }
    }
?>
