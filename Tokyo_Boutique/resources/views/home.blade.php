<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokyo Boutique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #FFFDD0; /* Creme */
            color: #333; /* Texto escuro para contraste */
        }

        .navbar {
            background-color: #F5DEB3; /* Tom creme */
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
        }

        .navbar-nav {
            margin-left: auto; /* Ajusta o menu para a direita */
        }

        .hero-section {
            background-image: url('https://via.placeholder.com/1920x600');
            background-size: cover;
            background-position: center;
            height: 400px;
            color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center; /* Garante centralização do texto */
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .category-item {
            text-align: center;
            margin-bottom: 20px;
        }

        .category-item img {
            width: 100%;
            max-width: 300px;
            height: auto;
        }

        .category-item button {
            margin-top: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Tokyo Boutique</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fale Conosco</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('desejos') }}">Desejos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Conta') }}">Minha conta </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('produtos.create') }}">Adicionar Produto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Bem-vindo à Tokyo Boutique</h1>
    </section>

    <!-- Produtos -->
    <div class="container mt-5">
        <h2 class="text-center">Produtos em Destaque</h2>
        <div class="row">
            <div class="col-md-4 category-item">
                <img src="https://via.placeholder.com/300x200" alt="Produto 1">
                <h4>Produto 1</h4>
                <button class="btn btn-outline-danger">
                    <i class="far fa-heart"></i> Favoritar
                </button>
            </div>
            <div class="col-md-4 category-item">
                <img src="https://via.placeholder.com/300x200" alt="Produto 2">
                <h4>Produto 2</h4>
                <button class="btn btn-outline-danger">
                    <i class="far fa-heart"></i> Favoritar
                </button>
            </div>
            <div class="col-md-4 category-item">
                <img src="https://via.placeholder.com/300x200" alt="Produto 3">
                <h4>Produto 3</h4>
                <button class="btn btn-outline-danger">
                    <i class="far fa-heart"></i> Favoritar
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-4">
        <p>&copy; 2025 Tokyo Boutique. Todos os direitos reservados.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
