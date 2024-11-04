<?php
// Definindo os preços das bebidas como variáveis
$precoAgua = 2.00;
$precoRefrigerante = 4.00;
$precoSuco = 3.50;


$escolha = 2;


switch ($escolha) {
    case 1:
        echo "Você escolheu: Água\n";
        echo "Preço: R$ " . number_format($precoAgua, 2, ',', '.') . "\n";
        break;
    case 2:
        echo "Você escolheu: Refrigerante\n";
        echo "Preço: R$ " . number_format($precoRefrigerante, 2, ',', '.') . "\n";
        break;
    case 3:
        echo "Você escolheu: Suco\n";
        echo "Preço: R$ " . number_format($precoSuco, 2, ',', '.') . "\n";
        break;
    default:
        echo "Opção inválida!\n";
        break;
}