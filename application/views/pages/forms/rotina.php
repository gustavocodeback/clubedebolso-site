<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $rotina = $view->item( 'rotina' ); ?>
<?php $view->component( 'aside' ); ?>
<div id="wrapper" class="wrapper show">
    <?php $view->component( 'navbar' ); ?>

    <?php echo form_open( 'rotinas/salvar', [ 'class' => 'card container fade-in' ] )?>
        <?php $view->component( 'breadcrumb' ); ?>        
        <div class="page-header">
            <h2>Nova rotina</h2>
        </div>
        
        <!-- rotina -->
        <?php print_key( $rotina ); ?>
        <?php input_text( 'Rotina', 'rotina', $rotina ); ?>
        <?php input_text( 'Link', 'link', $rotina ); ?>
        <?php select( 'Classificacao', 'classificacao' );?>
            <?php option(); ?>
            <?php foreach( $view->item( 'class' ) as $item ): ?>
            <?php option( $item->CodClassificacao, $item->nome, $rotina, 'classificacao' ); ?>
            <?php endforeach; ?>
        <?php endselect( 'Classificacao' ); ?><!-- select de estados -->

        <hr>
        <button class="btn btn-primary">Salvar</button>
        <a href="<?php echo site_url( 'rotinas' ); ?>" class="btn btn-danger">Cancelar</a>
    <?php echo form_close(); ?>

    <?php $view->component( 'footer' ); ?>
</div>