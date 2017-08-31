<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $grupo = $view->item( 'grupo' ); ?>
<?php $view->component( 'aside' ); ?>
<div id="wrapper" class="wrapper show">
    <?php $view->component( 'navbar' ); ?>

    <?php echo form_open( 'grupos/salvar', [ 'class' => 'card container fade-in' ] )?>
        <?php $view->component( 'breadcrumb' ); ?>        
        <div class="page-header">
            <h2>Novo grupo</h2>
        </div>
        
        <?php print_key( $grupo ); ?>
        <?php input_text( 'Grupo', 'grupo', $grupo ); ?>

        <hr>
        <button class="btn btn-primary">Salvar</button>
        <a href="<?php echo site_url( 'grupos' ); ?>" class="btn btn-danger">Cancelar</a>
    <?php echo form_close(); ?>

    <?php $view->component( 'footer' ); ?>
</div>