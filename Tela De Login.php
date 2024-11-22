<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    
    <link href="Style.css" 
    rel="stylesheet" 
    type="text/css" 
    media="all"> 
 
  </head>
  
  <body> 
            
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <div class = "flexboxcolumn">
    <h1 class = "AppName"> Tela de Login </h1> 
  </div>

  <div class="flexboxrow">
    <nav class = "flexboxrow"> 
     <div class = "wrapper" id="nav"> 
          <h3 class = "AppName">
            Claudinho Lindo
          </h3>
        
      </div>  
    </nav>
    
    <div class = "flexboxcolumn">
           
            <div class = "flexboxrow">
                <div id = "TextBox">
                <h2> 
                    <a class = "TittleLetter"> E </a>
                    ste site foi criado e pretende ser uma vitrine, para aqueles que vieram da página principal do portfólio. 
                    Em caso de interesse, tente enviar um e-mail ou entrar em contato com os desenvolvedores deste trabalho. 
                    Data de vencimento para este trabalho, realizado no último ano prosseguido no curso de formação técnica, 
                    novembro de 2022.

                    <br>
                    Clique no link abaixo para retornar à página principal do portfólio. 
                    
                    
                    <a href="#" class = "links"> --Veja mais-- </a>
                    
                    <br>
                    <br>
                    Redes sociais para entrar em contato com os desenvolvedores:
                    
                    
                </h2>        
                </div>
                
                <div class = "flexboxcolumn" id = "tbLogin">
                <h2> 
                    <a class = "TittleLetter"> Login </a> 
                    <br> Please Login or Create an Account to Enter. 
                </h2>
                
                <div>
                    <div class = "SpecialInfo"> 
                        <a> <input type = "text" class = "Input" Name="CPF" id="CPF" placeholder="CPF" autofocus="" required> </a> 
                    </div>
                    <div class = "SpecialInfo"> 
                        <a> <input type = "password" class = "Input" Name="Senha" id="Senha" placeholder="Password" autofocus="" required> </a> 
                    </div>
                </div>

                
                <div class = "flexboxcolumn">
                    <button id="Button_Logar" class = "Button"> Login </button>
                    <div>
                    <a> Don't have an account? </a>
        <form name = "form_cadastro" action = "Tela de Cadastro.php" method= "POST">  
            <button  id = "button_cadastrar" class = "Button"> Sign Up </button> 
        </form>
            </div>
            </div>
      
          </div>
        </div>

    </div> 
  </div>
  
</body>
<script src="http://code.jquery.com/jquery-1.11.3.min.js">
  
</script>
<script src ="jquery.js"type="text/javascript">

</script>
</html>