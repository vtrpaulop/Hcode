<?php
// Função para calcular a média das 7 notas avaliativas
function calcularMediaAvaliativas($notasAvaliativas) {
    $soma = array_sum($notasAvaliativas);
    $mediaAvaliativas = $soma / count($notasAvaliativas);
    return $mediaAvaliativas;
}

// Função para calcular a média ponderada
function calcularMediaFinal($mediaAvaliativas, $notaFinal, $pesoAvaliativas = 4, $pesoFinal = 6) {
    $mediaPonderada = (($mediaAvaliativas * $pesoAvaliativas) + ($notaFinal * $pesoFinal)) / ($pesoAvaliativas + $pesoFinal);
    return $mediaPonderada;
}

// Notas das 7 avaliações (exemplo)
$notasAvaliativas = [10, 10, 10, 10, 0, 0, 0];

// Nota da atividade final (exemplo)
$notaFinal = 4;

// Calcula a média das 7 avaliações
$mediaAvaliativas = calcularMediaAvaliativas($notasAvaliativas);

// Calcula a média final ponderada
$mediaFinal = calcularMediaFinal($mediaAvaliativas, $notaFinal);

// Exibe o resultado
echo "Média das 7 avaliações: " . round($mediaAvaliativas, 2) . "\n";
echo "Média final ponderada: " . round($mediaFinal, 2) . "\n";
?>
