<!DOCTYPE html>
<html>
<head>
    <link href="css/index.css" rel="stylesheet" type="text/css" >
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <form action="formulario.php" method="post">
        <div class="apresentacao">
                    <div class="Produtos">
                        <label class="nomeProduto" id="">Sofá</label>
                        <img src="" class="imgProduto">
                        <p class="">Valor: 200.90</p>
                        <input type="checkbox" class="checkProduto" id="prod1" name="prod1">

                        <input type="number" min="1" max="400" class="quantidade" id="quant1" class="qnt"
                            placeholder="Quantidade" name="quant1">
                    </div>

                    <div class="Produtos">
                        <label class="nomeProduto" id="">Mesa</label>
                        <img src="" class="imgProduto">
                        <p class="">Valor: 17.90</p>
                        <input type="checkbox" class="checkProduto" id="prod2" name="prod2">

                        <input type="number" min="1" max="400" class="quantidade" id="quant2" name="quant2" class="qnt"
                            placeholder="Quantidade" >
                    </div>

                    <div class="Produtos">
                        <label class="nomeProduto" id="">Cadeira</label>
                        <img src="" class="imgProduto">
                        <p class="">Valor: 17.90</p>
                        <input type="checkbox" class="checkProduto" id="prod3" name="prod3">
                        <input type="number" min="1" max="400" class="quantidade" id="quant3" name="quant3"
                               class="qnt"
                            placeholder="Quantidade"
                               >
                    </div>

                    <div class="Produtos">
                        <label class="nomeProduto" id="">Geladeira</label>
                        <img src="" class="imgProduto">
                        <p class="">Valor: 17.90</p>
                        <input type="checkbox" class="checkProduto" id="prod4" name="prod4">

                        <label class="txtQuantidade">Qntde:</label>
                        <input type="number" min="1" max="400" class="quantidade" id="quant4" name="quant4">
                    </div>

                    <div class="Produtos">
                        <label class="nomeProduto" id="">Microondas</label>
                        <img src="" class="imgProduto">
                        <p class="">Valor: 17.90</p>
                        <input type="checkbox" class="checkProduto" id="prod5" name="prod5">

                        <label class="txtQuantidade">Qntde:</label>
                        <input type="number" min="1" max="400" class="quantidade" id="quant5" name="quant5">
                    </div>

                    <div class="Produtos">
                        <label class="nomeProduto" id=""><center>Fogão</center></label>
                        <img src="" class="imgProduto">
                        <p class="">Valor: 17.90</p>
                        <input type="checkbox" class="checkProduto" id="prod6" name="prod6">

                        <label class="txtQuantidade">Qntde:</label>
                        <input type="number" min="1" max="400" class="quantidade" id="quant6" name="quant6">
                    </div>
                    <div class="pagamento">
                        <select id="fpagamento" name="fpagamento">
                            <option>Forma de Pagamento</option>
                            <option value="1">Cartão de Crédito</option>
                            <option value="2">Cartão de Débito</option>
                        </select>
                        
                        <select id="qntParcela" name="qntParcela">
                            <option>Quantidade de Parcelas</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <input id="btnEnviar" type="submit"     name="Enviar" value="Enviar">

            </div>

                </div>
        </form>
</body>
</html>