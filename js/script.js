// Validação do Cadastro
var formCadastro = document.getElementById('formCadastro');
if (formCadastro) {
    formCadastro.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const nome = document.getElementById('nome').value;
        const email = document.getElementById('email').value;
        const senha = document.getElementById('senha').value;
        const confirmaSenha = document.getElementById('confirmaSenha').value;

        // Validação básica de lógica
        if (senha !== confirmaSenha) {
            alert("As palavras-passe não coincidem, soldado!");
            return;
        }

        if (senha.length < 6) {
            alert("A palavra-passe precisa de pelo menos 6 caracteres.");
            return;
        }

        // Se passar na validação, mostra o modal de sucesso do Bootstrap
        var myModal = new bootstrap.Modal(document.getElementById('modalSucesso'));
        myModal.show();
        
        setTimeout(function() {
            window.location.href = 'index.php';
        }, 3000);
    });
}

// Função para o Modal de Solicitar Jogos
function enviarSolicitacao() {
    const jogo = document.getElementById('nomeJogo').value;
    const plataforma = document.getElementById('plataformaJogo').value;

    if (jogo && plataforma) {
        alert(`Pedido enviado com sucesso!\nJogo: ${jogo}\nPlataforma: ${plataforma}`);
        
        // Fecha o modal automaticamente
        const modalElem = document.getElementById('modalSolicitar');
        const modal = bootstrap.Modal.getInstance(modalElem);
        modal.hide();
        
        // Opcional: limpa o formulário
        document.getElementById('formSolicitar').reset();
    } else {
        alert("Por favor, preenche o nome do jogo e escolhe a plataforma.");
    }
}

// NOVO: Função para o Modal de Compra / Carrinho
function prepararCompra(nome, preco) {
    document.getElementById('nomeJogoCompra').innerText = nome;
    document.getElementById('precoJogoCompra').innerText = preco;
}