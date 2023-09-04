
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro de Champagne</title>
    <style>
        .continer {
            margin: auto;
            margin-top: 100px;
            width: 90%;
            max-width: 600px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
            padding: 20px;


        }

        @media (max-width: 600px) {
            .continer {

                margin: 0 auto;
                margin-top: 100px;
                width: 90%;
                max-width: 600px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
                padding: 60px;

            }
        }


        .but {
            color: #f2f2f2;
            padding: 7px;
            background-color: green;
            border-radius: 5px;

            position: relative;
            top: 10px;
            left: 25px;
        }

        @media (max-width: 600px) {
            .but {
                color: #f2f2f2;
                padding: 5px;
                background-color: green;
                border-radius: 5px;
                /* Ajuste a posição conforme necessário */
                position: relative;
                top: 35px;
                left: 25px;
            }
        }

        /*
as divs 
*/
        .payment-option {
            display: flex;
            align-items: center;
            margin: 10px 0;
            cursor: pointer;
            border: color;


        }

        .payment-option input[type="radio"] {
            padding: 10px;
            margin-right: 0px;

        }

        .payment-option label {
            font-size: 20px;
        }

        .payment-option img {
            max-width: 50px;
            margin-left: 10px;
        }

        .divo {

            padding: 20px;
            margin-top: 3px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
            border-radius: 2px;
            border: 1px solid rgb(0, 0, 0);

            position: relative; /* ou absolute, dependendo do layout desejado */
    z-index: 0;
            /* Borda sólida de 2px na cor azul */

            width: 90%;
            /* Largura em relação ao elemento pai */
            max-width: 600px;
            /* Largura máxima */
            margin: 0 auto;
            /* Centralizar horizontalmente */

            background-color: #f2f2f2;

            /* Inclui preenchimento e borda na largura total */
        }

        @media (max-width: 600px) {
            .divo {
                width: 100%;
                /* Reduz a largura em telas menores */
                font-size: 16px;
                /* Ajusta o tamanho da fonte */
                position: relative;
                /* Posicionamento relativo */
                top: 25px;
                /* Move 20px para baixo */
            }
        }

        .divo:hover {

            background-color: rgb(226, 221, 221);
        }
    </style>
</head>

<body>
    <?php
    include("index.php");
    ?>

    <div class="continer">
        <h2>Selecione um Meio de Pagamento</h2>
        <div class="divo">
            <form method="post" action="opcao_esc.php">
                <div class="payment-option">
                    <input type="radio" id="credit-card" name="metodo" value="cartao">
                    <img src="https://i.ibb.co/vdbBkgT/mastercard.jpg" alt="">
                    <label for="credit-card">Débito</label>

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
        <button class="but" type="submit">Continuar</button>
        </form>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>