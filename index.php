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
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalLancamentos">LANÇAMENTOS</a>
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalSolicitar">SOLICITAR JOGOS</a>
                    <a class="nav-link" href="cadastro.php">CADASTRO</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="hero-banner">
        <div class="container text-center">
            <div class="hero-content p-5 rounded-5 shadow-lg">
                <h1 class="display-3 fw-bold text-white mb-3">O TEU PRÓXIMO <span class="text-violet">NÍVEL</span></h1>
                <p class="lead text-white-50 mb-4">A maior biblioteca digital de jogos com entrega imediata e o melhor preço do mercado.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="#vitrine" class="btn btn-primary btn-lg px-5 py-3 fw-bold shadow-lg">VER CATÁLOGO</a>
                </div>
            </div>
        </div>
    </header>

    <div class="container mt-5">
        <h3 class="text-white fw-bold mb-4">Destaques da Semana</h3>
        <div id="carouselDestaques" class="carousel slide carousel-fade shadow-lg" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselDestaques" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carouselDestaques" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselDestaques" data-bs-slide-to="2"></button>
            </div>
            
            <div class="carousel-inner rounded-5 border-glass">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=2070" class="d-block w-100" alt="Games">
                    <div class="carousel-caption d-none d-md-block p-4 rounded-4">
                        <h2 class="fw-bold">Black Myth: Wukong</h2>
                        <p>Explora a mitologia chinesa neste RPG de ação épico.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=2070" class="d-block w-100" alt="Gamer Setup">
                    <div class="carousel-caption d-none d-md-block p-4 rounded-4">
                        <h2 class="fw-bold">Resident Evil Saga</h2>
                        <p>Sobrevive ao terror com descontos exclusivos de até 70%.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=2070" class="d-block w-100" alt="Tech">
                    <div class="carousel-caption d-none d-md-block p-4 rounded-4">
                        <h2 class="fw-bold">Silent Hill 2 Remake</h2>
                        <p>Um mergulho profundo no terror psicológico clássico.</p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselDestaques" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselDestaques" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

    <div class="container mt-5 py-5" id="vitrine">
        <h3 class="text-white fw-bold mb-4">Catálogo Completo</h3>
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
                                <h5 class="modal-title fw-bold fs-3 text-white"><?php echo $jogo['titulo']; ?></h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body p-4 text-white">
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
            <h4 class="footer-brand">GRGAME<span>STORE</span></h4>
            <p class="text-white-50 mt-3">Sua loja premium de jogos digitais.</p>
            <ul class="list-inline footer-links mt-4">
                <li class="list-inline-item mx-3"><a href="index.php">Início</a></li>
                <li class="list-inline-item mx-3"><a href="#" data-bs-toggle="modal" data-bs-target="#modalLancamentos">Lançamentos</a></li>
                <li class="list-inline-item mx-3"><a href="#" data-bs-toggle="modal" data-bs-target="#modalSolicitar">Solicitar Jogos</a></li>
                <li class="list-inline-item mx-3"><a href="cadastro.php">Cadastro</a></li>
            </ul>
            <hr class="my-5 border-secondary opacity-25">
            <p class="text-white-50 small mb-0">&copy; 2026 GRGameStore. Todos os direitos reservados.</p>
        </div>
    </footer>

    <div class="modal fade" id="modalLancamentos" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg text-center p-5">
                <div class="modal-body">
                    <div class="spinner-grow text-primary mb-3" role="status"></div>
                    <h4 class="text-white fw-bold">Brevemente</h4>
                    <p class="text-white-50">Estamos a preparar a lista dos jogos mais aguardados.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSolicitar" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg p-4">
                <div class="modal-header border-0 text-white">
                    <h5 class="modal-title fw-bold">Solicitar Jogo</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-white">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nome do Jogo</label>
                            <input type="text" class="form-control" placeholder="Ex: GTA VI">
                        </div>
                        <button type="button" class="btn btn-primary w-100 py-3 fw-bold" onclick="alert('Pedido enviado!')">ENVIAR PEDIDO</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>