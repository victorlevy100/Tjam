<DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <form class="form" action="logar.php" method="POST">
        <div class="card">
            <div class="card-top">
                <img class="imglogin" src="img/login.jpg" alt="">
                <h2> Sistema de Alvara </h2>
                <p> Login </p>
            </div>

            <div class="card-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Digite seu E-mail" required>

            </div>
            <div class="card-group">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Digite seu senha" required>

            </div>
            <div class="card-group">
                <label><input type="checkbox">Lembre-me</label>
            </div>
            <div class="card-group btn">
                <button type="submit" >ACESSAR</button>
            </div>
        </div>
    </form>
    </body>
    </html>