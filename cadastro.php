<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - GRGAMESTORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">GRGAME<span>STORE</span></a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="index.php">INÍCIO</a>
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalLancamentos">LANÇAMENTOS</a>
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalSolicitar">SOLICITAR JOGOS</a>
                    <a class="nav-link active" href="cadastro.php">CADASTRO</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container my-auto py-5">
        <div class="row justify-content-center">
            <div class="col-md-6"> <div class="card shadow-lg border-0 p-4">
                    <div class="card-body">
                        <h2 class="mb-4 text-white fw-bold">Criar Conta</h2>
                        
                        <form id="formCadastro" novalidate>
                            <div class="mb-3">
                                <label class="form-label">Nome de Herói</label>
                                <input type="text" class="form-control" id="nome" placeholder="Ex: Leon S. Kennedy" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Data de Nascimento</label>
                                <input type="date" class="form-control" id="nascimento" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Seu melhor E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="agente@resident.com" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Telefone / WhatsApp</label>
                                <input type="tel" class="form-control" id="telefone" placeholder="(11) 99999-9999" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Senha Secreta</label>
                                <input type="password" class="form-control" id="senha" placeholder="••••••••" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Confirmar Senha</label>
                                <input type="password" class="form-control" id="confirmaSenha" placeholder="••••••••" required>
                            </div>

                            <div class="d-grid gap-2 mt-4">
                                <button type="submit" class="btn btn-dark btn-lg">ENTRAR PARA O TIME</button>
                                <a href="index.php" class="btn btn-link text-white-50 mt-2 text-decoration-none small text-center">Voltar para a loja</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalLancamentos" tabindex="-1">...</div>
    <div class="modal fade" id="modalSolicitar" tabindex="-1">...</div>

    <div class="modal fade" id="modalSucesso" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-5">
                <div class="modal-body">
                    <div class="display-1 text-success mb-4">✓</div>
                    <h3 class="fw-bold text-white mb-2">Missão Cumprida!</h3>
                    <p class="text-white-50 mb-4">O teu cadastro na GRGameStore foi realizado.</p>
                    <div class="d-flex align-items-center justify-content-center gap-2 text-success fw-bold">
                        <div class="spinner-border spinner-border-sm" role="status"></div>
                        <span>RETORNANDO...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>