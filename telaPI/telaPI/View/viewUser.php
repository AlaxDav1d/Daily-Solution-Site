
<?php
        $id = $_GET['id'];
        $meta = $_GET['meta'];
        $nome = $_GET['nome_completo'];  
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
                    <input type="hidden" id="metaTxt" value='<?php echo $meta ?>'>
                    <input type="hidden" id="nomeTxt" value='<?php echo $nome?>'>
                
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
        <!--Fim cabeçalho-->
        <!--Inicio container azul-->


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
                <div class="carousel some" id="car1">
                    <div class="box">
                        <img src="https://img.freepik.com/free-photo/portrait-young-fitness-woman-earphones_171337-6257.jpg?size=626&ext=jpg&uid=P29772696&ga=GA1.2.981952496.1695169077&semt=ais" alt="">
                        <div class="textBox">
                            <h3>Hidrata-se</h3>
                            <p>Hidratação é a chave! Beba água suficiente antes do treino para garantir um desempenho máximo.</p>
                        </div>  
                    </div>
                    <div class="box">
                        <img src="https://img.freepik.com/free-photo/back-view-young-athletic-dark-skinned-curly-brunette-female-stretching-her-hands-while-posing-black-sporty-top-fitness-female-model_295783-5616.jpg?size=626&ext=jpg&uid=P29772696&ga=GA1.2.981952496.1695169077&semt=sph" alt="">
                        <div class="textBox">
                            <h3>Alongamento</h3>
                            <p>Aqueça seu corpo com alguns minutos de alongamento antes de começar o treino.</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="https://img.freepik.com/free-photo/fit-blond-woman-with-perfect-smile-stylish-sportswear-looking-camera-holding-bottle-water-white-wall-demonstrate-muscles_273443-4534.jpg?size=626&ext=jpg&uid=P29772696&ga=GA1.2.981952496.1695169077&semt=ais" alt="">
                        <div class="textBox">
                            <h3>Vestimento</h3>
                            <p>Vista roupas adequadas e calçados confortáveis para um treino sem complicações.</p>
                        </div>
                    </div> 
                </div>
                <div class="carousel aparece" id="car2">
                    <div class="box">
                        <img src="https://img.freepik.com/free-photo/woman-preparing-her-juice-recipe_23-2149257556.jpg?size=626&ext=jpg&uid=P29772696&ga=GA1.2.981952496.1695169077&semt=sph" alt="">
                       <div class="textBox">
                            <h3>Alimentação</h3>
                            <p>Coma uma refeição leve pelo menos uma hora antes do treino para obter energia suficiente.</p>
                       </div>
                    </div>
                    <div class="box">
                        <img src="https://img.freepik.com/free-psd/3d-rendering-cosmetic-product_23-2149929596.jpg?size=626&ext=jpg&uid=P29772696&ga=GA1.2.981952496.1695169077&semt=ais" alt="">
                       <div class="textBox">
                            <h3>Protetor Solar</h3>
                            <p>Proteja-se do sol e use protetor solar se estiver treinando ao ar livre.</p>   
                       </div>
                    </div>
                    <div class="box">
                        <img src="https://img.freepik.com/free-photo/people-sport-music-concept-pleasant-looking-woman-with-healthy-skin-wears-casual-top-smartwatch-concentrated-inn-screen-smart-phone-listens-favourite-song-headphones-likes-gymnastics_176532-6673.jpg?size=626&ext=jpg&uid=P29772696&ga=GA1.2.981952496.1695169077&semt=ais" alt="">
                       <div class="textBox">
                            <h3>Fone de ouvido</h3>
                            <p>Música energizante pode ser um ótimo companheiro durante o treino.</p>
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
         <script>
            var nomeCompleto = $('#nomeTxt').val();
            window.setInterval(slider,3000)
            function slider(){
                var carousel1 = document.getElementById('car1');
                var carousel2 = document.getElementById('car2');
        
                if(carousel1.classList.contains('some')){
                carousel2.classList.remove('aparece');
                carousel2.classList.add('some');
                carousel1.classList.remove('some');
                carousel1.classList.add('aparece');

            }else{
                carousel2.classList.remove('some');
                carousel2.classList.add('aparece');
                carousel1.classList.remove('aparece');
                carousel1.classList.add('some');
            }
           
            }
            
        </script>
        <script type="text/javascript" charset="utf-8">
            
            $(document).ready(async function(){
                alert(nomeCompleto);
    const config = {
        method: 'post',
        headers:{
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            nome: nomeCompleto
        })
    }

    console.log(config);

    const enviado = await fetch('../Controller/usuarios/retornoId.php', config);
    const retorno = await enviado.json();
    console.log(retorno.dados);
    const retornoId = retorno.dados;
    const idUser = retornoId.id;
    var idTxt =idUser;

    alert(meta);

        var meta = $('#metaTxt').val();
        var nome = $('#nomeTxt').val();
    console.log(idUser)                             
    $('#bemestar').on('click',(res=>window.location.href = `bemestar.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
        $('#alimento').on('click',(res=>window.location.href = `recomendacoes.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
        $('#exercicio').on('click',(res=>window.location.href = `treinodia.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
                                                
                });

            $('#ola').on('click',function(){alert('VMZ fica melhor de HeadPhone')});            
            const fim =document.getElementById('fim');
            var user = document.getElementById('user');
            const meta =$('#metaTxt').val();

            console.log(meta);
            alert(meta);
            user.innerHTML = nomeCompleto;
            switch(meta){
                case('musculo'):
                    musculo();
                    break;
                case('cardio'):
                    cardio();
                    break;
                case('perna'):
                    perna();
                    break;
                case('saude'):
                    saude();
                    break;
            }


</script>

</html>
