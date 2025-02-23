<!-- index.php -->
<?php include 'header.php'; ?>
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 0;
    }

    h1 {
        margin: 0;
        color:#7319B7;
        
    }

    .faq {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
    }

    .faq-item {
        border-bottom: 1px solid #ccc;
        padding: 10px 0;
        transition: background-color 0.3s;
    }

    .faq-item:hover {
        background-color: #f9f9f9;
    }

    .faq-item h2 {
        margin: 0;
        cursor: pointer; 
        color: #2C163D;
    }
    .faq-item p{
        color:#7319B7;
    }

    @media (max-width: 600px) {
        .faq {
            padding: 10px;
        }
    }
</style>
<main>
    <section class="faq" role="region" aria-labelledby="faq-title">
        <h1 id="faq-title">Perguntas Frequentes</h1>
        <div class="faq-item">
            <h2>1. Como funciona a ajuda e comunicação?</h2>
            <p>A nossa plataforma oferece suporte através de diversos canais, incluindo e-mail, chat ao vivo e telefone. Estamos sempre prontos para ajudar!</p>
        </div>
        <div class="faq-item">
            <h2>2. Quais são os horários de atendimento?</h2>
            <p>Nosso atendimento está disponível de segunda a sexta-feira, das 9h às 18h. Durante os finais de semana, você pode enviar suas dúvidas por e-mail e responderemos na segunda-feira.</p>
        </div>
        <div class="faq-item">
            <h2>3. Como posso entrar em contato com a equipe de suporte?</h2>
            <p>Você pode entrar em contato conosco através do e-mail suporte@petlove.com.br ou pelo telefone (XX) XXXX-XXXX.</p>
        </div>
        <div class="faq-item">
            <h2>4. O que devo fazer se não receber uma resposta?</h2>
            <p>Se você não receber uma resposta em até 48 horas, por favor, entre em contato novamente ou utilize nosso chat ao vivo para uma resposta mais rápida.</p>
        </div>
        <div class="faq-item">
            <h2>5. Posso agendar um horário para atendimento?</h2>
            <p>Sim, você pode agendar um horário para atendimento através do nosso site ou entrando em contato com nossa equipe de suporte.</p>
        </div>
        <?php include 'footer.php'; ?>
    </section>
</main>