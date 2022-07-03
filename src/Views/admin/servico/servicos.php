<?=$this->fetch('../commons/header.php', $data)?>

<section class="dashboard">
    <div class="container">
        <div class="titulo-pagina">
            <i class="fas fa-wrench"></i>Serviços
        </div>
        <div class="topo">
            <div class="btn">
                <a href="<?=URL_BASE?>admin/servicos-create" class="btn">
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
                        <td class="titulo-item">TÍTULO</td>
                        <td class="data">DATA DE CADASTRO</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($data['informacoes']['lista'] as $servico){ ?>
                            <tr>
                                <td class="id"><?=$servico['id']?></td>
                                <td class="acao">
                                    <a href="<?=URL_BASE?>admin/servicos-edit/<?=$servico['id']?>"><i class="far fa-edit"></i></a>
                                    <a href="#"><i class="fas fa-trash"></i></a>
                                </td>
                                <td class="titulo-item"><?=$servico['titulo']?></td>
                                <td class="data"><?=$servico['data_cadastro']?></td>
                            </tr>
                        <?php }
                    ?>
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