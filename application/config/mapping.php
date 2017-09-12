<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| TABELAS DE AUTENTICAÇÃO
|--------------------------------------------------------------------------
|
| Mapeamento das tabelas diretamente ligadas com o serviço de autenticação
|
*/
$config['Usuario'] = [
    'UID'      => 'UID',
    'nome'     => 'Nome',
    'email'    => 'Email',
    'senha'    => 'Senha',
    'login'    => 'Login',
    'sessao'   => 'Sessao',
    'cadastro' => 'Cadastro',
    'creditos' => 'Creditos'
];

// tabela de grupo
$config['Grupo'] = [
    'grupo'  => 'grupo'
];

// tabela de rotina
$config['Rotina'] = [
    'link' => 'Link',
    'rotina' => 'Rotina',
    'classificacao' => 'CodClassificacao',
];

// tabela de classificacao
$config['Classificacao'] = [
    'nome'   => 'Nome',
    'icone'  => 'Icone',
    'ordem'  => 'Ordem'
];

// tabela de estado
$config['Estado'] = [
    'nome'   => 'Nome',
    'uf' => 'Uf',
];

// tabela de cidade
$config['Cidade'] = [
    'nome'   => 'Nome',
    'estado' => 'CodEstado',
];

// tabela do produto
$config['Produto'] = [
    'nome' => 'Nome',
];

// seta o parametro
$config['ProdutoParametro'] = [
    'produto' => 'CodProduto',
    'chave'   => 'Chave',
];

// Tabela de clientes
$config['Cliente'] = [
    'cadastro'    => 'TipoCadastro',
    'nome'        => 'Nome',
    'cpf'         => 'CPF',
    'razao'       => 'RazaoSocial',     
    'cnpj'        => 'CNPJ',
    'tel1'        => 'Tel1',
    'tel2'        => 'Tel2',
    'celular'     => 'Celular',
    'estado'      => 'CodEstado',
    'cidade'      => 'CodCidade',    
    'rua'         => 'Rua',
    'num'         => 'NumEndereco',
    'cep'         => 'Cep',    
    'complemento' => 'Complemento',
    'email'       => 'Email',     
    'status'      => 'Status'
];

// Tabela de assinaturas
$config['Assinatura'] = [
    'banco'                => 'CodBanco',
    'produto'              => 'CodProduto',
    'cliente'              => 'CodCliente',
    'contrato'             => 'DataContrato',
    'taxaInicial'          => 'TaxaInicial',
    'taxaMensal'           => 'TaxaMensal',
    'numParcelasInicial'   => 'NumParcelasInicial',
    'valorParcelasInicial' => 'ValorParcelasInicial',
];

// Tabela de esquemas
$config['Esquema'] = [
    'esquema' => 'Esquema'
];

// Tabela de tabelas
$config['Tabela'] = [
    'nome' => 'Nome'
];

// Tabela de colunas
$config['Coluna'] = [
    'tabela'     => 'CodTabela',
    'nome'       => 'Nome',
    'nulo'       => 'Nulo',
    'tipo'       => 'Tipo',
    'tamanho'    => 'Tamanho',
    'chave'      => 'ChavePrimaria',
    'incremento' => 'AutoIncremento'
];

// Tabela de bancos
$config['Banco'] = [
    'nome'    => 'Nome',
    'cliente' => 'CodCliente',
    'esquema' => 'CodEsquema',
];

/* end of file */