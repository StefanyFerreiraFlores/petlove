<!-- index.php -->
<?php include 'header.php'; ?>

<!-- Main --> 
<main>
    <!-- Container -->
    <div class="container">
        <!-- Main Text -->
        <div class="main-text">
            <h1>Amor em cada patinha!</h1>
            <h2>Cuidando com carinho e dedicação.</h2>
            <div>
                <button class="btn-gradient">Saiba mais</button>
                <img src="img/verificaçao.png" alt="verificaçao">
            </div>
        </div>
        <!-- Fim Main Text -->

        <!-- Main Image -->
        <div class="main-img">
            <img src="img/sa.png" alt="">
        </div>
        <!-- Fim Main Image -->
    </div>
    <!-- Fim Container -->
</main>

<!-- inicio resultados -->
<section class="resultados">
    <div class="container">
        <div class="resultados-text">
            Resultados positivos!
        </div>
        <div class="resultados-numeros">
            <p>
                <span>50 mil</span><br>
                clientes
            </p>
            <p>
                <span>20 mil</span><br>
                funcionários
            </p>
            <p>
                <span>60 mil</span><br>
                projetos
            </p>
        </div>
    </div>
</section>

<!-- section diferença -->
<section class="diferença">
    <div class="container">
        <div class="card">
            <img src="img/medal.png" alt="medalha">
            <h3 class="titulo">Empresa profissional</h3>
            <p>Medalha de ouro para o seu amor peludo!</p>
        </div>
        <div class="card">
            <img src="img/24h.png" alt="24horas">
            <h3 class="titulo">Consultoria 24 horas</h3>
            <p>Estamos aqui para você e seu pet a qualquer hora!</p>
        </div>
        <div class="card">
            <img src="img/caixa.png" alt="caixa">
            <h3 class="titulo">Servindo em vários países</h3>
            <p>Cuidamos do seu pet em qualquer lugar do mundo!</p>
        </div>
    </div>
</section>

<!-- section pet -->
<section class="pet">
    <div class="container">
        <div class="pet-img">
            <img src="img/designer.png" alt="cachorro">
        </div>
        <div class="pet-text">
            <h2>Pet Love</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
            <img src="img/user-happy.png" alt="">
            <p>
                <b>+ 50 clientes felizes</b>
            </p>
        </div>
    </div>
</section>

<!-- melhor lugar -->
<section class="melhor-lugar">
    <div class="container">
        <p class="roxo">Escolha o melhor serviço</p>
        <h2>Serviços de banho e tosa</h2>
        <div class="cards">
            <div class="cards-banho">
                <img src="img/layout.png" alt="banho">
                <p class="servico-banho">Serviço banho</p>
                <p class="pet-banho">Banho</p>
                <p class="contato">6262 0000 <br> petlove@gmail.com</p>
                <a href="servicos.php" class="btn-agendar">Agendar serviço</a>
            </div>
            <div class="cards-banho">
                <img src="img/to.png" alt="card banho">
                <p class="servico-banho">Serviço Tosa</p>
                <p class="pet-banho">Tosa</p>
                <p class="contato">6262 0000 <br> petlove@gmail.com</p>
                <a href="servicos.php" class="btn-agendar">Agendar serviço</a>
            </div>
            <div class="cards-banho">
                <img src="img/banhoo.png" alt="card banho">
                <p class="servico-banho">Tosa e banho</p>
                <p class="pet-banho">Banho + Tosa</p>
                <p class="contato">6262 0000 <br> petlove@gmail.com</p>
                <a href="servicos.php" class="btn-agendar">Agendar serviço</a>
            </div>
        </div>
    </div>
</section>

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
        event.preventDefault(); // Evita o envio padrão do formulário

        const email = document.getElementById('email').value;
        const messageElement = document.getElementById('message');

        // Aqui você pode fazer uma chamada para um servidor ou uma API para processar o e-mail
        if (email) {
            messageElement.textContent = 'Obrigado por se inscrever, ' + email + '!';
            messageElement.style.display = 'block';
            document.getElementById('email').value = ''; // Limpa o campo de e-mail
        } else {
            messageElement.textContent = 'Por favor, insira um e-mail válido.';
            messageElement.style.display = 'block';
        }
    });
</script>

<script>
    document.querySelectorAll('.btn-agendar').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault(); 
            alert('Serviço agendado!');
        });
    });
</script>

<?php 
include 'footer.php'; 

include_once __DIR__ . '/agenda/app/cliente/Cliente.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $email = $_POST['email'];

    // Aqui você pode adicionar a lógica para armazenar o e-mail no banco de dados ou enviar para um serviço de e-mail
    // Exemplo de mensagem de sucesso
    echo "<script>document.getElementById('message').textContent = 'Obrigado por se inscrever, $email!';</script>";
}
?>