<?php include('dados.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>GRGameStore | Home</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">GRGAME<span>STORE</span></a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="index.php">INÍCIO</a>
                    <a class="nav-link" href="cadastro.php">CADASTRO</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach($jogos as $jogo): ?>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="<?php echo $jogo['imagem']; ?>" class="card-img-top">
                        <div class="card-body d-flex flex-column">
                            <span class="category-badge"><?php echo $jogo['categoria']; ?></span>
                            <h5 class="card-title"><?php echo $jogo['titulo']; ?></h5>
                            
                            <div class="mt-auto">
                                <p class="price-tag"><?php echo $jogo['preco']; ?></p>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#buy">Comprar</button>
                                    <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#m<?php echo $jogo['id']; ?>">Sobre o jogo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="m<?php echo $jogo['id']; ?>" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content border-0 shadow-lg">
                            <div class="modal-header border-0">
                                <h5 class="modal-title fw-bold fs-3"><?php echo $jogo['titulo']; ?></h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-4 mb-md-0">
                                        <img src="<?php echo $jogo['imagem']; ?>" class="img-fluid rounded-4 shadow-lg w-100">
                                    </div>
                                    <div class="col-md-5 ps-lg-5">
                                        <span class="category-badge mb-2 d-inline-block"><?php echo $jogo['categoria']; ?></span>
                                        <p class="text-white-50 mb-4"><?php echo $jogo['plataformas']; ?></p>
                                        <p class="fs-5 text-white-50"><?php echo $jogo['descricao']; ?></p>
                                        <hr class="border-secondary my-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h2 class="price-tag m-0"><?php echo $jogo['preco']; ?></h2>
                                            <button class="btn btn-primary btn-lg px-4">ADICIONAR</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer class="footer mt-5">
        <div class="container py-5 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h4 class="footer-brand">GRGAME<span>STORE</span></h4>
                    <p class="text-white-50 mt-3">Sua loja premium de jogos digitais. Qualidade e velocidade em cada download.</p>
                    
                    <ul class="list-inline footer-links mt-4">
                        <li class="list-inline-item mx-3"><a href="index.php">Início</a></li>
                        <li class="list-inline-item mx-3"><a href="cadastro.php">Cadastro</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-5 border-secondary opacity-25">
            <p class="text-white-50 small mb-0">&copy; 2026 GRGameStore. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>