<?php

class MeuCarrinho
{
    public $produtos;
    public $carrinho;

    function __construct()
    {
        $this->produtos = [
            ['id' => 1, 'nome' => 'Camiseta', 'preco' => 59.90, 'estoque' => 10],
            ['id' => 2, 'nome' => 'Calça Jeans', 'preco' => 129.90, 'estoque' => 5],
            ['id' => 3, 'nome' => 'Tênis', 'preco' => 199.90, 'estoque' => 3],
        ];

        $this->carrinho = [];
    }

    function adicionar_produto($id_do_produto, $quantidade)
    {
        $produto_encontrado = null;
        foreach ($this->produtos as $p) {
            // Comparação com == em vez de ===
            if ($p['id'] == $id_do_produto) {
                $produto_encontrado = $p;
                break;
            }
        }

        if ($produto_encontrado == null) {
            echo "Produto nao existe!\n";
            return;
        }

        if ($produto_encontrado['estoque'] < $quantidade) {
            echo "Nao temos estoque o suficiente para {$produto_encontrado['nome']}.\n";
            return;
        }

        $item_ja_existe = false;
        foreach ($this->carrinho as $chave => $item) {
            if ($item['id'] == $id_do_produto) {
                // Se já existe, só aumenta a quantidade
                $this->carrinho[$chave]['quantidade'] += $quantidade;
                $item_ja_existe = true;
                break;
            }
        }

        if ($item_ja_existe == false) {
            $novo_item = [
                'id' => $id_do_produto,
                'nome' => $produto_encontrado['nome'],
                'preco' => $produto_encontrado['preco'],
                'quantidade' => $quantidade
            ];
            // Adiciona o array no final do carrinho
            array_push($this->carrinho, $novo_item);
        }

        echo "{$produto_encontrado['nome']} adicionado ao carrinho.\n";
    }

    function mostrar_carrinho()
    {
        echo "--- Meu Carrinho ---\n";

        if (empty($this->carrinho)) {
            echo "Carrinho vazio.\n";
            return;
        }

        $total = 0;
        foreach ($this->carrinho as $item) {
            $subtotal = $item['preco'] * $item['quantidade'];
            echo "Item: {$item['nome']} | Qtd: {$item['quantidade']} | Subtotal: {$subtotal}\n";
            $total = $total + $subtotal;
        }

        echo "--------------------\n";
        echo "Total: " . $total . "\n";
    }
}



$carrinho = new MeuCarrinho();

echo "Comecando as compras...\n\n";

$carrinho->adicionar_produto(1, 2); // 2 Camisetas
$carrinho->adicionar_produto(2, 1); // 1 Calça

echo "\n";
$carrinho->mostrar_carrinho();
echo "\n";

echo "Tentando adicionar um produto que nao existe...\n";
$carrinho->adicionar_produto(5, 1);
echo "\n";

echo "Adicionando mais camisetas...\n";
$carrinho->adicionar_produto(1, 1);
echo "\n";

$carrinho->mostrar_carrinho();