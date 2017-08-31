<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $cidade = $view->item( 'cidade' ); ?>
<?php $view->component( 'aside' ); ?>
<div id="wrapper" class="wrapper show">
    <?php $view->component( 'navbar' ); ?>

    <?php echo form_open( 'cidades/salvar', [ 'class' => 'card container fade-in' ] )?>
        <?php $view->component( 'breadcrumb' ); ?>        
        <div class="page-header">
            <h2>Nova cidade</h2>
        </div>

        <?php print_key( $cidade ); ?>
        <?php select( 'Estado', 'estado' );?>
            <?php option(); ?>
            <?php foreach( $view->item( 'class' ) as $item ): ?>
            <?php option( $item->CodEstado, $item->nome, $cidade, 'estado' ); ?>
            <?php endforeach; ?>
        <?php endselect( 'Estado' ); ?><!-- select de estados -->
        <?php input_text( 'Nome', 'nome', $cidade ); ?>

        <hr>
        <button class="btn btn-primary">Salvar</button>
        <a href="<?php echo site_url( 'cidades' ); ?>" class="btn btn-danger">Cancelar</a>
    <?php echo form_close(); ?>

    <?php $view->component( 'footer' ); ?>
</div>