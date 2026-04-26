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

    <div class="container mt-5">
        <h2 class="mb-4">Catálogo de Jogos</h2>
        <div class="row">
            
            <?php foreach($jogos as $jogo): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="<?php echo $jogo['imagem']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $jogo['titulo']; ?></h5>
                            <p class="badge bg-primary"><?php echo $jogo['categoria']; ?></p>
                            <p class="card-text"><?php echo $jogo['descricao']; ?></p>
                            <h4 class="text-success"><?php echo $jogo['preco']; ?></h4>
                            <button class="btn btn-dark w-100">Comprar</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>