<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $estado = $view->item( 'estado' ); ?>
<?php $view->component( 'aside' ); ?>
<div id="wrapper" class="wrapper show">
    <?php $view->component( 'navbar' ); ?>

    <?php echo form_open( 'estados/salvar', [ 'class' => 'card container fade-in' ] )?>
        <?php $view->component( 'breadcrumb' ); ?>        
        <div class="page-header">
            <h2>Novo estado</h2>
        </div>

        <?php print_key( $estado ); ?>
        <?php input_text( 'Nome', 'nome', $estado ); ?>
        <?php input_text( 'UF', 'uf', $estado ); ?>

        <hr>
        <button class="btn btn-primary">Salvar</button>
        <a href="<?php echo site_url( 'estados' ); ?>" class="btn btn-danger">Cancelar</a>
    <?php echo form_close(); ?> 

    <?php $view->component( 'footer' ); ?>
</div>