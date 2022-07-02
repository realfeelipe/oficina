<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;

final class RecomendacoesController
{
    public function recomendacoes(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'menu_active' => 'recomendacoes'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN."/recomendacao");
        return $renderer->render($response, "recomendacoes.php", $data);
    }
    public function recomendacoes_create(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'menu_active' => 'recomendacoes'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN."/recomendacao");
        return $renderer->render($response, "create.php", $data);
    }
    public function recomendacoes_edit(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $id = $args['id'];
        $data['informacoes'] = array(
            'menu_active' => 'recomendacoes'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN."/recomendacao");
        return $renderer->render($response, "edit.php", $data);
    }
}