
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="metod.css">
    <title>Cadastro de Champagne</title>

</head>

<body>

    <div class="continer">
        <h2>Selecione um Meio de Pagamento</h2>
        <div class="divo">
            <form method="post" action="opcao_esc.php">
                <div class="payment-option">
                    <input type="radio" id="credit-card" name="metodo" value="cartao">
                    <img src="Imagens/credit-card.png" alt="" width="35px">
                    <label for="credit-card">Cartão de Crédito</label>

                </div>
        </div>
        <div class="divo">
            <div class="payment-option">
                <input type="radio" id="pix" name="metodo" value="pix">
                <img src="imagens/logo-pix-png-icone-520x520.png" alt="" width="25px">
                <label for="Pix">Pix</label>

            </div>
        </div>
        <div class="divo">
            <div class="payment-option">
                <input type="radio" id="bolet" name="metodo" value="boleto">
                <img src="imagens/boleto.png" alt="">
                <label for="bank-transfer">Boleto</label>

            </div>
        </div>
        <button id="butão" class="but" type="submit">Continuar</button>
        </form>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>