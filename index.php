<?php include('dados.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Game Store - Sua Loja de Jogos</title>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">GameStore</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Lançamentos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Promoções</a></li>
                    <li class="nav-item"><a class="nav-link text-warning" href="cadastro.php">Cadastre-se</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        
        <div id="carrosselJogos" class="carousel slide mb-5 shadow-sm rounded" data-bs-ride="carousel">
            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/1200x300/1a1a1a/ffffff?text=Grandes+Lancamentos+da+Semana" class="d-block w-100" alt="Lançamentos">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1200x300/8b0000/ffffff?text=Promocoes+de+ate+50%25" class="d-block w-100" alt="Promoções">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carrosselJogos" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrosselJogos" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>

        <h2 class="mb-4">Catálogo de Jogos</h2>
        <div class="row">
            
            <?php foreach($jogos as $jogo): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="<?php echo $jogo['imagem']; ?>" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?php echo $jogo['titulo']; ?></h5>
                            <p class="badge bg-primary align-self-start"><?php echo $jogo['categoria']; ?></p>
                            <p class="card-text flex-grow-1"><?php echo $jogo['descricao']; ?></p>
                            <h4 class="text-success"><?php echo $jogo['preco']; ?></h4>
                            <button class="btn btn-dark w-100 mt-auto" data-bs-toggle="modal" data-bs-target="#modalComprar">
                                Comprar
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

    <div class="modal fade" id="modalComprar" tabindex="-1" aria-labelledby="modalComprarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="modalComprarLabel">Sucesso!</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>O jogo foi adicionado ao seu carrinho. O que você deseja fazer agora?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continuar Comprando</button>
                    <button type="button" class="btn btn-success">Ir para o Pagamento</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>