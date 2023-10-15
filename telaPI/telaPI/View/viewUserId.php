
<?php
     $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="https://github.com/Meirelis/PEI/blob/main/Daily-Solution/img/logo.png?raw=true" type="png" class="imgLogo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../View/css/sweetalert2.min.css" type="text/css" />
        <link rel="stylesheet" href="../View/css/geral.css">
        <link rel="stylesheet" href="../View/css/ViewUser.css">
        <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>Daily Solution</title>

    </head>
    <body>
        <!--Inicio cabeçalho-->
        <header>
                <div class="topo">
                    <input type="hidden" id="idTxt" value='<?php echo $id ?>'>
                    
                  <a href="cadastroPi.html"><img src="https://github.com/Meirelis/PEI/blob/main/Daily-Solution/img/logo.png?raw=true" alt="logo Daily Solution"></a>
                  <div class="menu">
                    <a href="bemestar.html">Saúde</a>
                    <a href="recomendacoes.html">Alimento</a>
                    <a href="superiores.html">Exercício</a>
                </div>
                  <div class="nomeUser">
                        <h2 id="ola" >Bem Vindo</h2>
                        <p id="user"></p>   
                  </div>
                </div>
        </header>
        <!--Fim cabeçalho-->
        <!--Inicio container azul-->
        <div class="container-azul">
            <div class="textoAjuda aparece">
                <p>Pegou sua garrafa da água??</p>
            </div>
            <div class="textoAjuda some">
                <p>
                    Esta vestido com roupas confortaveis?
                </p>
            </div>
            <div class="textoAjuda some">
                <p>
                    Também não se esqueça de se alongar antes do treino
                </p>
            </div>
        </div>

         <!--Fim container azul-->
        <div class="container-texto">
            <h2>Agora sim!! Bem-vindo à Daily Solution!</h2>
            <p class="textoMid">
                A empresa que se preocupa com o seu bem-estar! Nós acreditamos que a combinação de exercícios e alimentação saudável é a chave para uma vida mais equilibrada e feliz. Com nossas soluções diárias, você pode transformar sua rotina e alcançar seus objetivos de saúde. Oferecemos planos alimentares personalizados, treinos elaborados por profissionais e acompanhamento constante para garantir o seu sucesso. Comece hoje mesmo a cuidar da sua saúde com a Daily Solution!
            </p>
        </div>
        <div class="hints">
            <h2>
                Aqui estão algumas dicas diarias para te ajudar:
            </h2>
            <div class="boxHints">
                <div class="carousel nao" id="car1">
                    <div class="box">
                        <img src="https://cdn.pixabay.com/photo/2016/08/31/07/28/water-1632785_1280.jpg" alt="">
                        <div class="textBox">
                            <h3>Tente beber no minímo 2L de água por dia</h3>
                            <p>ainda mais em dias quentes</p>
                        </div>  
                    </div>
                    <div class="box">
                        <img src="https://cdn.pixabay.com/photo/2016/04/06/13/32/sleeping-1311784_1280.jpg" alt="">
                        <div class="textBox">
                            <h3>Tente dormir pelo menos 7 horas por dia</h3>
                            <p>Uma boa noite de sono te ajuda a aliviar o estresse</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="https://cdn.pixabay.com/photo/2016/08/31/07/28/water-1632785_1280.jpg" alt="">
                        <div class="textBox">
                            <h3>Tente beber no minímo 2L de água por dia</h3>
                            <p>ainda mais em dias quentes</p>
                        </div>
                    </div> 
                </div>
                <div class="carousel sim" id="car2">
                    <div class="box">
                        <img src="https://cdn.pixabay.com/photo/2016/08/31/07/28/water-1632785_1280.jpg" alt="">
                       <div class="textBox">
                            <h3>Tente beber no minímo 3L de água por dia</h3>
                            <p>ainda mais em dias quentes</p>
                       </div>
                    </div>
                    <div class="box">
                        <img src="https://cdn.pixabay.com/photo/2016/08/31/07/28/water-1632785_1280.jpg" alt="">
                       <div class="textBox">
                            <h3>Tente beber no minímo 3L de água por dia</h3>
                            <p>ainda mais em dias quentes</p>   
                       </div>
                    </div>
                    <div class="box">
                        <img src="https://cdn.pixabay.com/photo/2016/08/31/07/28/water-1632785_1280.jpg" alt="">
                       <div class="textBox">
                            <h3>Tente beber no minímo 3L de água por dia</h3>
                            <p>ainda mais em dias quentes</p>
                       </div>
                    </div> 
                </div>
                <div class="carousel nao" id="car3">
                    <div class="box">
                        <img src="../View/img/Afundo.jpg" alt="">
                        <div class="textBox">
                            <h3>Tente beber no minímo 4L de água por dia</h3>
                            <p>ainda mais em dias quentes</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="https://cdn.pixabay.com/photo/2016/08/31/07/28/water-1632785_1280.jpg" alt="">
                        <div class="textBox">
                            <h3>Tente beber no minímo 4L de água por dia</h3>
                            <p>ainda mais em dias quentes</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="https://cdn.pixabay.com/photo/2016/08/31/07/28/water-1632785_1280.jpg" alt="">
                        <div class="textBox">
                            <h3>Tente beber no minímo 4L de água por dia</h3>
                            <p>ainda mais em dias quentes</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
       <div class="treinosUser">
            <h3>Aqui estão alguns treinos de acordo com o seu foco:</h3>
            <div class="fim" id="fim">
            </div>
       </div>
       
        <!--Inicio container linha/divisor-->

        <!--Fim container linha/divisor--> 
         <!--Inicio Container das imagens--> 

        <!--Fim Container das imagens-->
        <footer>Daily Solution © 2023 - Todos os Direitos Reservados</footer>
    </body>
</html>
        <script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="../js/sweetalert2.all.min.js"></script>
        <script src="../js/inner.js"></script>
        <script type="text/javascript" charset="utf-8">
            window.setInterval(avancar,3000);   
            window.setInterval(frente,4000);
            $('#ola').on('click',function(){alert('VMZ fica melhor de HeadPhone')});
            var user = document.getElementById('user');
            const idTxt = $('#idTxt').val();
                $(document).ready(async function(){await carregarUser()})
                async function carregarUser(){
                    alert(idTxt);

                  const config ={
                    method:'post',
                    headers:{
                      'Accept': 'application/json',
                      'Content-Type':'application/json'
                    },
                    body:JSON.stringify({
                      idT:idTxt
                    })
                  };
                console.log(config);
                const request =await fetch('../Controller/usuarios/listarNomePeloId.php',config);      
                const response = await request.json();
                console.log(response.meta);
                dados = response['dados'];
                const meta =response['meta'];
                alert(meta);
                user.innerHTML = dados;
                switch(meta){
                    case('"musculo"'):
                        musculo();
                        break;
                    case('"cardio"'):
                        cardio();
                        break;
                    case('"perna"'):
                        perna();
                        break;
                    case('"saude"'):
                        saude();
                        break;
                }


            }
        </script>

</html>
