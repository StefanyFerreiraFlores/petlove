<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <title>Tela de Login</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    background: url("data:image/jpeg;base64,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") no-repeat center center fixed; 
    background-size: cover;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.container {
    width: 420px;
    background: rgba(255, 255, 255, 0.1);
    border: 2px solid #9b9b9b;
    backdrop-filter: blur(20px);
    border-radius: 10px;
    padding: 30px 40px;
}

h1 {
    font-size: 36px;
    text-align: center;
    color: #fff;
}

.input-container {
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
}

.input-container input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 10px;
    font-size: 16px;
    color: #fff;
    padding: 20px 45px 20px 20px;
}

.input-container input::placeholder { 
    color: rgba(255, 255, 255, 0.7); 
}

.input-container img {
    position: absolute;
    top: 20%;
    right: 24px;
    margin-top: 5px;
}

.input-container a {
    font-size: 16px;
    margin-top: 5px;
    color: #fff;
    text-decoration: none;
}

.input-container a:hover {
    text-decoration: underline;
}

.submit-button {
    width: 100%;
    height: 50px;
    background-color: #7319B7;
    border: none;
    border-radius: 10px;
    color: #fff;
    font-weight: 700; 
    margin-top: 24px; 
    cursor: pointer;
    outline: none;
    font-size: 16px;
}

.submit-button:hover {
    background-color: #B661FC;
}

.register-link p {
    font-size: 16px;
    color: #fff;
    font-weight: 300;
}

.register-link {
    text-align: center;
    margin: 20px 0;
}

.register-link a {
    font-size: 16px;
    color: #fff;
    font-weight: 500;
}

.register-link a:hover {
    text-decoration: underline;
}
    </style>
</head>

<body>
        
    <div class="container">
        <h1>Entrar na Pet Love</h1>
        <form action="busca.php" method="POST">
            <div class="input-container">
                <input placeholder="email" type="email" required name ="email">
                <img width="30" height="30" src="https://img.icons8.com/material-outlined/24/user--v1.png" alt="user--v1">
            </div>
            <div class="input-container">
                <input placeholder="senha" type="senha"  name ="senha"required>
                <img width="30" height="30" src="https://img.icons8.com/ios/50/lock--v1.png" alt="lock--v1">
            </div>
            <a href="#">Esqueci minha senha</a>
            <button type="submit" class="submit-button">Entrar</button>
            <div class="register-link">
                <p>Não está cadastrado? <a href="#">Cadastrar</a></p>
            </div>
        </form>
    </div>
</body>

</html>