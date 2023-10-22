function exibeNome(){
     


         $(document).ready(async function(){await carregarUser()})
         //INICIO FUNCTION BUSCA NOME USANDO ID
         async function carregarUser(){
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
         const request =await fetch('../Controller/usuarios/listarNomePeloId.php',config);      
         const response = await request.json();
         dados = response['dados'];

 

         //FIM DA PARTE Q BUSCA O NOME USANDO O ID;
         
 
         //INICIO DA PARTE QUE RETORNA A META E ALTERA O INNER;

         //FIM DA PARTE Q RETORNA META;
             
     }//FIM DA FUNCTION CARREGAR USER;
 }