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
}

/* end of file */
