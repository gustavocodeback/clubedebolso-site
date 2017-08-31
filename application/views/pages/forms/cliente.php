<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $cliente = $view->item( 'cliente' ); ?>
<?php $view->component( 'aside' ); ?>
<div id="wrapper" class="wrapper show">
    <?php $view->component( 'navbar' ); ?>

    <?php echo form_open( 'clientes/salvar', [ 'class' => 'card container fade-in' ] )?>
        <?php $view->component( 'breadcrumb' ); ?>        
        <div class="page-header">
            <h2>Novo cliente</h2>
        </div>

        <?php print_key( $cliente ); ?>
        <?php input_text( 'Nome', 'nome', $cliente ); ?>
        <?php select( 'Tipo de cadastro', 'cadastro', [ 'onchange' => 'atualizaSecao($(this))' ] );?>
            <?php option(); ?>
            <?php option( 'F', 'Pessoa Física', $cliente, 'cadastro' ); ?>
            <?php option( 'J', 'Pessoa Jurídica', $cliente, 'cadastro' ); ?>
        <?php endselect( 'Tipo de cadastro' ); ?><!-- seta o tipo de cadastro -->

        <div class="pessoa-fisica <?php echo $cliente && $cliente->cadastro == 'F' ? '': 'hidden'; ?>">
            <div class="page-header">
                <h5>Dados pessoais</h5>
            </div>
            <?php input_text( 'CPF', 'cpf', $cliente, [ 'class' => 'cpf'] ); ?>
        </div><!-- se for pessoa fisica -->

        <div class="pessoa-juridica <?php echo $cliente && $cliente->cadastro == 'J' ? '': 'hidden'; ?>">
            <div class="page-header">
                <h5>Dados empresariais</h5>
            </div>
            <?php input_text( 'Razāo', 'razao', $cliente ); ?>
            <?php input_text( 'CNPJ', 'cpnj', $cliente, [ 'class' => 'cnpj'] ); ?>
        </div><!-- se for uma pessoa juridica -->

        <div class="page-header">
            <h5>Dados de contato</h5>
        </div>

        <?php input_text( 'Telefone 1', 'tel1', $cliente, [ 'class' => 'telefone' ] ); ?>
        <?php input_text( 'Telefone 2', 'tel2', $cliente, [ 'class' => 'telefone' ] ); ?>
        <?php input_text( 'Celular', 'celular', $cliente, [ 'class' => 'telefone' ] ); ?>
                

        <div class="page-header">
            <h5>Dados de endereço</h5>
        </div>

        <div class="row">
            <?php select( 'Estado', 'estado', [ 'row' => false, 'length'=> 3, 'onchange' => 'atualizarSelect( "#cidade", "cidades/obter_cidades_estado", $( this ) )' ] );?>
                <?php option(); ?>
                <?php foreach( $view->item( 'estados' ) as $item ): ?>
                <?php option( $item->CodEstado, $item->nome, $cliente, 'estado' ); ?>
                <?php endforeach; ?>
            <?php endselect( 'Estado', false ); ?><!-- select de estados -->

            <?php if ( $view->item( 'cidades' ) ):?>
                <?php select( 'Cidade', 'cidade', [ 'row' => false, 'length'=> 3 ] );?>
            <?php else: ?>
                <?php select( 'Cidade', 'cidade', [ 'row' => false, 'length'=> 3, 'disabled' => 'disabled' ] );?>            
            <?php endif; ?>
                <?php option(); ?>
                <?php if ( $view->item( 'cidades' ) ):?>
                    <?php foreach( $view->item( 'cidades' ) as $item ): ?>
                        <?php option( $item->CodCidade, $item->nome, $cliente, 'cidade' ); ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endselect( 'Cidade', false ); ?><!-- select de estados -->
        </div>

        <div class="row">
            <?php input_text( 'Rua', 'rua', $cliente, [ 'row' => false, 'length' => 4 ] ); ?>
            <?php input_text( 'Número', 'num', $cliente, [ 'row' => false, 'length' => 2 ] ); ?>
        </div>

        <!-- input do cep -->
        <?php input_text( 'CEP', 'cep', $cliente, [ 'class' => 'cep' ] ); ?>

        <!-- input do complemento -->
        <?php input_text( 'Complemento', 'complemento', $cliente ); ?>

        <div class="page-header">
            <h5>Dados de acesso</h5>
        </div>

        <!-- input do complemento -->
        <?php input_text( 'E-mail de acesso', 'email', $cliente ); ?>

        <?php select( 'Status do cliente', 'status' );?>
            <?php option(); ?>
            <?php option( 'A', 'Ativo', $cliente, 'status' ); ?>
            <?php option( 'B', 'Bloqueado', $cliente, 'status' ); ?>
        <?php endselect('Status do cliente' ); ?><!-- seta o status do cadastro -->

        <button class="btn btn-primary">Salvar</button>
        <a href="<?php echo site_url( 'clientes' ); ?>" class="btn btn-danger">Cancelar</a>
    <?php echo form_close(); ?>

    <?php $view->component( 'footer' ); ?>
</div>