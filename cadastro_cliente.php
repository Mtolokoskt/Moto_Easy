<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body>
<div class="pgContato">
   <div class="contato">
      <div class="formContato">
         <form id="formContato" tabindex="1" action="index.php" method="post">
            <p>Cadastro de Passageiro </p>
            <input id="nome" name="nome" required="" type="text" placeholder="Nome" /> 
            <input id="email" name="email" required="" type="email" placeholder="Email" /> 
            <input id="tel" name="tel" type="tel" placeholder="Telefone" /> 
            <textarea id="conteudo" name="conteudo" required="" placeholder="Deixe uma mensagem"></textarea>
            <button class="botaoContato" type="submit">Enviar</button>
         </form>
         <a href="login_passageiro.php"><button>Voltar</button></a>
      </div>
   </div>
</div>
    
</body>
</html>