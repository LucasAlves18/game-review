
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Cadastro.css"/>
    <title>Document</title>
</head>

<form action="cadastro.php"  method="POST">
<body class="corp">
    
    <div class="log">
    <div class="img"></div>

    <div class="eng">
    
    <input type="email" name="email" id="email" placeholder="E-mail" required >

    <br>
    <br>

   
    <input type="password"  name="senha"  id="senha"  placeholder="Senha" required >


    <br>
    <br>
</div>

    <div class="registrar">
    <input type="submit" value="Criar"  onclick=Nova()>
    <script type="text/javascript">
        function Nova(){
            location.href="indexPI.html"
            }
        
        </script> 
        <p>crie sua conta para receber novos reviews</p>
    <br>
    <br>
</div>
    </div>
</form>
</body>
</html>





