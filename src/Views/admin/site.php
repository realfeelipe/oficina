<?=$this->fetch('/commons/header.php', $data)?>

<section class="dashboard">
    <div class="container">
        <div class="titulo-pagina">
            <i class="fas fa-cogs"></i>Site
        </div>
        <div class="form">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="row">
                    <label for="">
                        Título
                        <input type="text" name="titulo" id="">
                    </label>
                </div>
                <div class="row">
                    <label for="">
                        Logo do site
                        <input type="file" name="logo_site" id="imagem">
                    </label>
                    <div class="img">
                        <img src="<?=URL_BASE?>resources/imagens/valores.png" alt="">
                        <label for="">
                            <input type="checkbox" name="excluir_logo_site" id="">
                            Excluir imagem
                        </label>
                    </div>
                </div>
                <div class="row">
                    <label for="">
                        Facebook
                        <input type="text" name="facebook" id="">
                    </label>
                </div>
                <div class="row">
                    <label for="">
                        Instagram
                        <input type="text" name="instagram" id="">
                    </label>
                </div>
                <div class="row">
                    <label for="">
                        YouTube
                        <input type="text" name="youtube" id="">
                    </label>
                </div>
                <div class="row">
                    <label for="">
                        Telefone
                        <input type="tel" name="telefone" id="">
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
                        Endereço
                        <input type="text" name="endereco" id="">
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
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'descricao' );
</script>

<?=$this->fetch('/commons/footer.php')?>