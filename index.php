<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="cub.css">
    <title>pagina1</title>
</head>
<body>
    <?php
        include ("menu.php");
    ?>
    <div>
            <h1>Faça seu login</h1>
        <form action="pagina2.php" method= "get">
            <input type="text" name="Email" placeholder="Email" required maxlength="25"><br/><br/>
            <input type="password" name="senha" placeholder="Senha" required maxlength="20"> <br/><br/>
            <input class="btn btn-success" type="submit" value="entrar" >
             <input class="btn btn-danger" type="reset" value="limpar">
             <a class="btn btn-warning" href="cadastro.php" role="button">Cadastre-se</a>
        </form>
    </div>
 </body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>