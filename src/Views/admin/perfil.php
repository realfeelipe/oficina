<?=$this->fetch('commons/header.php', $data)?>

<section class="dashboard">
    <div class="container">
        <div class="titulo-pagina">
            <i class="fas fa-user"></i>Perfil
        </div>
        <div class="form">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="row">
                    <label for="">
                        Nome
                        <input type="text" name="nome" id="">
                    </label>
                </div>
                <div class="row">
                    <label for="">
                        E-Mail
                        <input type="email" name="email" id="">
                    </label>
                </div>
                <div class="row">
                    <label for="">
                        Foto do Usuário
                        <input type="file" name="foto_usuario" id="imagem">
                    </label>
                    <div class="img">
                        <img src="<?=URL_BASE?>resources/imagens/valores.png" alt="">
                        <label for="">
                            <input type="checkbox" name="excluir_foto_usuario" id="">
                            Excluir imagem
                        </label>
                    </div>
                </div>
                <div class="row">
                    <p>Caso deseje alterar sua senha atual, preencha os dois campos abaixo. Do contrário, mantenha-os vazio.</p>
                </div>
                <div class="row">
                    <label for="">
                        Senha
                        <input type="password" name="senha" id="">
                    </label>
                </div>
                <div class="row">
                    <label for="">
                        Confirmar Senha
                        <input type="password" name="confirmar_senha" id="">
                    </label>
                </div>
                <div class="row">
                    <button type="submit">Salvar</button>
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
<!-- <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'descricao' );
</script> -->

<?=$this->fetch('/commons/footer.php')?>