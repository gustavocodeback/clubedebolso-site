<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="text-center col-md-6 col-md-offset-3 logo-content">
            <img    src="<?php echo site_url( 'images/logo_4.png' ); ?>" 
                    alt="Logo Clube de Bolso">
        </div><!-- logo -->
    </div>
    <div class="row">
        <?php echo form_open( 'login/logar', [ 'id'=> 'login-form', 'class' => 'col-md-6 col-md-offset-3 z-depth-2 fade-in' ] )?>
            
            <div class="page-header text-center">
                <h1 style="color: #726E84">Crie uma conta</h1>
                <h4 style="color: #999">E tenha acesso aos serviços do Clube de Bolso</h4>
            </div>

            <?php input_text( false, 'nome', false, [ 'placeholder' => 'Nome', 'length' => 12, 'type' => 'email' ] ); ?>
            <?php input_text( false, 'email', false, [ 'placeholder' => 'E-mail', 'length' => 12, 'type' => 'email' ] ); ?>
            <?php input_text( false, 'senha', false, [ 'placeholder' => 'Senha', 'length' => 12, 'type' => 'password' ] ); ?>
            <?php input_text( false, 'confirma', false, [ 'placeholder' => 'Digite a senha novamente', 'length' => 12, 'type' => 'password' ] ); ?>
            
            <?php if ( $view->item( 'error' ) ): ?>
            <div class="alert alert-danger">
                <b>Erro ao logar</b>
                <p><?php echo $view->item( 'error' ); ?></p>
            </div>
            <?php endif; ?>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <button class="btn pull-right btn-primary btn-lg btn-block">
                        Criar nova conta
                    </button>
                </div>
            </div><!-- boto de login -->
            <br>
            <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-block btn-primary">
                        Facebook
                    </button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-block btn-danger">
                        Google
                    </button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-block btn-info">
                        Twitter
                    </button>
                </div>
            </div><!-- login com as redes sociais -->
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p>Todos os direitos reservados</p>
                </div>
                <div class="col-md-6 text-right">
                    <a href="<?php echo site_url(); ?>">
                        Voltar para o login
                    </a>
                </div>
            </div>
            <hr>
        <?php echo form_close(); ?><!-- fim do formulario de login -->
    </div>
</div>
