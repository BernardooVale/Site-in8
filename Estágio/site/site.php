<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="in8.css">

        <title>IN8</title>

    </head>

    <body>
        
        <?php  

        require "usuario.php";

        $novoUsuario = new Usuario(htmlspecialchars($_POST["nome"]), htmlspecialchars($_POST["email"]), htmlspecialchars($_POST["nascimento"]), htmlspecialchars($_POST["telefone"]));
        $UsuarioCadastrado = $novoUsuario->EscreveArquivo($novoUsuario, "usuarios.json");

        if ($UsuarioCadastrado){
        
            
        
        }

        $arquivoJSON = json_decode(file_get_contents("usuarios.json"));
        $num_cadastrados = count($arquivoJSON);

        ?>

        <div id="parte1">

            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-link" href="https://in8.com.br">
                        <img id ="logo" src="../imagens/in8.png" alt="" width="100" height="100" class="d-inline-block align-text-top">
                    </a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
                        aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse justify-content-center" id="navbarToggler">
                        <ul class="nav navbar-nav mb-2 mb-lg-0 mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#cadastro">cadastro</a>
                            </li>
                            <li class="divisor">
                                <a>.</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#lista">lista</a>
                            </li>
                            <li class="divisor">
                                <a>.</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sobre-mim">sobre mim</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id ="texto-principal">
            <h1 id="texto-principal1">ESTÁGIO</h1>
            <h2 id="texto-principal2">PROVA DE SELEÇÃO</h2>
            </div>
        </div>

        <div class="margem" id="cadastro">

                <h1 id="titulo-cadastro"><a name ="cadastro">Cadastro</a></h1>

                <form id ="formulario" action="site.php" method="POST">
        
                        <label class="titulo-input">Nome</label><br>
                        <input name="nome" class="input" type="text" maxlength="100"><br><br>
    
                        <label class="titulo-input">Email</label><br>
                        <input name="email" class="input" type="email"><br><br>
        
                        <label class="titulo-input">Nascimento</label><br>
                        <input name="nascimento" class="input" type="date"><br><br>
        
                        <label class="titulo-input">Telefone</label><br>
                        <input name="telefone" class="input" type="tel" maxlength="16"><br>

                        <button id="botao-cadastrar" type="submit" class="btn btn-dark">
                            Cadastrar
                        </button>

                </form>

        </div>
        <div class="margem" id="lista-cadastros">

            <h1 id="titulo-lista"><a name ="lista">Lista de cadastro</a></h1>

            <div class="container text-center">
                <div class="row">
                  <div class="col-1" id="topo-esquerda">
                    
                  </div>
                  <div class="col-3" id="topo-meio1">
                    Nome
                  </div>
                  <div class="col-3" id="topo-meio2">
                    Email
                  </div>
                  <div class="col-3" id="topo-meio3">
                    Nascimento
                  </div>
                  <div class="col-2" id="topo-direita">
                    Telefone
                  </div>
                </div>
                <div class="row">
                    <div class="col-1" id="linha1-esquerda">
                      1
                    </div>
                    <div class="col-3" id="linha1-meio1">
                      <?= $arquivoJSON[$num_cadastrados - 1]->nome ?>
                    </div>
                    <div class="col-3" id="linha1-meio2">
                      <?= $arquivoJSON[$num_cadastrados - 1]->email ?>
                    </div>
                    <div class="col-3" id="linha1-meio3">
                      <?= $arquivoJSON[$num_cadastrados - 1]->nascimento ?>
                    </div>
                    <div class="col-2" id="linha1-direita">
                      <?= $arquivoJSON[$num_cadastrados - 1]->telefone ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1" id="linha2-esquerda">
                      2
                    </div>
                    <div class="col-3" id="linha2-meio1">
                      <?= $arquivoJSON[$num_cadastrados - 2]->nome ?>
                    </div>
                    <div class="col-3" id="linha2-meio2">
                      <?= $arquivoJSON[$num_cadastrados - 2]->email ?>
                    </div>
                    <div class="col-3" id="linha2-meio3">
                      <?= $arquivoJSON[$num_cadastrados - 2]->nascimento ?>
                    </div>
                    <div class="col-2" id="linha2-direita">
                      <?= $arquivoJSON[$num_cadastrados - 2]->telefone ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1" id="linha3-esquerda">
                      3
                    </div>
                    <div class="col-3" id="linha3-meio1">
                      <?= $arquivoJSON[$num_cadastrados - 3]->nome ?>
                    </div>
                    <div class="col-3" id="linha3-meio2">
                      <?= $arquivoJSON[$num_cadastrados - 3]->email ?>
                    </div>
                    <div class="col-3" id="linha3-meio3">
                      <?= $arquivoJSON[$num_cadastrados - 3]->nascimento ?>
                    </div>
                    <div class="col-2" id="linha3-direita">
                      <?= $arquivoJSON[$num_cadastrados - 3]->telefone ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1" id="linha4-esquerda">
                      4
                    </div>
                    <div class="col-3" id="linha4-meio1">
                      <?= $arquivoJSON[$num_cadastrados  - 4]->nome ?>
                    </div>
                    <div class="col-3" id="linha4-meio2">
                      <?= $arquivoJSON[$num_cadastrados  - 4]->email ?>
                    </div>
                    <div class="col-3" id="linha4-meio3">
                      <?= $arquivoJSON[$num_cadastrados  - 4]->nascimento ?>
                    </div>
                    <div class="col-2" id="linha4-direita">
                      <?= $arquivoJSON[$num_cadastrados  - 4]->telefone ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer id="sobre-mim">

        <div id="rodape">
            <h5><a name ="sobre-mim">Fulano Beltrano de Oliveira da Silva</a></h5><br>
            <h5>fulanobos@gmail.com</h5><br>
            <h5>(31) 9 99966-1111</h5><br>
            <h5>Faculdade de Belo Horizonte</h5><br>
        </div>

    </footer>

</html>