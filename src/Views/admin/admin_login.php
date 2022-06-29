<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <link href="<?=URL_BASE?>resources/css/css.css" rel="stylesheet"/>
    <link href="<?=URL_BASE?>resources/fonts/fontawesome/css/all.min.css" rel="stylesheet"/>
</head>
<body>
    <section class="pagina-login">
        <div class="container">
            <div class="center">
                <img src="<?=URL_BASE?>resources/imagens/logo.png" alt="">
                <div class="form">
                    <h1>Faça login no painel</h1>
                    <form action="#" method="post">
                        <input type="text" name="login" id="" placeholder="Usuário" required>
                        <input type="password" name="senha" id="" placeholder="Senha" required>
                        <!-- <input type="submit" value="Entrar" placeholder="Entrar"> -->
                        <button type="submit" name="entrar">Entrar</button>
                    </form>
                    <div class="resposta"></div>
                </div>
            </div>
            <div class="bottom">
                <div class="copy">
                    Todos os direitos reservados &copy; 2022
                </div>
                <div class="dev">
                    Desenvolvido por <a href="https://www.autonomyteam.com" target="_blank"><strong>Autonomy Team</strong></a>&nbsp;&nbsp;&nbsp;<a href="#"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </div>
    </section>

    <script src="<?=URL_BASE?>resources/js/jquery/jquery.min.js"></script>
	<script src="<?=URL_BASE?>resources/fonts/fontawesome/js/all.min.js"></script>
	<script src="<?=URL_BASE?>resources/js/js.min.js"></script>
</body>
</html>