<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;
use App\Model\Servico;

final class ServicoController
{
    public function servicos(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'menu_active' => 'servicos'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN."/servico");
        return $renderer->render($response, "servicos.php", $data);
    }
    public function servicos_create(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'menu_active' => 'servicos'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN."/servico");
        return $renderer->render($response, "create.php", $data);
    }
    public function servicos_edit(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $id = $args['id'];
        $data['informacoes'] = array(
            'menu_active' => 'servicos'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN."/servico");
        return $renderer->render($response, "edit.php", $data);
    }
    public function servicos_insert(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $titulo = $request->getParsedBody()['titulo'];
        $data = $request->getParsedBody()['data'];
        $descricao = $request->getParsedBody()['descricao'];
        $status = $request->getParsedBody()['ativo'];

        $campos = array(
            'titulo' => $titulo,
            'url_amigavel' => '',
            'descricao' => $descricao,
            'imagem_principal' => '',
            'data_cadastro' => $data,
            'status' => $status
        );

        echo "<pre>";
        var_dump($campos);
        exit();

        $data['informacoes'] = array(
            'menu_active' => 'servicos'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN."/servico");
        return $renderer->render($response, "servicos.php", $data);
    }
}