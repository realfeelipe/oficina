<?php
use Slim\App;
return function (App $app) {
    $app->get('/', '\App\Controller\HomeController:home');

    $app->get('/admin-login', '\App\Controller\AdminController:login');
    $app->get('/dashboard', '\App\Controller\AdminController:dashboard');
    $app->get('/admin/servicos', '\App\Controller\AdminController:servicos');
    $app->get('/admin/servicos-create', '\App\Controller\AdminController:servicos_create');

    $app->get('/a-rlbs-motors', '\App\Controller\HomeController:a_rlbs_motors');
    $app->get('/servicos', '\App\Controller\HomeController:servicos');
    $app->get('/videos', '\App\Controller\HomeController:videos');
    $app->get('/blog', '\App\Controller\HomeController:blog');
    $app->get('/fale-conosco', '\App\Controller\HomeController:fale_conosco');
    $app->get('/{any}', '\App\Controller\HomeController:page');;
};