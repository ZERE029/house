<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="cub.css">
    <title>pagina2</title>
</head>
<body>
    <div>
        <h1>Resultado final</h1>
        <form action="index.php" method= "get">
            <p><b>Email recebido foi:</b><?php echo $_GET["Email"];?></p>
            <p><b>Senha recebida foi:</b><?php echo $_GET["senha"];?></p>
            <p><b>Nome recebido foi:</b><?php echo $_GET["Nome"];?></p>
            <p><b>Idade recebida foi:</b><?php echo $_GET["Idade"];?></p>
            <p><b>CPF recebido foi:</b><?php echo $_GET["CPF"];?></p>
            <br/>
            <input class="btn btn-primary" type="submit" value="voltar" >
        </form>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>