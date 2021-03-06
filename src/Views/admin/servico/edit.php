<?=$this->fetch('../commons/header.php', $data)?>

<section class="dashboard">
    <div class="container">
        <div class="titulo-pagina">
            <i class="fas fa-wrench"></i>Serviços - Editar
        </div>
        <div class="form">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="w-80">
                        <label for="">
                            Título
                            <input type="text" name="titulo" id="" value="<?=$data['informacoes']['servico']['titulo']?>">
                        </label>
                    </div>
                    <div class="w-20">
                        <label for="">
                            Data
                            <input type="date" name="data" id="" value="<?=date('Y-m-d', strtotime($data['informacoes']['servico']['data_cadastro']))?>">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <label for="">
                        Descrição
                        <textarea name="descricao" id="descricao" cols="30" rows="10"><?=$data['informacoes']['servico']['descricao']?></textarea>
                    </label>
                    
                </div>
                <div class="row">
                    <label for="">
                        Imagem Principal
                        <input type="file" name="imagem_principal" id="imagem">
                    </label>
                    <div class="img">
                        <img src="<?=URL_BASE.$data['informacoes']['servico']['imagem_principal']?>" alt="">
                        <label for="">
                            <input type="checkbox" name="excluir_imagem_principal" id="">
                            Excluir imagem
                        </label>
                    </div>
                </div>
                <div class="row">
                    <label for="">
                        Galeria de Imagens
                        <input type="file" name="galeria_imagens[]" id="imagem" multiple>
                    </label>
                    <div class="d-flex">
                        <?php foreach($data['informacoes']['servico']['galeria'] as $imagem){ ?>
                            <div class="img">
                                <img src="<?=URL_BASE.$imagem['caminho_imagem']?>" alt="">
                                <label for="">
                                    <input type="checkbox" name="excluir_imagem_galeria[]" id="">
                                    Excluir imagem
                                </label>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row">
                        <label for="">
                            Ativo
                            <select name="ativo" id="">
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                            </select>
                        </label>
                    </div>
                    <div class="row">
                        <button type="submit">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- CKEditor v.5 -->
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
            .create( document.querySelector( '#descricao' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script> -->

<!-- CKEditor v.4 -->
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'descricao' );
</script>

<?=$this->fetch('../commons/footer.php')?>