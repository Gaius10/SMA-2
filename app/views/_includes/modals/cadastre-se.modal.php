<?php if (!defined("ROOT_PATH")) exit("Internal Error"); ?>
<!-- Modal para efetuar cadastro de novo monitor -->

<section class="modal" id="cadastre_se" hidden>
	<h1>Cadastre-se</h1>
	<form action="<?= HOME_URL ?>/login/cadastro" method="post" id="newMon">
		<label id="nome">
			<span>Nome:</span>
			<input type="text" name="userNome">
		</label>
		<label id="login">
			<span>Login:</span>
			<input type="text" name="userLogin">
		</label>
		<label id="email">
			<span>Email:</span>
			<input type="text" name="userEmail">
		</label>
		<label id="senha">
			<span>Senha:</span>
			<input type="password" name="userPass">
		</label>
		<label id="senha2">
			<span>Senha:</span>
			<input type="password" name="userPassConfirm" placeholder="Confirmação">
		</label>
		<label class="btn" id="btn1">
			<button class="button">Cadastrar</button>
		</label>
		<label class="btn" id="btn2">
			<button onclick="closeModal('cadastre_se'); return false;" 
				class="button">
				Cancelar
			</button>
		</label>
	</form>
</section>