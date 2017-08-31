<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

   /**
    * __construct
    *
    * metodo construtor
    *
    */
    public function __construct() {
        parent::__construct();

        // carrega o módulo da capa
        $this->view->module( 'cover' );
    }

    /**
    * index
    *
    * mostra o formulário de login
    *
    */
    public function index() {

        // carrega a pagina
        $this->view->module( 'login' )->setTitle( 'Entrar' )->render( 'home/home' );
    }
}

/* end of file */
