<DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <div class="container-fluid">

            <h5 class="t1">Tribunal de Justiça do Estado do Amazonas<br>
            Divisão de Tecnologia da Informação e Comunicação<br>
            Sistema de Alvará</h5>

            <p class="t2">9° VARA CRIMINAL</p>


        <nav class="navbar navbar-expand-sm navbar-dark cor-barra" style="display: block; ">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Alvarás</a>
                </li>
            </ul>
        </nav>
        <div class="jumbotron">
            <div class="headJumb">
                <h6 t3=""><strong>Dados do Alvará</strong></h6>
                <p class="t4">Campos Obrigatórios (*)</p>
            </div>
            <div>
                <h7><strong>Dados do Processo</strong> </h7>
                <form action="#" method="post">
                <div class="card-group">
                    <label>*Número da Conta Judicial:</label>
                    <input type="text" name="contajud" required>

                </div>
                <div class="card-group">
                    <label>Data de Validade:</label>
                    <input type="date" name="datavalid" >

                </div>
                <div class="card-group">
                    <label>*Processo</label>
                    <input type="number" name="processo" >
                    <input type="text" name="descricaoprocesso">

                </div>
                </form>
            </div>
            <div>
                <h6><strong>Dados do Sacador</strong></h6>
                <form action="#" method="post">
                <div>
                    <label>* Natureza do Sacador 1:</label>
                    <input type="checkbox" name="pfisica"> Pessoa Fisica
                    <input type="checkbox" name="pjuridica"> Pessoa Juridica
                </div>
                <div>
                    <label>Natureza do Sacador 2:</label>
                    <input type="checkbox" name="pfisica"> Pessoa Fisica
                    <input type="checkbox" name="pjuridica"> Pessoa Juridica
                </div>
                <div>
                    <label>* Representação Processual:</label>
                    <input type="checkbox" name="advogado"> Advogado
                    <input type="checkbox" name="juspostulandi"> Jus Postulandi
                </div>

                <div>

                </div>

                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
    </html>
