
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="https://github.com/Meirelis/PEI/blob/main/Daily-Solution/img/logo.png?raw=true" type="png" class="imgLogo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="View/css/sweetalert2.min.css" type="text/css"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="View/css/cadastro.css">
        <title>Daily Solution</title>
    </head>
    <body>
        <!--Inicio cabeçalho-->
        <header>
                <div class="topo">
                    <a href="cadastroPi.html"><img src="https://github.com/Meirelis/PEI/blob/main/Daily-Solution/img/logo.png?raw=true" alt="" ></a>
                    <div class="form">                    
                            <span>Email:</span> <input type="text" name="nomeUnico"  id="loginTxt"/>
                            <span>Senha:</span> <input type="password" id="passwordTxt" />            
                        <button class="botao" id='loginBtn'>Login</button>
                        <div class="spanDiv"><span id="click" class='click'>Criar Novo Usuario</span></div> 
                    </div>
                </div>
            </div>
        </header>
        <!--Fim cabeçalho-->
        <!--Inicio container azul-->
        <div class="container-azul ">
            <form action="" id="formu" class="some" >
                <span class="msg" id="msg">Por favor não deixe campos vazios</span>
                <span class="label">Nome Completo: <p class="asterisco">*</p> </span> 
                <input type="text" name="Nome" id="nomeCompletoTxt" placeholder="Insira seu nome" required>
                <span class="label">Email:<p class="asterisco">*</p></span> 
                <input type="email" name="Email" id="emailTxt" placeholder="Insira seu email" required>
                <span class="label">Telefone: <p class="asterisco">*</p> </span> 
                <input type="tel" name="Telefone" id="telefoneTxt" placeholder="Insira seu Telefone" required >
                <span class="label">Data de nascimento: <p class="asterisco">*</p> </span> 
                <input type="datetime" name="data_nasc" id="dataNascTxt" placeholder="Insira sua data de nascimento" required/>
                <span class="label">Sexo: <p class="asterisco">*</p> </span> 
                <div class="sexo">
                    <span>masculino</span>
                    <input name="sexo" type="radio" id="masculinoTxt" value="masculino" checked/>
                    <span >feminino</span>
                    <input name="sexo" type="radio" id="femininoTxt" value="feminino"/>
                </div>
                <div class="foco">
                    <span>Selecione aqui o seu foco: </span>
                    <div class="campo">
                        <span>Muscúlos</span>
                        <input name="foco" type="radio" id="musculoTxt" value="musculo" checked>
                        <span>Cardio</span>
                        <input name="foco" type="radio" id="cardioTxt" value="cardio">
                        <span>Resistência</span>
                        <input name="foco" type="radio" id="resistenciaTxt" value="resistencia">
                    </div>
                    <div class="campo">
                        <span>Apenas saúde</span>
                        <input name="foco" type="radio" id="saudeTxt" value="saude">
                    </div>
                </div>
                <span class="msg" id="msgSenha">As senhas não coincidem!!</span>
                <span>Senha </span> 
                <div class="senha">
                    <input type="password" id="senhaTxt" placeholder="Insira uma senha" />
                    <span id="showPassword">Exibir Senha</span>
                </div>
                <span>Confirmar senha:</span> 
                <div class="senha">
                    <input type="password" id="confSenhaTxt" placeholder="Use a mesma senha"/>
                    <span id="mostrarConfSenha">Exibir Senha</span>
                </div>
                <div class="botoes">
                    <input type="reset" value="Limpar" class="botao">
                    <button class="botao" id="submitBtn">CADASTRAR</button>        
                </div>
            </form>  
          
        </div>
        <!--Fim container azul-->
        <div class="container-texto">
            <h2>Bem-vindo à Daily Solution!</h2>
            <p class="textoMid">
                A empresa que se preocupa com o seu bem-estar! Nós acreditamos que a combinação de exercícios e alimentação saudável é a chave para uma vida mais equilibrada e feliz. Com nossas soluções diárias, você pode transformar sua rotina e alcançar seus objetivos de saúde. Oferecemos planos alimentares personalizados, treinos elaborados por profissionais e acompanhamento constante para garantir o seu sucesso. Comece hoje mesmo a cuidar da sua saúde com a Daily Solution!
            </p>
        </div>
         <!--Inicio Container das imagens--> 
        <div class="container-imagens">
            <div class="bloco-1">
                <img src="" alt="" height="400px" width="370px">
                <span class="text-1">O bem-estar é uma sensação de equilíbrio físico, emocional e social, que traz diversos benefícios para a vida. Ele pode melhorar a qualidade do sono, aumentar a produtividade, reduzir o estresse e contribuir para uma vida mais feliz e saudável. Invista em atividades que promovam seu bem-estar e sinta a diferença na sua rotina!</span>
            </div>
            <div class="bloco-1">
                <img src="" alt="" height="400px" width="370px">
                <span class="text-1">A prática regular de exercícios físicos traz inúmeros benefícios para a saúde, como melhora da aptidão cardiovascular, fortalecimento muscular, prevenção de doenças crônicas e redução do estresse. Não perca mais tempo e comece a cuidar do seu corpo hoje mesmo!</span>
            </div>
            <div class="bloco-1">
                <img src="" alt="" height="400px" width="370px">
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
                    const senhaPass = document.getElementById('showPassword');
                    const senhaConf = document.getElementById('mostrarConfSenha');
                    $('#showPassword').on('click', function(){
                        // Get the password field
                        var passwordField = $('#senhaTxt');
                        // Get the current type of the password field will be password or text
                        var passwordFieldType = passwordField.attr('type');
                        // Check to see if the type is a password field
                        if(passwordFieldType == 'password'){
                            // Change the password field to text
                            passwordField.attr('type', 'text');
                            // Change the Text on the show password button to Hide
                           senhaPass.innerHTML = "Ocultar";
                        }else {
                            // If the password field type is not a password field then set it to password
                            passwordField.attr('type', 'password');
                            // Change the value of the show password button to Show
                            senhaPass.innerHTML = 'Exibir Senha';
                        }
                    })   
                    $('#mostrarConfSenha').on('click',function(){
                        var campoSenha = $('#confSenhaTxt');
                        var tipoCampo = campoSenha.attr('type');
                        if(tipoCampo == 'password'){
                            campoSenha.attr('type','text')
                            senhaConf.innerHTML = 'Ocultar'
                        }else{
                            campoSenha.attr('type','password');
                            senhaConf.innerHTML = 'Exibir Senha'
                        }
                    })                

                    /*Inicio da function que realiza o login*/
                    $('#loginBtn').on('click',async function(e){
                        e.preventDefault();

                        const loginTela = $('#loginTxt').val();
                        const senha = $('#passwordTxt').val();
                        
                        if(loginTela == ""){
                            alert('Campos Vazios');
                        }else if(senha == ""){
                            alert('campos vazios')
                        }else{

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
            const response =await request.json();
            alert(response.dados);
            
            if(response.status ===  1){
                alert('login efetuado com sucesso');
                window.location.href = `./View/viewUserId.php?id=${response.dados}`
            }else{
                alert('erro ao realizar login');
            }}
            //fim da parte de logiin
                    })
                    $("#submitBtn").on("click", async function (e){                 
                    const msg =document.getElementById('msg');
                    const secondMsg = document.getElementById('msgSenha');
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
                    const confSenha = $('#confSenhaTxt').val();
                    const sexo = JSON.stringify(genero1);
                    const meta = JSON.stringify(foco1);

                    if(nomeCompleto,email,telefone,dataNascimento,senha == ''){
                        msg.classList.add('mostraMsg')
                    }else{
                        if(senha === confSenha){
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
                                        }//FIM da config 
                                        console.log(config);
                                        const enviado =await fetch('Controller/usuarios/confEmailTelefone.php',config);
                                        const recebido =await enviado.json();
                                        const linha =recebido.dados;
                                        if(recebido.status === 1){  
                                            const request = await fetch('Controller/usuarios/cadastrarUsuario.php',config);
                                            const response = await request.json();
                                            if(response.status == 1){
                                                alert('usuario cadastrado com sucesso');
                                                switch(meta){
                                                    case '"musculo"':
                                                         Swal.fire('Atenção!','Usuario cadastrado com sucesso','sucess').then(res=>window.location.href = `./View/viewUser.php?meta=musculo&nome_completo=${nomeCompleto}`);            
                                                         break;
                                                     case'"cardio"':
                                                        alert(meta);
                                                         Swal.fire('Atenção!','Usuario cadastrado com sucesso','sucess').then(res=>window.location.href = `./View/viewUser.php?meta=cardio&nome_completo=${nomeCompleto}`);
                                                         break;
                                                     case '"resistencia"':
                                                         Swal.fire('Atenção!','Usuario cadastrado com sucesso','sucess').then(res=>window.location.href = `./View/viewUser.php?meta=perna&nome_completo=${nomeCompleto}`);
                                                        break;
                                                     case'"saude"':
                                                         Swal.fire('Atenção!','Usuario cadastrado com sucesso','sucess').then(res=>window.location.href = `./View/viewUser.php?meta=saude&nome_completo=${nomeCompleto}`);
                                                        break;
                                                     
                                                     }//fim do switch case
                                                
                                            }else if(confSenha == "" && senha == ""){
                                                secondMsg.classList.add('mostraMsg');                
                                                }
                                            else{
                                                secondMsg.classList.add('mostraMsg');
                                            }      //FIM DO RESPONSE.STATUS
                                        }else{
                                            alert('Email em uso');
                                        }//FIM DO RECEBIDO STATUS
            }else{
                alert('As senha não coincidem!');
            }}
                    });//Fim da function click submit
                });                          
        </script>
        <script >
            var form = document.getElementById('formu');
            var click = document.getElementById('click');
            click.addEventListener('click',function(){
                msg.classList.remove('mostraMsg')
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
