<?php
use Slim\App;
return function (App $app) {
    // CONTROLADORES ADMIN
    $app->get('/admin-login', '\App\Controller\AdminController:login');
    $app->get('/dashboard', '\App\Controller\AdminController:dashboard');

    // CONTROLADORES SERVIÇOS
    $app->get('/admin/servicos', '\App\Controller\ServicoController:servicos');
    $app->get('/admin/servicos-create', '\App\Controller\ServicoController:servicos_create');
    $app->get('/admin/servicos-edit/{id}', '\App\Controller\ServicoController:servicos_edit');

    // CONTROLADORES VÍDEOS
    $app->get('/admin/videos', '\App\Controller\VideoController:videos');
    $app->get('/admin/videos-create', '\App\Controller\VideooController:videos_create');
    $app->get('/admin/videos-edit/{id}', '\App\Controller\VideoController:videos_edit');

    //ROTAS DO SITE
    $app->get('/', '\App\Controller\HomeController:home');
    $app->get('/a-rlbs-motors', '\App\Controller\HomeController:a_rlbs_motors');
    $app->get('/servicos', '\App\Controller\HomeController:servicos');
    $app->get('/videos', '\App\Controller\HomeController:videos');
    $app->get('/blog', '\App\Controller\HomeController:blog');
    $app->get('/fale-conosco', '\App\Controller\HomeController:fale_conosco');
    $app->get('/{any}', '\App\Controller\HomeController:page');;
};