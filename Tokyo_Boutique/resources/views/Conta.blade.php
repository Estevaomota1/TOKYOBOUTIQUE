<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificação - Criar Conta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], input[type="password"], button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Identificação</h1>
        <p>Faça o seu login ou crie uma conta caso ainda não possua cadastro</p>

        <div class="section">
            <h2>Já sou cadastrado</h2>
            <form action="/login" method="POST">
                @csrf
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>

                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha" required>

                <button type="submit">Prosseguir</button>
                <p><a href="/senha-esquecida">Esqueceu a senha</a> ou <a href="#criar-conta">precisa criar uma conta?</a></p>
            </form>
        </div>

        <div class="section" id="criar-conta">
            <h2>Ainda não possuo cadastro</h2>
            <form action="/registrar" method="POST">
                @csrf
                <label for="novo-email">Digite o e-mail que deseja cadastrar:</label>
                <input type="email" id="novo-email" name="novo-email" placeholder="Digite seu e-mail" required>

                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>
