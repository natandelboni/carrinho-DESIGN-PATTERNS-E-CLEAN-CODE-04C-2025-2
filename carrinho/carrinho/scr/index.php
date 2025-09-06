<?php


require_once 'Carrinho.php';

$meu_pedido = new Carrinho();

echo "<pre>";

echo "<b>--- Teste 1: Adicionando Itens ---</b>\n";
$meu_pedido->adicionarItem(1, 2); // Adicionei 2 camisetas
$meu_pedido->adicionarItem(2, 1); // Adicionei 1 calça
echo "\n";

echo "<b>--- Teste 2: Listando o Pedido ---</b>\n";
echo $meu_pedido->listarItens();
echo "\n";


echo "<b>--- Teste 3: Tentar Adicionar com Estoque Baixo ---</b>\n";
echo $meu_pedido->adicionarItem(3, 10); // Tênis só tem 3 no estoque
echo "\n";


echo "<b>--- Teste 4: Removendo um Item ---</b>\n";
echo $meu_pedido->removerItem(2); // Tirei a calça
echo "\n";
echo "<b>--- Pedido Depois de Remover ---</b>\n";
echo $meu_pedido->listarItens();
echo "\n";


echo "<b>--- Teste 5: Ver Preço com Desconto ---</b>\n";

$valor_final = $meu_pedido->calcularTotal('DESCONTO10');
echo "O valor final com o cupom de desconto é: R$ " . $valor_final;
echo "\n";


echo "</pre>";
