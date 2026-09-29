# Desafio 2 — Cadastro de Produtos com Validação

## Sobre o projeto

Este projeto foi desenvolvido em PHP com MySQL para realizar o cadastro de produtos.

O sistema possui um formulário onde o usuário informa o nome e o preço do produto. Antes de salvar os dados no banco de dados, o PHP verifica se as informações estão corretas.

## Objetivo

O objetivo da atividade é praticar:

* Conexão do PHP com o MySQL;
* Criação e utilização de uma tabela;
* Criação de formulários em HTML;
* Validação de dados utilizando PHP;
* Inserção de informações no banco de dados.

## Banco de Dados

Foi utilizado o banco de dados:

`exercicio`

Dentro dele foi criada a tabela:

`produtos`

A tabela possui as seguintes informações:

* `id` — identificador do produto;
* `nome` — nome do produto;
* `preco` — preço do produto.

## Validações

O sistema verifica os dados antes de realizar o cadastro.

O nome do produto não pode ficar vazio.

O preço precisa ser um número maior que zero.

Caso os dados estejam corretos, o sistema realiza o cadastro e apresenta a mensagem:

**Produto cadastrado com sucesso!**

Caso algum dado esteja incorreto, uma mensagem de erro é apresentada informando o problema.

## Tecnologias utilizadas

* PHP
* MySQL
* HTML
* Visual Studio Code

## Arquivo principal

O projeto possui como arquivo principal:

`10_desafio.php`

Esse arquivo contém o formulário, a conexão com o banco de dados, as validações e a inserção dos produtos.

## Entrega

De acordo com as instruções da atividade, o arquivo enviado é somente:

`10_desafio.php`
