<?=$this->fetch('commons/header.php')?>
<?=$this->fetch('commons/migalha.php', $data)?>

<section class="fale-conosco">
    <div class="container">
        <div class="topo">
            <div class="form">
                <h2>Nos envie uma mensagem</h2>
                <form class="form-ajax" action="#" method="post">
                    <input type="text" name="nome" id="" placeholder="Nome" required>
                    <input type="email" name="email" id="" placeholder="E-Mail" required>
                    <input type="tel" name="telefone" id="" placeholder="Telefone" required>
                    <input type="text" name="assunto" id="" placeholder="Assunto" required>
                    <textarea name="mensagem" id="" cols="30" rows="10" placeholder="Mensagem" required></textarea>
                    <div class="btn-acao">
                        <div class="recaptcha"></div>
                        <div class="btn">
                            <button type="submit">ENVIAR COMENTÁRIO</button>
                        </div>
                    </div>
                    <div class="resposta"></div>
                </form>
            </div>
            <div class="contatos">
                <div class="titulo">Nossos Contatos</div>
                    <div class="informacoes">
                        <div class="endereco">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>							
                            <p>
                                <strong>Endereço</strong>
                                <a href="" target="_blank">Rua Américo Scaranello, Wilson Bernardi, Sertãozinho - SP</a>
                            </p>
                        </div>
                        <div class="email">
                            <div class="icon"><i class="far fa-envelope"></i></div>
                            <p>
                                <strong>E-Mail</strong>
                                <a href="mailto:realfeelipe@gmail.com">realfeelipe@gmail.com</a>
                            </p>
                        </div>
                        <div class="telefone">
                            <div class="icon"><i class="fas fa-mobile-alt"></i></div>
                            <p>
                                <strong>Telefone</strong>
                                <a href="" target="_blank">(51) 9.9447-0912</a>
                            </p>
                        </div>
                    </div>
                    <div class="redes-sociais">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
					</div>
                </div>
            </div>
        <div class="iframe-mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.5521317337225!2d-51.10964638548725!3d-30.10701058185961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95199c0fe866b387%3A0x6a725b723eef3514!2sR.%20Borba%20Gato%2C%20212%20-%20Lomba%20do%20Pinheiro%2C%20Porto%20Alegre%20-%20RS%2C%2091570-010!5e0!3m2!1sen!2sbr!4v1656174011614!5m2!1sen!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>    
    </div>
</section>

<?=$this->fetch('commons/footer.php')?>