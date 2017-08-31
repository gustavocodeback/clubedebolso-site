<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Guard
*
* classe de protecao de acessos
*
*/
class Guard {

    // instancia do ci
    public $ci;

   /**
    * __construct
    *
    * metodo construtor
    *
    */
    public function __construct() {

        // pega a instancia do codeigniter
        $this->ci =& get_instance();
    }

   /**
    * currentUser
    *
    * pega o usuário atualmente logado
    *
    */
    public function currentUser() {

        // carrega a model
        $this->ci->load->model( 'Usuarios/Usuario' );

        // pega o uid da sessao
        $uid = $this->ci->session->userdata( 'uid' );

        // pega pelo uid
        $usuario = $this->ci->Usuario->clean()->uid( $uid )->get( true );

        // verifica se existe um usuário
        if ( $usuario ) {

            // pega o token da sessao
            $token = $this->ci->session->userdata( 'token' );

            // verifica se os tokens são iguais
            if ( $token == $usuario->sessao ) return $usuario;

            // limpa a sessao
            $usuario->logout();
        }

        // retorna nulo por padrao
        return null;
    }
}

/* end of file */
