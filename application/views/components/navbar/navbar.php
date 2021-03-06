<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * printItem
 *
 * imprime o item da coluna esquerda
 *
 */
function printItemNavbar( $text, $link, $actual, $index ) {

    // seta a classe
    $cl = $index == $actual ? 'active' : '';

    // imprime o item
    echo "<a href='".site_url( $link )."' class='nav-link $cl'>$text</a>";    
}

// seta o indice selecionado
$index = $view->item( 'navbar-index' );

?>
<div id="navbar" class="z-depth-1">
 
<div class="line container">
    <div class="row">
      <div class="search-wrapper">
        <input type="text" placeholder="Pesquisar no site">
        <button>
          <span class="glyphicon glyphicon-search"></span>
        </button>
      </div><!-- barra de pesquisa -->

      <div class="right-content pull-right">
        
        <button class="btn" data-toggle="tooltip" data-placement="bottom" title="Meus créditos">
          <?php print_icon( 'coins', '18px' ); ?>
          <small style="color: #BDF590">R$ 
            <?php echo number_format( $user->creditos, 2, ',', '  ' ); ?>
          </small>
        </button><!-- botao de créditos -->

        <button class="btn" data-toggle="tooltip" data-placement="bottom" title="Notificações Clube de Bolso">
          <span class="glyphicon glyphicon-globe"></span>
        </button><!-- botao de notificacoes -->

        <div class="dropdown pull-right">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <img src="http://u.o0bc.com/avatars/no-user-image.gif" width="30px">
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li>
              <a href="<?php echo site_url( 'meus_dados' ); ?>">Meus dados</a>
            </li>
            <li role="separator" class="divider"></li>
            <li>
              <a href="<?php echo site_url( 'home/logout' ); ?>">
                Sair
              </a>
            </li>
          </ul>
        </div><!-- botao de ações do usuário -->

      </div>

      <div class="clearfix"></div>
    </div>
  </div><!-- linha superior -->

  <div class="line light horizontal-slide has-nav-link-content">
    <div class="nav-link-content">
      <?php echo printItemNavbar( 'Início',            'home',          1, $index ); ?>
      <!-- <?php echo printItemNavbar( 'Minha agenda', 'agenda',        2, $index ); ?>
      <?php echo printItemNavbar( 'Mensagens',         'mensagens',     3, $index ); ?>
      <?php echo printItemNavbar( 'Minhas promoções',  'promocoes',     4, $index ); ?>
      <?php echo printItemNavbar( 'Configurações',     'configuracoes', 5, $index ); ?> -->
    </div>
  </div><!-- linha inferior -->

</div>