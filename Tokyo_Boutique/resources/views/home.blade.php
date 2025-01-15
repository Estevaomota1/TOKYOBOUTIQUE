<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokyo Boutique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #FFFDD0;
            color: #333;
        }

        .navbar {
            background-color: #F5DEB3;
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
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        #contactBox {
            position: fixed;
            top: 80px;
            right: 20px;
            background-color: #F5DEB3;
            border: 1px solid #ccc;
            padding: 15px;
            width: 320px;
            display: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }

        #contactBox h4 {
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        .navbar-nav .nav-link {
            margin-right: 10px;
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
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/Tokyo_Boutique/public/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="toggleContact">Fale Conosco</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="desejos">Desejos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="conta">Minha Conta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Adicionar Produto</a>
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
            <div class="col-md-4">
                <img src="https://via.placeholder.com/300x200" alt="Produto 1" class="img-fluid">
                <h4>Produto 1</h4>
            </div>
            <div class="col-md-4">
                <img src="https://via.placeholder.com/300x200" alt="Produto 2" class="img-fluid">
                <h4>Produto 2</h4>
            </div>
            <div class="col-md-4">
                <img src="https://via.placeholder.com/300x200" alt="Produto 3" class="img-fluid">
                <h4>Produto 3</h4>
            </div>
        </div>
    </div>

    <!-- Fale Conosco Box -->
    <div id="contactBox">
        <h4>Fale Conosco</h4>
        <p>Entre em contato conosco, será um prazer atendê-lo!</p>
        <p><strong>Telefone:</strong> +55 (62) 98534-4586</p>
        <p><strong>E-mail:</strong> contato@tokyoboutique.com</p>
        <ul>
            <li><a href="#">WhatsApp</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
        </ul>
    </div>

    <!-- Footer -->
    <footer class="text-center">
        <p>&copy; 2025 Tokyo Boutique. Todos os direitos reservados.</p>
    </footer>

    <!-- Scripts -->
    <script>
        const toggleContact = document.getElementById('toggleContact');
        const contactBox = document.getElementById('contactBox');

        toggleContact.addEventListener('click', (e) => {
            e.preventDefault();
            contactBox.style.display = contactBox.style.display === 'none' || contactBox.style.display === ''
                ? 'block'
                : 'none';
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
