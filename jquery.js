
$('#flamengo').click(function(){     
    var desc = $("#descricao").val();
    console.log(desc);                                                                                                                           
    $.post("http://localhost/ahj/Cadastro%20Despesa%20-%20Adm.php",
    {
        
        descricao: $("#descricao").val(),
        Valor: $("#Valor").val(),
        data: $("#data").val(),
        tipo_despesa: $("#tipo_despesa").val()
        


    },
    function(data, status)
    {
        alert('Despesa cadadastrada com sucesso!');
    }
    );
    
  });
  $('#cadastro_despesa').click(function(){     
      var desc = $("#descricao").val();
      console.log(desc);                                                                                                                           
      $.post("http://localhost/ahj/Cadastro%20tipo%20de%20despesa.php",
      {         
          descricao: $("#descricao").val(),             
      },
      function(data, status)
      {
          alert('Tipo de Despesa cadadastrada com sucesso!');
      }
      );     
    });
    $('#Button_Cadastrar').click(function(){     
                                                                                                             
        $.post("http://localhost/ahj/cadastro.php",
        {         
            CPF: $("#CPF").val(),
            Nome: $("#Nome").val(), 
            Senha: $("#Senha").val(), 
            administrador: 0,  
        },
        function(data, status)
        {
            if(data == '1')
            {
                window.location.href = "http://localhost/ahj/Tela%20De%20Login.php";
            }
            
            if(data == '2')
            {
                alert("Usuário ou senha incorretos!")
            }
          
        }
        );
        
      });
      $('#Button_Logar').click(function(){     
                                                                                                             
        $.post("http://localhost/ahj/logar.php",
        {         
            CPF: $("#CPF").val(),             
            Senha: $("#Senha").val(), 
        },
        function(data, status)
        {
            if(data == '1')
            {
                alert($("#CPF").val());
                window.location.href = "http://localhost/ahj/Menu%20Administrador.php";
            }
            if(data == '2')
            {
                window.location.href = "http://localhost/ahj/Menu.php";
            }
            if(data == '3')
            {
                alert("Usuário ou senha incorretos!")
            }
          
        }
        );
        
      });
  