<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $classificacao = $view->item( 'classificacao' ); ?>
<?php $view->component( 'aside' ); ?>
<div id="wrapper" class="wrapper show">
    <?php $view->component( 'navbar' ); ?>

    <?php echo form_open( 'classificacoes/salvar', [ 'class' => 'card container fade-in' ] )?>
        <?php $view->component( 'breadcrumb' ); ?>        
        <div class="page-header">
            <h2>Nova classificacao</h2>
        </div>
        
        <?php print_key( $classificacao ); ?>
        <?php input_text( 'Nome', 'nome', $classificacao ); ?>
        <?php input_text( 'Icone', 'icone', $classificacao ); ?>
        <?php input_text( 'Ordem', 'ordem', $classificacao, [ 'type' => 'number' ] ); ?>

        <hr>
        <button class="btn btn-primary">Salvar</button>
        <a href="<?php echo site_url( 'classificacoes' ); ?>" class="btn btn-danger">Cancelar</a>
    <?php echo form_close(); ?>

    <?php $view->component( 'footer' ); ?>
</div>