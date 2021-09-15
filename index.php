<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Principal</title>

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!--    CSS-->
    <link rel="stylesheet" type="text/css" href="public/css/style.css">

</head>
<!-- JavaScript   -->
<script type="text/javascript" src="public/js/main.js"></script>

<body>
    <legend>Busca Cep</legend>
    <div id="content-wrapper ">
        <div class="container-fluid">
            <div class="row g-3 ajusteContainer">

                <input type="hidden" id="requisicao" value="">
                <div class="col-md-12">
                    <!--cep-->
                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" id="cep" onfocusout="verificaCep(this.value)" value="">
                </div>
                <div class="col-md-4">
                    <!--logradouro-->
                    <label for="logradouro">logradouro</label>
                    <input type="text" id="logradouro" value="">
                </div>
                <div class="col-md-4">
                    <!--complemento-->
                    <label for="complemento">complemento</label>
                    <input type="text" id="complemento">
                </div>
                <div class="col-md-4">
                    <!--bairro-->
                    <label for="bairro">bairro</label>
                    <input type="text" id="bairro">
                </div>
                <div class="col-md-4">
                    <!--localidade-->
                    <label for="localidade">localidade</label>
                    <input type="text" id="localidade">
                </div>
                <div class="col-md-4">
                    <!--uf-->
                    <label for="uf">UF</label>
                    <input type="text" id="uf">
                </div>
                <div class="col-md-4">
                    <!--ibge-->
                    <label for="ibge">ibge</label>
                    <input type="text" id="ibge">
                </div>
                <div class="col-md-4">
                    <!--ibge-->
                    <label for="gia">gia</label>
                    <input type="text" id="gia">
                </div>
                <div class="col-md-4">

                    <!--ddd-->
                    <label for="ddd">ddd</label>
                    <input type="text" id="ddd">
                </div>
                <div class="col-md-4">
                    <!--siafi-->
                    <label for="siafi">siafi</label>
                    <input type="text" id="siafi">
                </div>

            </div>

        </div>
    </div>




</body>

</html>