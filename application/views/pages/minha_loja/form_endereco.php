<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="col-md-offset-2 col-md-8">
    <div class="page-header">
        <h4>Dados da loja</h4>
    </div>
    <?php input_text( false, 'nome', false, [ 'required' => 'required', 'placeholder' => 'Nome da loja', 'length' => 12 ] ); ?>
    <?php input_text( false, 'cnpj', false, [ 'required' => 'required', 'placeholder' => 'CNPJ', 'length' => 12 ] ); ?>
    <div class="page-header">
        <h4>Área de atuação</h4>
    </div>
    <?php input_text( false, 'nome', false, [ 'required' => 'required', 'placeholder' => 'Nome da loja', 'length' => 12 ] ); ?>
    <?php input_text( false, 'cnpj', false, [ 'required' => 'required', 'placeholder' => 'CNPJ', 'length' => 12 ] ); ?>
</div>
<div class="row">
    <div class="col-md-12">
        <img src="http://i0.kym-cdn.com/photos/images/original/001/194/732/19f.jpg" width="100%">
    </div>
</div>