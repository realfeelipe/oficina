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
        $servicos = new Servico();

        $limit = 10;
        $paginaAtual = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($paginaAtual*$limit) - $limit;
        $qntTotal = count($servicos->selectServico('*', array('1'=>'1')));

        $proximaPagina = ($qntTotal > ($paginaAtual*$limit)) ? URL_BASE."admin/servicos?page=".($paginaAtual+1) : false;
        $paginaAnterior = ($paginaAtual > 1) ? URL_BASE."admin/servicos?page=".($paginaAtual-1) : false;

        $lista = $servicos->selectServicosPage($limit, $offset);

        $data['informacoes'] = array(
            'menu_active' => 'servicos',
            'lista' => $lista,
            'paginaAtual' => $paginaAtual,
            'proximaPagina' => $proximaPagina,
            'paginaAnterior' => $paginaAnterior
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
        $servicos = new Servico();
        $resultado = $servicos->selectServico('*', array('id' => $id))[0];
        $resultado['galeria'] = $servicos->selectGaleria($id);
        $data['informacoes'] = array(
            'menu_active' => 'servicos',
            'servico' => $resultado
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

        if($request->getUploadedFiles()['imagem_principal']){
            $imagem_principal = $request->getUploadedFiles()['imagem_principal'];
        }else{
            $imagem_principal = false;
        }

        $nome_imagem_principal = "";
        if($imagem_principal){
            if($imagem_principal->getError() === UPLOAD_ERR_OK){
                $extensao = pathinfo($imagem_principal->getClientFilename(), PATHINFO_EXTENSION);

                $nome = md5(uniqid(rand(), true)).pathinfo($imagem_principal->getClientFilename(), PATHINFO_FILENAME).".".$extensao;

                $nome_imagem_principal = "resources/imagens/servicos/".$nome;

                $imagem_principal->moveTo($nome_imagem_principal);
            }
        }

        $campos = array(
            'titulo' => $titulo,
            'url_amigavel' => $this->gerarUrlAmigavel($titulo),
            'descricao' => $descricao,
            'imagem_principal' => $nome_imagem_principal,
            'data_cadastro' => $data,
            'status' => $status
        );
        $servicos = new Servico();
        $servicos->insertServico($campos);

        $id_servico = $servicos->getUltimoServico()['id'];

        if($request->getUploadedFiles()['galeria_imagens']){
            $galeria = $request->getUploadedFiles()['galeria_imagens'];
        }else{
            $galeria = false;
        }
        if($galeria){
            foreach($galeria as $imagem){
                $foto = array();
                if($imagem->getError() === UPLOAD_ERR_OK){
                    $extensao = pathinfo($imagem->getClientFilename(), PATHINFO_EXTENSION);
                    $nome = md5(uniqid(rand(), true)).pathinfo($imagem->getClientFilename(), PATHINFO_FILENAME).".".$extensao;
                    $foto["caminho_imagem"] = "resources/imagens/servicos/".$nome;
                    $imagem->moveTo($foto["caminho_imagem"]);
                    $foto['id_servico'] = $id_servico;
                    $servicos->insertFotoGaleria($foto);
                }
            }
        }
        header('Location: '.URL_BASE.'admin/servicos');
        exit();

        // $data['informacoes'] = array(
        //     'menu_active' => 'servicos'
        // );
        // $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN."/servico");
        // return $renderer->render($response, "servicos.php", $data);
    }
    private function gerarUrlAmigavel($url) {

        $search = ['@<script[^>]*?>.*?</script>@si', '@<style[^>]*?>.*?</style>@siU', '@<[\/\!]*?[^<>]*?>@si', '@<![\s\S]*?--[ \t\n\r]*>@'];
    
        $string = preg_replace($search, '', $url);
    
        $table = ['Š'=>'S','š'=>'s','Đ'=>'Dj','đ'=>'dj','Ž'=>'Z','ž'=>'z','Č'=>'C','č'=>'c','Ć'=>'C','ć'=>'c','À'=>'A','Á'=>'A','Â'=>'A','Ã'=>'A','Ä'=>'A','Å'=>'A','Æ'=>'A','Ç'=>'C','È'=>'E','É'=>'E','Ê'=>'E','Ë'=>'E','Ì'=>'I','Í'=>'I','Î'=>'I','Ï'=>'I','Ñ'=>'N','Ò'=>'O','Ó'=>'O','Ô'=>'O','Õ'=>'O','Ö'=>'O','Ø'=>'O','Ù'=>'U','Ú'=>'U','Û'=>'U','Ü'=>'U','Ý'=>'Y','Þ'=>'B','ß'=>'Ss','à'=>'a','á'=>'a','â'=>'a','ã'=>'a','ä'=>'a','å'=>'a','æ'=>'a','ç'=>'c','è'=>'e','é'=>'e','ê'=>'e','ë'=>'e','ì'=>'i','í'=>'i','î'=>'i','ï'=>'i','ð'=>'o','ñ'=>'n','ò'=>'o','ó'=>'o','ô'=>'o','õ'=>'o','ö'=>'o','ø'=>'o','ù'=>'u','ú'=>'u','û'=>'u','ý'=>'y','ý'=>'y','þ'=>'b','ÿ'=>'y','Ŕ'=>'R','ŕ'=>'r'
        ];
    
        $string = strtr($string, $table);
        $string = mb_strtolower($string);
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        $string = str_replace(" ", "-", $string);
        return $string;
    }
}