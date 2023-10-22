<?php
    $id = $_GET['id'];
    $meta = $_GET['meta'];
    $nome = $_GET['nome'];  
?>
<!DOCTYPE html>
    <html lang="pt-br"> 

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página Principal</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="css/geral.css">
        <link rel="stylesheet" href="css/bemestar.css">
    </head>

    <body>
        <header>
            <div class="topo">
            <input type="hidden" id="metaTxt" value='<?php echo $meta ?>'>
            <input type="hidden" id="idTxt" value='<?php echo $id ?>'>
            <input type="hidden" id="nomeTxt" value='<?php echo $nome ?>'>

              <button id="logoBtn"><img src="https://github.com/Meirelis/PEI/blob/main/Daily-Solution/img/logo.png?raw=true" alt="logo Daily Solution"></button>
              <div class="menu">
                <button id="bemestar" class="botao">Saúde</button>
                <button id="alimento" class="botao">Alimento</button>
                <button id="exercicio" class="botao">Exercício</button>
            </div>
              <div class="nomeUser">
                    <h2 id="ola" >Bem Vindo</h2>
                    <p id="user"></p>   
              </div>
            </div>
        </header>

        <div class="container-imagens">

            <div class="bloco-top">
                <div class="bloco-top-quadrado1">
                    <img src="./img/saude.jpg" alt="" height="70%" width="90%">
                    <p class="topicos">Saúde</p>
                    <a  onclick="saude()" >Leia mais</a>
                </div>

                <div class="bloco-top-quadrado1">
                    <img src="./img/alimento.jpg" alt="" height="70%" width="90%">
                    <p class="topicos">Alimento</p>
                    <a  onclick="alimento()" >Leia mais</a>
                </div>

                <div class="bloco-top-quadrado1">
                    <img src="./img/ansiedade.jpg" alt="" height="70%" width="90%">
                    <p class="topicos">Ansiedade</p>
                    <a  onclick="ansiedade()" >Leia mais</a>
                </div>

            </div>

            <div class="bloco-bottom">
                <div class="bloco-top-quadrado1">
                    <img src="./img/depressao.jpg" alt="" height="70%" width="90%">
                    <p class="topicos">Depressão</p>
                    <a onclick="depressao()">Leia mais</a>
                </div>

                <div class="bloco-top-quadrado1">
                    <img src="./img/sono.jpg" alt="" height="70%" width="90%">
                    <p class="topicos">Sono</p>
                    <a  onclick="sono()" >Leia mais</a>
                </div>

                <div class="bloco-top-quadrado1">
                    <img src="./img/exercicio.jpg" alt="" height="70%" width="90%">
                    <p class="topicos">Exercício</p>
                    <a href="../View/treinodia.html">Nossa página</a>
                </div>

            </div>
        </div>

        <footer>Daily Solution © 2023 - Todos os Direitos Reservados</footer>

    </body>
    <script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="../js/userName.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/popUps.js" ></script>
   <script type="text/javascript" >
       
     $(document).ready(async function(){await exibeNome()})
        const idTxt = $('#idTxt').val();
        const meta = $('#metaTxt').val();
        var nome = $('#nomeTxt').val();
        var user = document.getElementById('user');
        user.innerHTML = nome;
        
        $('#logoBtn').on('click',(res=>window.location.href = `viewUserId.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
        $('#bemestar').on('click',(res=>window.location.href = `bemestar.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
        $('#alimento').on('click',(res=>window.location.href = `recomendacoes.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
        $('#exercicio').on('click',(res=>window.location.href = `treinodia.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
   </script>

<!-- ARRUMAR A IMAGEM DO USUARIO NO HEADER -->
