<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;

final class HomeController
{
    public function home(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "home.php");
    }
    public function a_rlbs_motors(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        $data['informacoes'] = array(
            'title' => 'A RLBS Motors',
            'descricao' => 'Aqui vem a descrição da página institucional'
        );

        return $renderer->render($response, "a_rlbs_motors.php", $data);
    }
    public function servicos(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        $data['informacoes'] = array(
            'title' => 'Nossos Serviços',
            'descricao' => 'Aqui vem a descrição da página Serviços'
        );

        return $renderer->render($response, "servicos.php", $data);
    }
    public function videos(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        $data['informacoes'] = array(
            'title' => 'Vídeos',
            'descricao' => 'Aqui vem a descrição da página Vídeos'
        );

        return $renderer->render($response, "videos.php", $data);
    }
    public function blog(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        $data['informacoes'] = array(
            'title' => 'Blog',
            'descricao' => 'Aqui vem a descrição da página Blog'
        );

        return $renderer->render($response, "blog.php", $data);
    }
    public function fale_conosco(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        $data['informacoes'] = array(
            'title' => 'Fale Conosco',
            'descricao' => 'Aqui vem a descrição da página Fale Conosco'
        );

        return $renderer->render($response, "fale_conosco.php", $data);
    }
    public function page(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        $url = $args['any'];

        if($url === 'noticia-teste'){
            $data['informacoes'] = array(
                'title' => 'Notícia de teste',
                'descricao' => 'Aqui vem a descrição da página de notícia'
            );
            return $renderer->render($response, "blog_detalhe.php", $data);
        }else{
            $data['informacoes'] = array(
                'title' => 'Ar Condicionado',
                'descricao' => 'Aqui vem a descrição da página de serviços'
            );
            return $renderer->render($response, "servico_detalhe.php", $data);
        }
        
    }
}