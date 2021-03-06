<?php if (!defined("ROOT_PATH")) exit("Internal Error"); ?>
<?php include MODAL_PATH . '/cadastre-se.php'; ?>
<style type="text/css">
    body { background-color: white !important; }
</style>
<main style="margin-top: 2em; margin-bottom: 4em;">
    <section id="login_content">
        <form id="formLogin" method="post" class="row" action="<?=HOME_URL?>/User/login">

            <h4 class="center-align">Bem vindo ao SMA</h4>

            <div class="container">
                <div class="col s12 l8 push-l2">
                    <div class="hide-on-mob col s12 l6">
                        <img src="<?= VIEWS_URL ?>/_img/logo_sma.png" style="max-width: 100%">
                    </div>

                    <div class="col s12 l6">
                        <div class="col s12 input-field">
                            <input type="text" name="userdata[username]" id="username" class="validate" required>
                            <label for="username">Login</label>
                        </div>
                        <div class="col s12 input-field">
                            <input type="password" name="userdata[userpass]" id="userpass" class="validate" required>
                            <label for="userpass">Senha</label>
                        </div>

                        <div class="container center-align">
                            <label class="brand-logo red-text" id="feedback"></label>
                        </div>

                        <div class="row">
                            <button class="btn-large col s10 push-s1 red darken-3"  style="margin-bottom: 0.2em" id="btnLogin">Entrar</button>
                            <a href="#cadastre_se" class="btn-large col s10 push-s1 red darken-3 modal-trigger">Cadastre-se</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>
