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
                <?php 
                $destaques = array_slice($jogos, 0, 3);
                foreach($destaques as $index => $jogo_destaque): 
                    $ativo = ($index == 0) ? 'active' : '';
                ?>
                <div class="carousel-item <?php echo $ativo; ?>" data-bs-interval="3000">
                    <img src="<?php echo $jogo_destaque['imagem']; ?>" class="d-block w-100" style="height: 500px; object-fit: cover; object-position: top;" alt="<?php echo $jogo_destaque['titulo']; ?>">
                    
                    <div class="carousel-caption d-none d-md-block p-4 rounded-4" style="background: rgba(0, 0, 0, 0.7); backdrop-filter: blur(4px); bottom: 1.25rem;">
                        <h2 class="fw-bold text-white"><?php echo $jogo_destaque['titulo']; ?></h2>
                        <p class="text-white-50 mb-0"><?php echo $jogo_destaque['descricao']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselDestaques" data-bs-slide="prev" style="width: auto; left: 30px;">
                <span class="carousel-control-prev-icon p-3 rounded-circle" style="background-color: rgba(0,0,0,0.6);" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselDestaques" data-bs-slide="next" style="width: auto; right: 30px;">
                <span class="carousel-control-next-icon p-3 rounded-circle" style="background-color: rgba(0,0,0,0.6);" aria-hidden="true"></span>
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
                                    <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalCompra" onclick="prepararCompra('<?php echo addslashes($jogo['titulo']); ?>', '<?php echo $jogo['preco']; ?>')">Comprar</button>
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
                                            <button class="btn btn-primary btn-lg px-4" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modalCompra" onclick="prepararCompra('<?php echo addslashes($jogo['titulo']); ?>', '<?php echo $jogo['preco']; ?>')">ADICIONAR</button>
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
            <p class="text-white-50 mt-3">A tua loja premium de jogos digitais.</p>
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
                    <form id="formSolicitar">
                        <div class="mb-3">
                            <label class="form-label">Nome do Jogo</label>
                            <input type="text" class="form-control" id="nomeJogo" placeholder="Ex: GTA VI" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Plataforma</label>
                            <select class="form-select text-white" id="plataformaJogo" style="background-color: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255,255,255,0.2);" required>
                                <option value="" selected disabled style="background-color: #1a1a1a; color: #888;">Selecione a plataforma</option>
                                <option value="PC" style="background-color: #1a1a1a; color: #fff;">PC (Windows)</option>
                                <option value="PS5" style="background-color: #1a1a1a; color: #fff;">PlayStation 5</option>
                                <option value="Xbox" style="background-color: #1a1a1a; color: #fff;">Xbox Series X/S</option>
                                <option value="Nintendo" style="background-color: #1a1a1a; color: #fff;">Nintendo Switch</option>
                                <option value="Mobile" style="background-color: #1a1a1a; color: #fff;">Mobile (Android/iOS)</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-primary w-100 py-3 fw-bold" onclick="enviarSolicitacao()">ENVIAR PEDIDO</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalCompra" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg text-center p-4">
                <div class="modal-body text-white">
                    <div class="display-1 text-success mb-3">✓</div>
                    <h4 class="fw-bold mb-2">Adicionado ao Carrinho!</h4>
                    <p class="text-white-50 mb-4">
                        <strong id="nomeJogoCompra" class="text-white">Jogo</strong> foi adicionado por <strong id="precoJogoCompra" class="text-success">R$ 0,00</strong>.
                    </p>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-primary py-3 fw-bold" onclick="alert('A redirecionar para a página de pagamento...')">FINALIZAR COMPRA</button>
                        <button type="button" class="btn btn-outline-secondary py-2" data-bs-dismiss="modal">CONTINUAR A COMPRAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>