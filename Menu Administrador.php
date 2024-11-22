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
    <h1 class = "AppName"> Amo o Claudio </h1> 
  </div>
  
  <!--1 NavBAr-->
  <div class="flexboxrow">
    <nav class = "flexboxrow"> 
     <div class = "wrapper" id="nav"> 
          <h3 class = "AppName">
          Menu
          </h3>
          
          <div class = "flexboxcolumn">
            <ul class = "ListColumn">
            <form method="POST" action = "Tela Cadastro Despesa - Adm.php">                                  
                <button class = "Button"type="submit">Cadastrar Despesas</button>
                </form>
                <form method="POST" action = "Tela de Relatorio.php">
                <button class = "Button" type="submit">Relatorio</button>
                </form>
                <form method="POST" action = "Perfil.php"> 
                <button class = "Button" type="submit">Perfil</button>
                </form>
                <form method="POST" action = "Tela de cadastro de Tipo de Despesa.php"> 
                <button class = "Button" type="submit">Cadastrar Tipo de Despesa</button>
                </form>
                <form method="POST" action = "Logout.php"> 
                <button class = "Button" type="submit">Deslogar</button>
                </form>
            </ul>
          </div> 
      </div>  
    </nav>
    
    <!--2 Content-->
    <div class = "flexboxcolumn">
        <form class = "TextBase" action = "logar.php" method = "POST">
            <!--<h1 class = "AppName"> So'More Tech </h1>-->
            
            <div class = "flexboxrow">
                <div id = "TextBox">
                <h2> 
                    <a class = "TittleLetter"> T </a>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Aliquam placerat tortor vel dui sagittis finibus. Maecenas rutrum vel tortor at dictum. 
                    Nunc volutpat tristique hendrerit. Sed rutrum magna eget eros auctor, sit amet efficitur purus feugiat. 
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris molestie felis eget arcu accumsan, 
                    sit amet posuere lorem aliquet. Curabitur non aliquam nisi, nec tempus ante. Pellentesque pretium ipsum 
                    sit amet mi dignissim faucibus. Phasellus rhoncus semper laoreet.

                    Quisque in lacus dui. Fusce ac arcu in est pharetra consectetur. Duis consectetur imperdiet leo facilisis
                    efficitur. Nunc iaculis eget urna semper dictum. Nam volutpat arcu ac sapien condimentum semper. 
                    Quisque tempor sit amet metus ut euismod. Vivamus ut lacus id purus convallis aliquet quis ut odio. 
                    Aliquam quis vehicula velit. Phasellus sagittis commodo augue, eu dictum mauris lacinia in. 
                    Etiam tristique leo quis ligula imperdiet luctus. Aenean neque orci, dignissim ut rutrum lobortis, 
                    gravida ac lorem. Aenean et molestie neque. Integer ac nisl nisl.
                    Morbi turpis elit, tincidunt ut tempus vel, egestas eu ligula. Curabitur id mattis neque. Mauris 
                    justo quam, interdum gravida nisi sit amet, sagittis pretium elit. Sed finibus sodales viverra. 
                    Integer id magna quis nisi tristique lobortis non vitae quam. Maecenas auctor ullamcorper urna, 
                    eget vulputate justo. Morbi dui lorem, luctus sed maximus sed, varius ac lorem. Sed vel neque 
                    viverra, rutrum felis vitae, porttitor tellus. In malesuada, ligula a interdum ultricies, nisl 
                    augue accumsan felis, sed aliquam ipsum velit sit amet felis. Suspendisse tristique pellentesque 
                    sollicitudin. Sed ac odio volutpat, venenatis leo sit amet, pellentesque nisl. Curabitur eleifend 
                    gravida semper. In suscipit est in pretium mattis.
                    
                    <a href="#" class = "links"> --See More-- </a>
                    
                    <br>
                    <br>
                    Social medias to contact the devs:
                    
                    <ul class = "ListRow">
                    <li><a href="#" class="fa fa-google"></a></li>
                    
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
                    </h2>        
                </div>
            </div>
        </form>
    </div> 
  </div>
  
</body>
</html>
