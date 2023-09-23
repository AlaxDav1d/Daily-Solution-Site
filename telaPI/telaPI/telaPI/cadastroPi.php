
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="https://github.com/Meirelis/PEI/blob/main/Daily-Solution/img/logo.png?raw=true" type="png" class="imgLogo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="View/css/sweetalert2.min.css" type="text/css" />
        
        <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>Daily Solution</title>
        <style>
@keyframes andar{
    0%{
        rotate: -2deg;
        transform: translateX(-100vh);
    }
    100%{
        rotate: 10deg;
        transform: translateX(400vh);
    }

}
*{
    padding:0;
    margin: 0;
    box-sizing: border-box;
}

.topo{
    background-color: #d9d9d9;
    height: 140px;
    padding-right: 85px;
    display: flex;
    padding-left: 25px;
    align-items: center;
    justify-content: space-between;
}
.topo img{
    width: 15vh;
    height: 15vh;
}
.topo a{
    width: 10%;
    height: 100%;
}
.logo{
    height: 100px;
    width: 100px;
    background: url(../img/logo.png) no-repeat center;
    background-size: 120px;
    padding-left: 250px;
    float: left;
}
.form{
    display: flex;
    align-items: center;  
    flex-direction: column;
}
.botao{
    height: 3vh;
    width: 7vh;
    background-color:#C7C5C5; 
    padding:0 15%;
    margin: 1%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bolder;
    transition: 800ms;
}
button{
    border: none;
}

.botao:hover{
    background-color: #2966bd; 
    color: #fff;
}
.container-mid{
    height: 500px;
    background-color: #ffffff;
}
.container-azul{
    height: 55vh;
    margin: 10vh 0; 
    overflow: block;
    display: flex;
    flex-direction: row-reverse;
    justify-content: space-between;
    align-items: center;
    background-color: #2966bd;
    border-bottom: 3px solid black;
}
.container-azul h1{
    color: #fff;
    position: absolute;
    animation-name: andar;
    animation-duration: 3s;
    animation-direction: normal;
    animation-iteration-count: infinite;
   
}
.container-azul img{
    width: 100%;
    height: 100%;
}   

.container-texto{
    padding: 3%;
    font-size: 20px;
}

form{
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    background-color: #AAA6A6;
    color: #fff;
    font-size:130%;
    width: 50vh;
    height: 70vh;
    padding: 1%;
    position: absolute;
    padding: 1%;
    gap: 0.2%;
    margin:3% 2%;
    text-transform: capitalize;
    border: 1px solid black;
}
form input{
    height: 5%;
    padding: 2%;
    transition: 900ms;
}
form input:focus{
    transform: translateX(5px);
}
form input:hover{
    transform: translateX(5px);
}
input[type='radio']{
    height: 50%;
}
form label{
    transition: 900ms;
}
form label:hover{
    text-shadow: 1.6px 0 #2966bd;
    transform: translateX(10px);
}
footer{
    color: rgb(218, 217, 217);
    background-color: #2966bd;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 50px;
    height: 25px;
}
h2{
    margin-bottom: 2%;
    font-size: 150%;
}
.img img{
    height: 50px;
    width: 50px;
}
.img{
    position: relative;
    bottom: 10px;
}
.container-imagens{
    margin-top: 15%;
    display: flex;
    justify-content: center;
    gap: 12%;
}
.bloco-1 {
    max-width: 370px;
    
}
.bloco-2 {
    max-width: 370px;
}
.bloco-3 {
    max-width: 370px;
}
.container-imagens span{
    font-size: 18px;
}

.container-imagens .text-1 {
    position: relative;
    margin-left: 5 5px;
}

.botoes{
    display: flex;
    justify-content: space-between;
}
.foco{
    display: flex;
    flex-direction: column;
    width: 20vh;
    gap: 10%;
    margin: 2% 0;  
}
.campo{
    display: flex;
    align-items: center;
    width: 100%;
    gap: 5%;    
}
.textoMid{
    width: 150vh;
}
.some{
    height: 0;
    background-color: transparent;
    opacity: 0;
    transition: 700ms;
    transform: translateY(-300px) scale(1%);
}
.aparece{
    height: 100;
    opacity: 1;
    transition: 700ms;
    transform: scale(100%);
}
.add{
    opacity: 1;
    position: absolute;
}
.a{
    opacity: 0;
}
.config{
    height: 10%;
    width: 20%;
}
.config1{
    display: flex;
    justify-content: flex-end;
}

#click{
    background-color: transparent;
    width: 100%;
    text-decoration-style: double;
}
    </style>
    </head>
    <body>
        <!--Inicio cabeçalho-->
        <header>
                <div class="topo">
                    <a href="cadastroPi.html"><img src="https://github.com/Meirelis/PEI/blob/main/Daily-Solution/img/logo.png?raw=true" alt="" ></a>
                    <div class="form">                    
                            Email: <input type="text" name="nomeUnico" id="loginTxt"/></p>
                            Senha: <input type="password" id="passwordTxt" /></p>                 
                        <button class="botao" id='loginBtn'>Login</button>
                        <a href="#" id="click">criar novo cadastro</a>
                    </div>
                </div>
            </div>
        </header>
        <!--Fim cabeçalho-->
        <!--Inicio container azul-->
        <div class="container-azul">
            <form action="" id="formu" >
                <label>Nome:</label> 
                <input type="text" name="Nome"/ id="nomeCompletoTxt">
                <label>Email:</label> 
                <input type="text" name="Email"/ id="emailTxt">
                <label>Telefone:</label> 
                <input type="text" name="Telefone" id="telefoneTxt" />
                <label>Data de nascimento:</label> 
                <input name="data_nasc" id="dataNascTxt"/>
                <label>Sexo:</label> 
                <div class="sexo">
                    <label for="text">masculino</label>
                    <input name="sexo" type="radio" id="masculinoTxt" value="masculino" checked/>
                    <label for="text">feminino</label>
                    <input name="sexo" type="radio" id="femininoTxt" value="feminino"/>
                </div>

                

                <label for="text" >Selecione aqui o seu foco:</label>
                <div class="foco">
                    <div class="campo">
                        <label for="text">Muscúlos</label>
                        <input name="foco" type="radio" id="musculoTxt" value="musculo" checked/>
                        <label for="text">Cardio</label>
                        <input name="foco" type="radio" id="cardioTxt" value="cardio"/>
                        <label for="text">Resistência</label>
                        <input name="foco" type="radio" id="resistenciaTxt" value="resistencia"/>
                    </div>
                    <div class="campo">
                        <label for="text">Apenas saúde</label>
                        <input name="foco" type="radio" id="saudeTxt" value="saude" />
                    </div>
                </div>
                <label>Senha:</label> <input type="password"/>
                <label>Confirmar senha:</label> 
                <input type="password" id="senhaTxt"/>
                <div class="botoes">
                    <button class="botao">LIMPAR</button>
                    <button class="botao" id="submitBtn">CADASTRAR</button>        
                </div>
            </form>  
          
        </div>
        <div class="container-texto">
            <h2>Bem-vindo à Daily Solution!</h2>
            <p class="textoMid">
                A empresa que se preocupa com o seu bem-estar! Nós acreditamos que a combinação de exercícios e alimentação saudável é a chave para uma vida mais equilibrada e feliz. Com nossas soluções diárias, você pode transformar sua rotina e alcançar seus objetivos de saúde. Oferecemos planos alimentares personalizados, treinos elaborados por profissionais e acompanhamento constante para garantir o seu sucesso. Comece hoje mesmo a cuidar da sua saúde com a Daily Solution!
            </p>
        </div>
        <!--Fim container azul-->
        <!--Inicio container linha/divisor-->

        <!--Fim container linha/divisor--> 
         <!--Inicio Container das imagens--> 
        <div class="container-imagens">
            <div class="bloco-1">
                <img src="./img/bem estar.png" alt="" height="400px" width="370px">
                <span class="text-1">O bem-estar é uma sensação de equilíbrio físico, emocional e social, que traz diversos benefícios para a vida. Ele pode melhorar a qualidade do sono, aumentar a produtividade, reduzir o estresse e contribuir para uma vida mais feliz e saudável. Invista em atividades que promovam seu bem-estar e sinta a diferença na sua rotina!</span>
            </div>
            <div class="bloco-2">
                <img src="./img/exercicios.png" alt="" height="400px" width="370px">
                <span class="text-1">A prática regular de exercícios físicos traz inúmeros benefícios para a saúde, como melhora da aptidão cardiovascular, fortalecimento muscular, prevenção de doenças crônicas e redução do estresse. Não perca mais tempo e comece a cuidar do seu corpo hoje mesmo!</span>
            </div>
            <div class="bloco-3">
                <img src="./img/alimentação.png" alt="" height="400px" width="370px">
                <span class="text-1">Uma alimentação saudável é fundamental para manter o corpo e a mente em equilíbrio. Ela contribui para prevenir doenças, melhorar a qualidade de vida e aumentar a longevidade. Invista em escolhas alimentares saudáveis e transforme sua rotina em uma vida mais feliz e equilibrada!</span>
            </div>
        </div>
        <!--Fim Container das imagens-->
        <footer>Daily Solution © 2023 - Todos os Direitos Reservados</footer>
    </body>
</html>
        <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="js/sweetalert2.all.min.js"></script>
        <script type="text/javascript" charset="utf-8">

                $(document).ready(function (){
                    $('#loginBtn').on('click',async function(e){
                        e.preventDefault();
                        const loginTela = $('#loginTxt').val();
                        const senha = $('#passwordTxt').val();

                        const config = {
                        method: "post",
                        headers:{
                        'Accept': 'application/json',
                        'Content-Type' : 'application/json'
                    },
                    body: JSON.stringify({
                    login: loginTela,
                    senha: senha
                })
            }
            const request = await fetch('Controller/Login/logar.php',config);
            const submit =await fetch('./View/viewUser.php',config);
            const response =await request.json();
            if(response.status ==  1){
                alert('login efetuado com sucesso')
                window.location.href = "./View/viewUser.php";

            }else{
                alert('erro ao fazer login');
            }
                    })
                    $("#submitBtn").on("click", async function (e){                 
                    e.preventDefault();
                    
                    var genero = document.getElementsByName("sexo");
                    var i;
                    for(i=0;i<=genero.length;i++){
                        if(genero[i].checked){
                            var genero1 = genero[i].value
                            var genero2 =genero1;
                            break
                        }
                    };
                    
                    alert(genero2)
                    var foco = document.getElementsByName("foco");
                    var j;
                    for(j=0;j<=foco.length;j++){
                        if(foco[j].checked){
                            var foco1 = foco[j].value;
                            break
                        }
                    };
                    const nomeCompleto = $('#nomeCompletoTxt').val();
                    const email = $('#emailTxt').val();
                    const telefone =$('#telefoneTxt').val() ;
                    const dataNascimento = $('#dataNascTxt').val();             
                    const senha = $('#senhaTxt').val();
                    const sexo = JSON.stringify(genero1);
                    const meta = JSON.stringify(foco1);
                    alert(sexo);
                    alert(meta);
                    alert(telefone)
                    const config={ method:'post',
                                            headers:{ 'Accept': 'application/json', 
                                                        'Content-Type' : 'application/json'},
                                            body:JSON.stringify({
                                                nome: nomeCompleto,
                                                dataNasc: dataNascimento,
                                                email: email, 
                                                senha: senha,
                                                telefone: telefone,
                                                sexo:sexo,
                                                foco: meta
                                            })               
                                        }
                                        if(meta == '"cardio"'){
                                            window.location.href = "./View/cardio.html"
                                        }else{
                                            window.location.href = "./View/musculo.html"
                                        }   
                                    
                    const request = await fetch('Controller/usuarios/cadastrarUsuario.php',config);
                    const response = await request.json();
                    if(response.status == 1){Swal.fire('Atenção!','Usuario cadastrado com sucesso','sucess').then(res=>window.location.href = "./View/viewUser.php");}else{ alert('erro ao cadastrar usuario');}      
                    });
                });                          
        </script>
        <script defer>
            var form = document.getElementById('formu');
            var click = document.getElementById('click');
            click.addEventListener('click',function(){
                if(form.classList.contains('some')){
                form.classList.remove('some')
                form.classList.add('aparece')
            }else{
                form.classList.add('some')
                form.classList.remove('aparece')
            }
            })
          
        </script>
</html>
