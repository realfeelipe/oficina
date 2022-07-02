<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>Painel Administrativo</title>
    <link href="<?=URL_BASE?>resources/css/css.css" rel="stylesheet"/>
    <link href="<?=URL_BASE?>resources/fonts/fontawesome/css/all.min.css" rel="stylesheet"/>
</head>
<body class="admin">
	<header>
		<div class="container">
            <div class="left">
                <i class="fas fa-bars"></i>
            </div>
            <div class="right">
                <div class="menu">
                    <ul>
                        <li>
                            Felipe Almeida
                            <i class="fas fa-sort-down"></i>
                            <img src="<?=URL_BASE?>resources/imagens/missao.png" alt="">
                            <ul class="dropdown">
                                <li><a href="#">Perfil</a></li>
                                <li><a href="#">Configurações</a></li>
                                <li><a href="#">Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="menu-lateral">
            <div class="top">
                <img src="<?=URL_BASE?>resources/imagens/logo.png" alt="">
                <hr>
                <ul>
                    <li class="<?=($data['informacoes']['menu_active'] === 'dashboard') ? 'active' : ''?>">
                        <a href="<?=URL_BASE?>dashboard">
                            <i class="fas fa-chart-area"></i>Dashboard
                        </a>
                    </li>
                    <li class="nome-categoria">
                        Conteúdo
                    </li>
                    <li class="<?=($data['informacoes']['menu_active'] === 'servicos') ? 'active' : ''?>">
                        <a href="<?=URL_BASE?>admin/servicos">
                            <i class="fas fa-wrench"></i>Serviços
                        </a>
                    </li>
                    <li class="<?=($data['informacoes']['menu_active'] === 'videos') ? 'active' : ''?>">
                        <a href="<?=URL_BASE?>admin/videos">
                            <i class="fab fa-youtube"></i>Vídeos
                        </a>
                    </li>
                    <li class="<?=($data['informacoes']['menu_active'] === 'blogs') ? 'active' : ''?>">
                        <a href="#">
                            <i class="far fa-newspaper"></i>Blogs
                        </a>
                    </li>
                    <li class="<?=($data['informacoes']['menu_active'] === 'recomendacoes') ? 'active' : ''?>">
                        <a href="#">
                            <i class="far fa-comments"></i>Recomendações
                        </a>
                    </li>
                    <li class="nome-categoria">
                        Configurações
                    </li>
                    <li class="<?=($data['informacoes']['menu_active'] === 'usuario') ? 'active' : ''?>">
                        <a href="#">
                            <i class="fas fa-user"></i>Usuário
                        </a>
                    </li>
                    <li class="<?=($data['informacoes']['menu_active'] === 'site') ? 'active' : ''?>">
                        <a href="#">
                            <i class="fas fa-cogs"></i>Site
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-sign-out-alt"></i>Sair
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom">
                <div class="copy">
					Todos os direitos reservados &copy; 2022
				</div>
				<div class="dev">
					Desenvolvido por <a href="https://www.autonomyteam.com" target="_blank"><strong>Autonomy Team</strong></a>&nbsp;&nbsp;&nbsp;<a href="#"><i class="fab fa-facebook-f"></i></a>
				</div>
            </div>
            <div class="close">
                <i class="fas fa-times"></i>
            </div>
        </div>
	</header>

    <div class="conteudo">