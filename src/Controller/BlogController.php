<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;

final class BlogController
{
    public function blogs(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'menu_active' => 'blogs'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN."/blog");
        return $renderer->render($response, "blogs.php", $data);
    }
    public function blogs_create(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'menu_active' => 'blogs'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN."/blog");
        return $renderer->render($response, "create.php", $data);
    }
    public function blogs_edit(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $id = $args['id'];
        $data['informacoes'] = array(
            'menu_active' => 'blogs'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN."/blog");
        return $renderer->render($response, "edit.php", $data);
    }
}