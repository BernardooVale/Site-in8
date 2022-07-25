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

                <form id ="formulario" action="in8.php" method="post">
        
                        <label class="titulo-input">Nome</label><br>
                        <input id ="nome" name="nome" class="input" type="text" maxlength="100"><br><br>
    
                        <label class="titulo-input">Email</label><br>
                        <input id ="email" name="email" class="input" type="email"><br><br>
        
                        <label class="titulo-input">Nascimento</label><br>
                        <input id ="nascimento" name="nascimento" class="input" type="date"><br><br>
        
                        <label class="titulo-input">Telefone</label><br>
                        <input id ="telefone" name="telefone" class="input" type="tel" maxlength="16"><br>
                </form>

                <button id="botao-cadastrar" type="submit" class="btn btn-dark"
                    style="--bs-btn-padding-y: 1rem; --bs-btn-padding-x: 5%; --bs-btn-font-size: 2rem;">
                    Cadastrar
                </button>

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
                        <?php echo $nomes[0]; ?>
                    </div>
                    <div class="col-3" id="linha1-meio2">
                        <?php echo $emails[0]; ?>
                    </div>
                    <div class="col-3" id="linha1-meio3">
                        <?php echo $nascimentos[0]; ?>
                    </div>
                    <div class="col-2" id="linha1-direita">
                        <?php echo $telefones[0]; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1" id="linha2-esquerda">
                      2
                    </div>
                    <div class="col-3" id="linha2-meio1">
                        <?php echo $nomes[1]; ?>
                    </div>
                    <div class="col-3" id="linha2-meio2">
                        <?php echo $emails[1]; ?>
                    </div>
                    <div class="col-3" id="linha2-meio3">
                        <?php echo $nascimentos[1]; ?>
                    </div>
                    <div class="col-2" id="linha2-direita">
                        <?php echo $telefones[1]; ?>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-1" id="linha3-esquerda">
                      3
                    </div>
                    <div class="col-3" id="linha3-meio1">
                        <?php echo $nomes[2]; ?>
                    </div>
                    <div class="col-3" id="linha3-meio2">
                        <?php echo $emails[2]; ?>
                    </div>
                    <div class="col-3" id="linha3-meio3">
                        <?php echo $nascimentos[2]; ?>
                    </div>
                    <div class="col-2" id="linha3-direita">
                        <?php echo $telefones[2]; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1" id="linha4-esquerda">
                      4
                    </div>
                    <div class="col-3" id="linha4-meio1">
                        <?php echo $nomes[3]; ?>
                    </div>
                    <div class="col-3" id="linha4-meio2">
                        <?php echo $emails[3]; ?>
                    </div>
                    <div class="col-3" id="linha4-meio3">
                        <?php echo $nascimentos[3]; ?>
                    </div>
                    <div class="col-2" id="linha4-direita">
                        <?php echo $telefones[3]; ?>
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