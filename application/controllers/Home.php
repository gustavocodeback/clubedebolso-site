<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

   /**
    * __construct
    *
    * metodo construtor
    *
    */
    public function __construct() {
        parent::__construct();
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
