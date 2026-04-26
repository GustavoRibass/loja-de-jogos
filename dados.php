<?php
$minha_chave = "26596439850145898faa20a5fb801e03"; 

$nomes_dos_jogos = ["Black Myth: Wukong", "Resident Evil 9", "Silent Hill 2", "Crimson Desert", "Resident Evil 2 Remake", "Resident Evil 4 Remake"];

// 1. TABELA DE PREÇOS FIXOS (Agora não muda mais!)
$precos_custom = [
    "Wukong" => "R$ 229,90",
    "Resident Evil 9" => "R$ 299,90",
    "Silent Hill 2" => "R$ 349,90",
    "Crimson Desert" => "R$ 269,90",
    "Resident Evil 2" => "R$ 139,90",
    "Resident Evil 4" => "R$ 199,90"
];

$descricoes_custom = [
    "Wukong" => "RPG de ação baseado na mitologia chinesa. Controle o Predestinado em combates brutais.",
    "Resident Evil 9" => "O aguardado próximo capítulo da Capcom. Terror de sobrevivência em escala inédita.",
    "Silent Hill 2" => "Um mergulho no terror psicológico. James retorna à cidade envolta em névoa.",
    "Crimson Desert" => "Aventura épica de mundo aberto com mercenários e combates viscerais.",
    "Resident Evil 2" => "O clássico remake que definiu o gênero. Sobreviva ao caos em Raccoon City.",
    "Resident Evil 4" => "Leon Kennedy em sua missão mais perigosa na Europa. Ação e suspense constantes."
];

$jogos = [];

foreach ($nomes_dos_jogos as $nome) {
    $url = "https://api.rawg.io/api/games?key={$minha_chave}&search=".rawurlencode($nome)."&page_size=1";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $resposta = curl_exec($ch);
    curl_close($ch);
    $dados = json_decode($resposta, true);

    if (isset($dados['results'][0])) {
        $j = $dados['results'][0];
        
        $nicks = [];
        if(isset($j['platforms'])){
            foreach($j['platforms'] as $p) { $nicks[] = $p['platform']['name']; }
        }
        
        // 2. LÓGICA PARA BUSCAR O PREÇO FIXO
        $preco_final = "R$ 250,00"; // Valor padrão caso não encontre na lista
        foreach ($precos_custom as $chave => $valor) {
            if (stripos($j['name'], $chave) !== false) {
                $preco_final = $valor;
                break;
            }
        }

        $txt = "Destaque exclusivo GameStore.";
        foreach ($descricoes_custom as $chave => $valor) {
            if (stripos($j['name'], $chave) !== false) { $txt = $valor; break; }
        }

        $jogos[] = [
            "id" => $j['id'],
            "titulo" => $j['name'],
            "preco" => $preco_final, // <-- Agora o preço é o da nossa tabela!
            "categoria" => $j['genres'][0]['name'] ?? 'Ação',
            "imagem" => $j['background_image'],
            "descricao" => $txt,
            "lancamento" => date("d/m/Y", strtotime($j['released'])),
            "nota" => $j['metacritic'] ?? "N/A",
            "plataformas" => implode(", ", $nicks)
        ];
    }
}
?>