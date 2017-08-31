<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        $this->view->module( 'login' )->setTitle( 'Entrar' )->render( 'login/login' );
    }

    /**
    * signup
    *
    * mostra o formulário de cadastro
    *
    */
    public function signup() {

        // carrega a pagina
        $this->view->module( 'login' )->setTitle( 'Nova conta' )->render( 'login/signup' );
    }

    /**
    * forgot_password
    *
    * mostra o formulário de esqueci minha senha
    *
    */
    public function forgot_password() {
        
        // carrega a pagina
        $this->view->module( 'login' )->setTitle( 'Esqueci minha senha' )->render( 'login/forgot-password' );
    }
}

/* end of file */
