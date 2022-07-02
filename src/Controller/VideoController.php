<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;

final class VideoController
{
    public function videos(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'menu_active' => 'videos'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN."/video");
        return $renderer->render($response, "videos.php", $data);
    }
    public function videos_create(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'menu_active' => 'videos'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN."/video");
        return $renderer->render($response, "create.php", $data);
    }
    public function videos_edit(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $id = $args['id'];
        $data['informacoes'] = array(
            'menu_active' => 'videos'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN."/video");
        return $renderer->render($response, "edit.php", $data);
    }
}