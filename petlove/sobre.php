<?php include 'header.php'; ?>

<body>

    <!-- Main --> 
    <main>
        <!-- Container -->
        <div class="container">
            <!-- Main Text -->
            <div class="main-text">
                <h1>Sobre nós</h1>
                <h2>Conheça nossa história e missão.</h2>
                <div>
                    <button class="btn-gradient">Saiba mais</button>
                    <img src="img/verificacao.png" alt="verificação">
                </div>
            </div>
            <!-- Fim Main Text -->

            <!-- Main Image -->
            <div class="main-img">
                <img src="img/gato.png" alt="Gato">
            </div>
            <!-- Fim Main Image -->
        </div>
        <!-- Fim Container -->
    </main>
    
    <!-- Section Pet -->
    <section class="pet">
        <div class="container">
            <div class="pet-img">
                <img src="img/designer.png" alt="Cachorro">
            </div>
            <div class="pet-text">
                <h2>Pet Love</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, quando um impressor desconhecido pegou uma galeria de tipos e embaralhou para fazer um livro de amostras. Sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo essencialmente inalterado.</p>
                <img src="img/user-happy.png" alt="Usuário feliz">
                <p><b>+ 50 clientes felizes</b></p>
            </div>
        </div>
    </section>
    <!-- Fim Section Pet -->

    <!-- Início Section Avaliações -->
    <section class="depoimentos">
        <div class="container">
            <h3>Nossos depoimentos</h3>
            <p>Leia o que nossos clientes falam de nós para o mundo</p>
            <div class="cards">
                <!-- Início Cards 1 -->
                <div class="card-item">
                    <img src="img/estilo.jpeg" alt="Foto de Stefany">
                    <p class="usuario-user">Stefany</p>
                    <p class="depoiment-user">A experiência foi incrível! Recomendo a todos.</p>
                    <div class="estrelas">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                </div>
                <!-- End Cards 1 -->
                <!-- Início Cards 2 -->
                <div class="card-item">
                    <img src="img/estilo.jpeg" alt="Foto de João">
                    <p class="usuario-user">João</p>
                    <p class="depoiment-user">Serviço excelente, superou minhas expectativas!</p>
                    <div class="estrelas">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <!-- End Cards 2 -->
                <!-- Início Cards 3 -->
                <div class="card-item">
                    <img src="img/estilo.jpeg" alt="Foto de Maria">
                    <p class="usuario-user">Maria</p>
                    <p class="depoiment-user">Estou muito satisfeita com o atendimento!</p>
                    <div class="estrelas">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                </div>
                <!-- End Cards 3 -->
                <!-- Início Cards 4 -->
                <div class="card-item">
                    <img src="img/estilo.jpeg" alt="Foto de Lucas">
                    <p class="usuario-user">Lucas</p>
                    <p class="depoiment-user">Simplesmente fantástico! Voltarei com certeza.</p>
                    <div class="estrelas">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <!-- End Cards 4 -->
            </div>
        </div>
    </section>
    <!-- Fim Section Avaliações -->

    <section class="subscreva-se">
        <div class="container">
            <div class="box-sub">
                <h2>Inscreva-se na Pet Love</h2>
                <p>Inscreva-se para receber dicas, notícias e informações.</p>
                <form>
                    <input type="email" placeholder="Digite seu email" required>
                    <button type="submit">Inscrever</button>
                </form>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>
</html>