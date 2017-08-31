<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Minha_loja extends MY_Controller {

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
        $this->view->module( 'minha_loja' );
    }

   /**
    * index
    *
    * mostra o formulário de login
    *
    */
    public function index() {

        // carrega a pagina
        $this->view->module( 'login' )
                   ->set( 'aside-index', 1 )
                   ->setTitle( 'Entrar' )
                   ->render( 'minha_loja/minha_loja' );
    }

   /**
    * logout
    *
    * faz o logout
    *
    */
    public function logout() {

        // carrega o usuário
        $usuario = $this->guard->currentUser();

        // faz o logout
        $usuario->logout();

        // redireciona para o login
        redirect( site_url() );
    }
}

/* end of file */
