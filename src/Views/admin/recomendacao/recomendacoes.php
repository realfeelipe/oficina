<?=$this->fetch('../commons/header.php', $data)?>
<section class="dashboard">
    <div class="container">
        <div class="titulo-pagina">
            <i class="far fa-comments"></i>Recomendações
        </div>
        <div class="topo">
            <div class="btn">
                <a href="<?=URL_BASE?>admin/recomendacoes-create" class="btn">
                    Cadastrar novo
                </a>
            </div>
            <div class="form-pesquisa">
                <form action="#" method="get">
                    <input type="search" name="pesquisa" id="" placeholder="título do item">
                    <button type="submit">Pesquisar</button>
                </form>                
            </div>
        </div>
        <div class="lista">
            <table>
                <thead>
                    <tr>
                        <td class="id">ID</td>
                        <td class="acao">AÇÕES</td>
                        <td class="titulo-item">NOME</td>
                        <td class="data">DATA DE CADASTRO</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="id">1</td>
                        <td class="acao">
                            <a href="<?=URL_BASE?>admin/recomendacoes-edit/1"><i class="far fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash"></i></a>
                        </td>
                        <td class="titulo-item">Felipe Almeida</td>
                        <td class="data">06/08/1991</td>
                    </tr>
                    <tr>
                        <td class="id">2</td>
                        <td class="acao">
                            <a href="#"><i class="far fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash"></i></a>
                        </td>
                        <td class="titulo-item">Felipe Almeida</td>
                        <td class="data">06/08/1991</td>
                    </tr>
                    <tr>
                        <td class="id">3</td>
                        <td class="acao">
                            <a href="#"><i class="far fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash"></i></a>
                        </td>
                        <td class="titulo-item">Felipe Almeida</td>
                        <td class="data">06/08/1991</td>
                    </tr>
                    <tr>
                        <td class="id">4</td>
                        <td class="acao">
                            <a href="#"><i class="far fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash"></i></a>
                        </td>
                        <td class="titulo-item">Felipe Almeida</td>
                        <td class="data">06/08/1991</td>
                    </tr>
                    <tr>
                        <td class="id">5</td>
                        <td class="acao">
                            <a href="#"><i class="far fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash"></i></a>
                        </td>
                        <td class="titulo-item">Felipe Almeida</td>
                        <td class="data">06/08/1991</td>
                    </tr>
                    <tr>
                        <td class="id">6</td>
                        <td class="acao">
                            <a href="#"><i class="far fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash"></i></a>
                        </td>
                        <td class="titulo-item">Felipe Almeida</td>
                        <td class="data">06/08/1991</td>
                    </tr>
                    <tr>
                        <td class="id">7</td>
                        <td class="acao">
                            <a href="#"><i class="far fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash"></i></a>
                        </td>
                        <td class="titulo-item">Felipe Almeida</td>
                        <td class="data">06/08/1991</td>
                    </tr>
                    <tr>
                        <td class="id">8</td>
                        <td class="acao">
                            <a href="#"><i class="far fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash"></i></a>
                        </td>
                        <td class="titulo-item">Felipe Almeida</td>
                        <td class="data">06/08/1991</td>
                    </tr>
                    <tr>
                        <td class="id">9</td>
                        <td class="acao">
                            <a href="#"><i class="far fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash"></i></a>
                        </td>
                        <td class="titulo-item">Felipe Almeida</td>
                        <td class="data">06/08/1991</td>
                    </tr>
                    <tr>
                        <td class="id">10</td>
                        <td class="acao">
                            <a href="#"><i class="far fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash"></i></a>
                        </td>
                        <td class="titulo-item">Felipe Almeida</td>
                        <td class="data">06/08/1991</td>
                    </tr>
                </tbody>
            </table>
            <div class="paginacao">
                <a href="#"><i class="fas fa-arrow-circle-left"></i></a>
                <span>1</span>
                <a href="#"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        

        
    </div>
</section>

<?=$this->fetch('../commons/footer.php')?>