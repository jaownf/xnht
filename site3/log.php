<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xenohunter - Sua loja de games.</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
    body{
        background-color: #546A7B;
    }
    .login {
        width: 100%;
        height: 100vh;
        align-items: center;
        justify-content: center;
        display: flex;
    }
        </style>
</head>
<div class="login">
    <body style="background-color: #546A7B">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3>Acesso restrito</h3>
                            </div>
                        <div class="card-body">
        <form action="login.php" method="POST">
                <div class="mb-3">
                    <label>Usuário</label>
                    <input type="text" name="usuario" class="form-control">
                </div>
                <div class="mb-3">
                <label>Senha</label>
                    <input type="password" name="senha" class="form-control">
                </div>
                <div class="mb-3">
                <button type="submit" class="btn btn-primary">Acessar</button>
                </div>
            </form>
                    </div>
                </div>
         </div>
    </div>
   </div>
   </div>
</body>
</html>