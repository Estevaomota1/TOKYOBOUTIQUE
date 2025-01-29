<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
            font-weight: bold;
        }
        input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007BFF;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .link {
            text-align: center;
            margin-top: 10px;
        }
        .link a {
            color: #007BFF;
            text-decoration: none;
        }
        .link a:hover {
            text-decoration: underline;
        }
        .obrigatorio {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Identificação</h2>
        <p><strong>Já possuo uma conta</strong></p>
        <p><span class="obrigatorio">Campos Obrigatórios*</span></p>

        <form action="/identificacao" method="POST">
            @csrf <!-- Token de segurança obrigatório no Laravel -->
            <label for="login">Login *</label>
            <input type="text" id="login" name="login" placeholder="Digite seu login" required>

            <label for="senha">Senha *</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>

            <div class="link">
                <a href="/esqueceu-senha">Esqueceu sua senha?</a>
            </div>
            <div class="link">
                <p>Ou use o link de uso único para login:</p>
                <a href="/enviar-link">Envie-me por e-mail o link</a>
            </div>

            <button type="submit">Entrar</button>
        </form>

        <div class="link">
            <p>Ainda não possui uma conta? <a href="/cadastro">Cadastre-se aqui</a></p>
        </div>
    </div>
</body>
</html>
