<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php

/**
 * printItem
 *
 * imprime o item da coluna esquerda
 *
 */
function printItem( $text, $link, $actual, $index ) {

    // seta a classe
    $cl = $index == $actual ? 'active' : '';

    // imprime o item
    echo "<a href='".site_url( $link )."' class='list-group-item $cl'>$text</a>";    
}

// seta o indice selecionado
$index = $view->item( 'aside-index' );

?>
<div class="aside row fade-in">
    <div class="col-md-12">
        <img src="http://u.o0bc.com/avatars/no-user-image.gif"  class="img thumbnail logo">
    </div>
    <div class="col-md-12" style="margin-top: -20px;">
        <h4><?php echo $user->nome; ?></h4>
        <h6><?php echo $user->email; ?></h6>
    </div>
    <div class="col-md-12">
        <ul class="list-group">
            <?php printItem( 'Minha loja', 'minha_loja', 1, $index ); ?>
            <?php printItem( 'Meu aplicativo', 'meu_aplicativo', 2, $index ); ?>
            <?php printItem( 'Meu site', 'meu_site', 2, $index ); ?>
            <?php printItem( 'Minha assinatura', 'meu_site', 3, $index ); ?>
        </ul>
    </div>
    <hr>    
</div>