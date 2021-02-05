<?php 
date_default_timezone_set("America/Sao_Paulo") 
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Login
    </title>

    <!-- Meu CSS -->
    <link rel="stylesheet" href="assets/css/estilo.css">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">



    <link rel="icon" href="assets/img/login.png">

</head>

<body>

    <main>

        <header>
            <h2>Senac</h2>
        </header>

        <br>
        <br>
        <br>


        <section class="meio">

            <img src="./assets/img/login.png" alt="Silhueta de um busto">

            <br>
            <br>
            <br>

            <div class="row">
                <div class="col-3"></div>

                <div class="col-6">
                    <form method="post" action="valida_login.php">
                        <div class="form-col align-items-center">
                            <div class="col-auto">
                                <input type="text" class="form-control mb-4" placeholder="Usuário" name="usuario"
                                    maxlength="10">
                            </div>

                            <div class="col-auto">
                                <div class="input-group mb-4">
                                    <input type="password" class="form-control" placeholder="Senha" name="senha"
                                        minlength="4" maxlength="">
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-outline-primary mb-4"
                                    title="Envia informações para o servidor.">Logar</button>
                                <a href="" class="btn btn-outline-primary mb-4"
                                    title="Registra suas informações no servidor.">Cadastre-se</a>
                                <a href="" class="btn btn-outline-primary mb-4"
                                    title="Iremos te ajudar a recuperar a sua senha.">Esqueci a senha</a>
                                <button type="reset" class="btn btn-outline-danger mb-4"
                                    title="Limpa as informações do formulário.">Limpar</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <?php
             include_once "footer.php"
         ?>
    </main>

    <!-- JS Bootsrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>

</body>

</html>