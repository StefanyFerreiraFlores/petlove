<!-- index.php -->
<?php include 'header.php'; ?>
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