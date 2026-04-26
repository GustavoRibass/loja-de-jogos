document.getElementById('formCadastro').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const senha = document.getElementById('senha').value;
    const confirmaSenha = document.getElementById('confirmaSenha').value;

    // Validação básica de lógica (Exigência da tabela)
    if (senha !== confirmaSenha) {
        alert("As senhas não coincidem, soldado!");
        return;
    }

    if (senha.length < 6) {
        alert("A senha precisa de pelo menos 6 caracteres.");
        return;
    }

    // Se passar na validação, mostra o modal de sucesso do Bootstrap
    var myModal = new bootstrap.Modal(document.getElementById('modalSucesso'));
    myModal.show();
    
    setTimeout(function() {
        window.location.href = 'index.php';
    }, 3000);
});