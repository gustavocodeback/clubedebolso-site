<?php defined('BASEPATH') OR exit('No direct script access allowed');

// Tabela de estados
$config['schema']['Estados'] = [
    'CodEstado' => [
        'type'           => 'int',
        'primary_key'    => TRUE,
        'constraint'     => '11',
        'auto_increment' => true
    ],
    'Nome' => [
        'type'       => 'varchar',
        'constraint' => '100'
    ],
    'Uf' => [
        'type'       => 'varchar',
        'constraint' => '2'
    ]
];

// Tabela de Cidades
$config['schema']['Cidades'] = [
    'CodCidade' => [
        'type'           => 'int',
        'primary_key'    => TRUE,
        'constraint'     => '11',
        'auto_increment' => true
    ],
    'CodEstado' => [
        'type'           => 'int',
        'constraint'     => '11',
    ],
    'Nome' => [
        'type'       => 'varchar',
        'constraint' => '100'
    ]
];

// Tabela de classificacoes
$config['schema']['Classificacoes'] = [
    'CodClassificacao' => [
        'type'           => 'int',
        'primary_key'    => TRUE,
        'constraint'     => '11',
        'auto_increment' => true
    ],
    'Nome' => [
        'type'       => 'varchar',
        'constraint' => '100'
    ],
    'Icone' => [
        'type'       => 'varchar',
        'constraint' => '100'
    ],
    'Ordem' => [
        'type'           => 'int',
        'constraint'     => '11',
    ]
];

// Tabela de Produtos
$config['schema']['Produtos'] = [
    'CodProduto' => [
        'type'           => 'int',
        'constraint'     => '11',
        'primary_key'    => TRUE,
        'auto_increment' => TRUE
    ],
    'Nome' => [
        'type'       => 'varchar',
        'constraint' => '100'
    ]
];

// Tabela de Produtos
$config['schema']['ProdutoParametros'] = [
    'CodProdutoParametro' => [
        'type'           => 'int',
        'constraint'     => '11',
        'primary_key'    => TRUE,
        'auto_increment' => TRUE
    ],
    'CodProduto' => [
        'type'       => 'int',
        'constraint' => '6'
    ],
    'Chave' => [
        'type'       => 'varchar',
        'constraint' => '100'
    ]
];

// Tabela Logs
$config['schema']['Logs'] = [
    'CodLog' => [
        'type'           => 'int',
        'constraint'     => '11',
        'primary_key'    => TRUE,
        'auto_increment' => true
    ],
    'uid' => [
        'type'       => 'varchar',
        'constraint' => '100'
    ],
    'Entidade' => [
        'type'       => 'varchar',
        'constraint' => '100'
    ],
    'Acao' => [
        'type'       => 'varchar',
        'constraint' => '100',
    ],
    'Data' => [
        'type' => 'date'
    ],
    'Mensagem' => [
        'type' => 'text'
    ]
];

// Tabela de clientes
$config['schema']['Clientes'] = [
    'CodCliente' => [
        'type'           => 'int',
        'constraint'     => '11',
        'primary_key'    => TRUE,
        'auto_increment' => TRUE
    ],
    'TipoCadastro' => [
        'type'       => 'char',
        'constraint' => 1
    ], 
    'Nome' => [
        'type'       => 'varchar',
        'constraint' => '60'
    ],
    'CPF' => [
        'type'       => 'varchar',
        'constraint' => '20'
    ],
    'RazaoSocial' => [
        'type' => 'varchar',
        'constraint' => '32'
    ],
    'CNPJ' => [
        'type'       => 'varchar',
        'constraint' => '20'
    ],
    'Tel1' => [
        'type'       => 'varchar',
        'constraint' => '30'
    ],
    'Tel2' => [
        'type'       => 'varchar',
        'constraint' => '30'
    ],
    'Celular' => [
        'type'       => 'varchar',
        'constraint' => '30'
    ],
    'CodEstado' => [
        'type'       => 'int',
        'constraint' => '11',
    ],
    'CodCidade' => [
        'type'       => 'int',
        'constraint' => '11',
    ],
    'Rua' => [
        'type'       => 'varchar',
        'constraint' => '255'
    ],
    'NumEndereco' => [
        'type'       => 'int',
        'constraint' => '6'
    ],
    'Cep' => [
        'type'       => 'varchar',
        'constraint' => '8'
    ],
    'Complemento' => [
        'type'       => 'varchar',
        'constraint' => '100'
    ],
    'Email' => [
        'type'       => 'varchar',
        'constraint' => '60'
    ],
    'Status' => [
        'type'       => 'varchar',
        'constraint' => '1',
    ]
];

// Tabela de assinaturas
$config['schema']['Assinaturas'] = [
    'CodAssinatura' => [
        'type'           => 'int',
        'constraint'     => '11',
        'primary_key'    => TRUE,
        'auto_increment' => TRUE
    ],
    'CodProduto' => [
        'type'       => 'int',
        'constraint' => '11'
    ],
    'CodCliente' => [
        'type'       => 'int',
        'constraint' => '11'
    ],
    'CodBanco' => [
        'type'       => 'int',
        'constraint' => 11
    ],
    'TaxaInicial' => [
        'type'       => 'float',
        'constraint' => '11'
    ],
    'TaxaMensal' => [
        'type'       => 'float',
        'constraint' => '11'
    ],
    'NumParcelasInicial' => [
        'type'       => 'int',
        'constraint' => '11'
    ],
    'ValorParcelasInicial' => [
        'type'       => 'float',
        'constraint' => '11'
    ],
    'DataContrato' => [
        'type'       => 'datetime'
    ]
];

// Tabela de opcoes
$config['schema']['Opcoes'] = [
    'CodOpcao' => [
        'type'           => 'int',
        'constraint'     => '11',
        'primary_key'    => TRUE,
        'auto_increment' => TRUE
    ],
    'CodAssinatura' => [
        'type'       => 'int',
        'constraint' => '11'
    ],
    'CodProdutoParametro' => [
        'type'       => 'int',
        'constraint' => '11'
    ],
    'Valor' => [
        'type'       => 'text'
    ]
];

// Tabela de Tabelas
$config['schema']['Tabelas'] = [
    'CodTabela' => [
        'type'           => 'int',
        'constraint'     => 11,
        'primary_key'    => TRUE,
        'auto_increment' => TRUE
    ],
    'Nome' => [
        'type'       => 'varchar',
        'constraint' => 255
    ]
];

// Tabela de colunas
$config['schema']['Colunas'] = [
    'CodColuna' => [
        'type'           => 'int',
        'constraint'     => 11,
        'primary_key'    => TRUE,
        'auto_increment' => TRUE
    ],
    'CodTabela' => [
        'type'       => 'int',
        'constraint' => 11
    ],
    'Nome' => [
        'type'       => 'varchar',
        'constraint' => 255
    ],
    'Tipo' => [
        'type'       => 'varchar',
        'constraint' => 255,
    ],
    'Tamanho' => [
        'type'       => 'varchar',
        'constraint' => 255
    ],
    'ChavePrimaria' => [
        'type'       => 'varchar',
        'constraint' => 1,
    ],
    'AutoIncremento' => [
        'type'       => 'varchar',
        'constraint' => 1
    ],
    'Nulo' => [
        'type'       => 'varchar',
        'constraint' => 1
    ]
];

// Tabela de TabelasEsquemas
$config['schema']['TabelasEsquemas'] = [
    'CodTabelaEsquema' => [
        'type'           => 'int',
        'constraint'     => 11,
        'primary_key'    => TRUE,
        'auto_increment' => TRUE
    ],
    'CodTabela' => [
        'type'       => 'int',
        'constraint' => 11,
    ],
    'CodEsquema' => [
        'type'       => 'int',
        'constraint' => 11
    ]
];

// Tabela de Esquemas
$config['schema']['Esquemas'] = [
    'CodEsquema' => [
        'type'           => 'int',
        'constraint'     => 11,
        'auto_increment' => TRUE,
        'primary_key'    => TRUE
    ],
    'Esquema' => [
        'type' => 'varchar',
        'constraint' => 255
    ]
];

// Tabela de bancos
$config['schema']['Bancos'] = [
    'CodBanco' => [
        'type'           => 'int',
        'constraint'     => 11,
        'auto_increment' => TRUE,
        'primary_key'    => TRUE
    ],
    'CodCliente' => [
        'type'       => 'int',
        'constraint' => 11
    ],
    'CodEsquema' => [
        'type'       => 'int',
        'constraint' => 11
    ],
    'Nome' => [
        'type'       => 'varchar',
        'constraint' => 255
    ]
];

/* end of file */
