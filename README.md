# Simulador de Carrinho de Compras

## Informações Aluno

- Nome: Natan Nunes Del Boni - RA: 1999528

## Simulador de Carrinho de Compras em PHP
Este projeto é um simulador de carrinho de compras desenvolvido em PHP puro, com o objetivo de demonstrar a aplicação de princípios de Design Patterns & Clean Code. Ele representa um fluxo básico de e-commerce, gerenciando produtos e um carrinho de compras sem a necessidade de banco de dados ou frameworks. Todos os dados são manipulados em arrays na memória.

## Como Usar
Pré-requisitos
Certifique-se de ter o XAMPP instalado e com o serviço Apache em execução.

## Execução
Clone o repositório ou mova os arquivos para a pasta htdocs/carrinho do seu XAMPP.

Para ver a saída no navegador, acesse http://localhost/carrinho/src/index.php.

Para executar a partir da linha de comando, navegue até a pasta src/ e execute o comando php index.php.

O arquivo index.php atua como um "laboratório" de testes, executando automaticamente todos os cenários de uso para demonstrar as funcionalidades.

Funcionalidades e Regras de Negócio
O simulador implementa as seguintes ações e regras:

Adicionar produtos: Ao adicionar um item, o sistema valida a existência do produto e a disponibilidade de estoque. A quantidade é deduzida do estoque em tempo real.

Remover produtos: Remove um item do carrinho e, em seguida, devolve a quantidade correspondente ao estoque original.

Cálculo de valores: O subtotal de cada item é calculado automaticamente (pre 
c
\c
​
 o×quantidade), e um cupom de desconto ("DESCONTO10") pode ser aplicado ao valor total do pedido.

## Listagem: 
Exibe os itens no carrinho, mostrando a quantidade, subtotal e o valor total final, incluindo o desconto, se aplicável.

## Validações: 
Lida com erros como produto inexistente, estoque insuficiente ou item não encontrado no carrinho.

## Limitações
Por ser um projeto focado em boas práticas, ele não inclui funcionalidades de persistência (os dados são resetados a cada execução), nem recursos como interface gráfica ou autenticação.

## Cenários de Teste
O index.php executa uma série de testes que ilustram o comportamento do sistema:

## Adição bem-sucedida: 
Um item válido (ex: ID 1, 2 unidades) é adicionado, e o estoque é devidamente atualizado (ex: de 10 para 8).

##  Estoque insuficiente:  
Uma tentativa de adicionar mais unidades do que o disponível (ex: ID 3, 10 unidades) resulta em uma mensagem de erro, sem alterar o carrinho.

## Remoção de item: A remoção de um produto (ex: ID 2) é processada, e o estoque original é restaurado.

## Aplicação de desconto: 
Após adicionar itens, o uso do cupom "DESCONTO10" reduz o total final em 10%, exibindo o novo valor.

## Estrutura do Código
A organização do projeto segue princípios de Clean Code:

Princípio DRY (Don't Repeat Yourself): A lógica do carrinho está centralizada na classe src/Carrinho.php, com funções reutilizáveis para evitar repetições.

Princípio KISS (Keep It Simple, Stupid): A lógica é mantida simples e direta, sem complexidade desnecessária.

## Padrão PSR-12:
 O código segue o guia de estilo PSR-12 para manter a consistência e legibilidade.

A demonstração automatizada no arquivo index.php é uma solução criativa para mostrar o funcionamento de todos os casos de uso de forma clara e sequencial.
