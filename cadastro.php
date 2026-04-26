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

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">GRGAMESTORE</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link active" href="cadastro.php">Cadastre-se</a>
            </div>
        </div>
    </nav>

    <div class="container my-auto py-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg border-0">
                    <div class="text-center mb-4">
                        <h2>Crie sua conta</h2>
                        <span class="text-muted">Junte-se à maior comunidade gamer</span>
                    </div>

                    <form id="formCadastro">
                        <div class="mb-3">
                            <label class="form-label">Nome de Herói</label>
                            <input type="text" class="form-control" placeholder="Ex: Leon S. Kennedy" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Seu melhor E-mail</label>
                            <input type="email" class="form-control" placeholder="agente@resident.com" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Senha Secreta</label>
                            <input type="password" class="form-control" placeholder="••••••••" required>
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-dark btn-lg">ENTRAR PARA O TIME</button>
                            <a href="index.php" class="btn btn-link text-white-50 mt-2 text-decoration-none small">Voltar para a loja</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSucesso" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-5">
                <div class="modal-body">
                    <div class="display-1 text-success mb-4">✓</div>
                    <h3 class="fw-bold text-white mb-2">Missão Cumprida!</h3>
                    <p class="text-white-50 mb-4">Seu cadastro foi realizado com sucesso.</p>
                    
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <div class="spinner-border spinner-border-sm text-success" role="status"></div>
                        <span class="text-success fw-bold small text-uppercase">Retornando à tela inicial...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('formCadastro').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Ativa o modal
            var myModal = new bootstrap.Modal(document.getElementById('modalSucesso'));
            myModal.show();
            
            // Redireciona após 3 segundos
            setTimeout(function() {
                window.location.href = 'index.php';
            }, 3000);
        });
    </script>
</body>
</html>