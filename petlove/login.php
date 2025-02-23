<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            text-decoration: none;
        }
        body {
            background-image: url('img/pett.png');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }
        p {
            color: #b9bbbe;
            font-size: 16px;
        }
        .box-form {
            background-color: #2C163D;
            padding: 32px;
            width: 784px;
            height: 408px;
            font-size: 18px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 10px #D49EFE;
        }
        .form-content {
            width: 60%;
        }
        .form-content .titulo {
            font-size: 30px;
            color: white;
            font-weight: 700;
            text-align: center;
            margin-bottom: 5px;
        }
        .form-content .subtitulo {
            text-align: center;
        }
        .form-content form {
            margin-top: 15px;
        }
        .form-content .form-input {
            margin-top: 20px;
        }
        .form-content label {
            color: #B661FC;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
        }
        .form-content label span {
            color: #ed4245;
        }
        .form-content input {
            padding: 10px;
            height: 40px;
            font-size: 16px;
            font-weight: 400;
            width: 100%;
            border-radius: 3px;
            outline: none;
            border: none;
            color: #B661FC;
            background-color: #202225;
            margin-top: 8px;
        }
        .form-content .forget-senha-link {
            margin-top: 4px;
        }
        .form-content .forget-senha-link a {
            color: #B661FC;
            font-size: 14px;
            font-weight: 500;
        }
        .form-content button {
            height: 40px;
            width: 100%;
            padding: 2px 16px;
            border-radius: 3px;
            font-size: 16px;
            border: none;
            outline: none;
            background-color: #B661FC;
            cursor: pointer;
            margin-top: 20px;
        }
        .form-content .register-link {
            margin-top: 13px;
            font-size: 14px;
        }
        .form-content .register-link a {
            color: #B661FC;
        }
        .form-qrcode {
            width: 40%;
            text-align: center;
            color: white;
        }
        .form-qrcode img {
            max-width: 100%; /* Ajusta a largura da imagem para caber no container */
            height: auto; /* Mantém a proporção da imagem */
        }
        .form-qrcode h2{
            font-size:30px;
            margin-top:10px;
            margin-bottom:10px;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <div class="box-form">
        <div class="form-content">
            <h3 class="titulo">Boas-vindas de volta!</h3>
            <p class="subtitulo">Estamos muito animados em te ver novamente!</p>
            <form action="busca.php" method="POST">
                <div class="form-input">
                    <label for="email">E-mail ou número de telefone <span>*</span></label>
                    <input placeholder="email" type="email" required name="email">
                </div>
                <div class="form-input">
                    <label for="senha">Senha <span>*</span></label>
                    <input placeholder="senha" type="password" name="senha" required>
                </div>
                <div class="forget-senha-link">
                    <a href="#">Esqueceu sua senha?</a>
                </div>
                <button type="submit">Entrar</button>
                <p class="register-link">
                    Precisando de uma conta?
                    <a href="#">Registre-se</a>
                </p>
            </form>
        </div>
        <div class="form-qrcode">
            <img src="img/qr-code.png" alt="QR Code">
            <h2>Entrar com o código QR</h2>
            <p>
                Escaneie isto com o <strong>app móvel do Discord</strong> para fazer login imediatamente.
            </p>
        </div>
    </div>
</body>
</html>