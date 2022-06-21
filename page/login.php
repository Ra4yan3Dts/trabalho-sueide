<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/css.css ">
</head>
<body>



<div class="box">
        <form action="../controle/percorrer.php" method="post">
            <fieldset>
                <legend><b>LOGIN</b></legend>
                <br>
               
                
                <div class="inputBox">
                    <input type="password" name="senha" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="mail" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                
                <input type="submit" name="entrar" id="submit">
               <br></br>
                <li><a href="../index.php" id="cadastro">Cadastrar</a></li>
            </fieldset>
        </form>
    </div>
</body>
</html>   