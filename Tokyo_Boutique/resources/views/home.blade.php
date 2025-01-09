<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokyo Boutique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand {
            text-align: center;
            width: 100%;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .navbar {
            justify-content: center;
        }sss

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

        .hero-section {
            background-image: url('https://via.placeholder.com/1920x600');
            background-size: cover;
            background-position: center;
            height: 400px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Tokyo Boutique</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categorias') }}">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
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
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2025 Tokyo Boutique. Todos os direitos reservados.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
