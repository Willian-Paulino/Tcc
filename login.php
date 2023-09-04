<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <a href="../prototipo site/index.html"><span class="material-symbols-outlined">
            arrow_back
        </span></a>

    <div class="container login">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-itens-center ">
                <img src="imgs/Untitled (2).png" class="login__img">
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-5 login__esquerdo p-3">
                <h1>Cadastre-se</h1>
                <form action="../Controllers/functions/registra.php" method="POST">
                    <div class="form-group login__form">

                        <label for="name" class="login__p"><span class="material-symbols-outlined">
                                account_circle
                            </span>Nome</label>

                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group login__form">

                        <label for="email" class="login__p"><span class="material-symbols-outlined">
                                mail
                            </span> E-mail</label>

                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group login__form">

                        <label for="senha" class="login__p"><span class="material-symbols-outlined">
                                lock
                            </span> Crie sua senha</label>
                        <input type="password" name="senha" class="form-control">
                    </div>

                    <div class="form-group login__form">

                        <label for="password_check" class="login__p">
                            <span class="material-symbols-outlined">
                                check
                            </span> Verifique Sua senha
                        </label>
                        <input type="password" name="verifica" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="form-group">
                                <button class="btn btn-outline-primary d-flex justify-content center">CRIAR</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-2">
                <?php require('autenticacao.php'); ?>
                <a href="<?php echo $client->createAuthUrl()?>">logar com google</a>
            </div>
            </form>
            <div class="col-5 d-flex justify-content-center login__direito ">
                <h1>Entre na Conta</h1>
                <form action="../Controllers/functions/logar.php" method="POST">
                    <div class="form-group login__form">

                        <label for="email" class="login__p"><span class="material-symbols-outlined">
                                mail
                            </span> E-mail</label>

                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group login__form">

                        <label for="senha" class="login__p"><span class="material-symbols-outlined">
                                lock
                            </span>Senha</label>
                        <input type="text" name="senha" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="form-group">
                                <button class="btn btn-outline-primary d-flex justify-content center">ENTRAR</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</html>