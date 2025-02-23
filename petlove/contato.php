<!-- index.php -->
<?php include 'header.php'; ?>

<!-- Main --> 
<main>
    <!-- Container -->
    <div class="container">
        <!-- Main Text -->
        <div class="main-text">
            <h1>Contato </h1>
            <h2>Pet Love.</h2>
            <div>
                <button class="btn-gradient">Saiba mais</button>
                <img src="img/verificaçao.png" alt="verificaçao">
            </div>
        </div>
        <!-- Fim Main Text -->

        <!-- Main Image -->
        <div class="main-img">
            <img src="img/ma.png" alt="">
        </div>
        <!-- Fim Main Image -->
    </div>
    <!-- Fim Container -->
</main>


<section class="subscreva-se">
    <div class="container">
        <div class="box-sub">
            <h2>Inscreva-se na Pet Love</h2>
            <p>Inscreva-se para receber dicas, notícias e informações.</p>
            <form id="subscription-form" method="POST" action="">
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                <button type="submit">Inscrever-se</button>
            </form>
            <p id="message" style="display:none;"></p>
        </div>
    </div>
</section>

<script>
    document.getElementById('subscription-form').addEventListener('submit', function(event) {
        event.preventDefault(); 
        const email = document.getElementById('email').value;
        const messageElement = document.getElementById('message');

        
        if (email) {
            messageElement.textContent = 'Obrigado por se inscrever, ' + email + '!';
            messageElement.style.display = 'block';
            document.getElementById('email').value = ''; 
        } else {
            messageElement.textContent = 'Por favor, insira um e-mail válido.';
            messageElement.style.display = 'block';
        }
    });
</script>


<?php 
include 'footer.php'; 

include_once __DIR__ . '/agenda/app/cliente/Cliente.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $email = $_POST['email'];

    //  banco de dados 
    //  mensagem de sucesso
    echo "<script>document.getElementById('message').textContent = 'Obrigado por se inscrever, $email!';</script>";
}
?>