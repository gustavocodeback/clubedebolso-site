<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Meus_dados extends MY_Controller {

    // somente para usuários logados
    public $loggedUsersOnly = true;
    
   /**
    * __construct
    *
    * metodo construtor
    *
    */
    public function __construct() {
        parent::__construct();

        // carrega o módulo da capa
        $this->view->module( 'meus_dados' )->set( 'navbar-index', 1 );
    }

   /**
    * index
    *
    * mostra o formulário de login
    *
    */
    public function index() {

        // carrega a pagina
        $this->view->set( 'aside-index', 5 )
                   ->setTitle( 'Meus dados' )
                   ->render( 'meus_dados/index' );
    }
}

/* end of file */
