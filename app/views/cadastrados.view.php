<?php if (!defined('ROOT_PATH')) exit("Erro Interno"); ?>
<div id="contentCadastrados">
    <aside id="dados_aluno">
        <h1>Dados do aluno</h1>
        <img src="<?= IMG_URL ?>/default.png" id="qrAlunoSelecionado">
        <form method="post" id="dadosAluno">
            <label>
                <span>Código:</span>
                <input type="text" name="cod" id="alunoCod" readonly>
            </label>
            <label>
                <span>Nome:</span>
                <input type="text" name="alunoNome" id="alunoNome">
            </label>
            <label>
                <span>Turma:</span>
                <input type="text" name="alunoTurma" id="alunoTurma">
            </label>
            <label hidden>
                <input type="hidden" name="pass" id="monitorPass">
            </label>
            <div class="buttons">
                <label class="btn">
                    <script> var act2 = "<?= HOME_URL ?>/aluno/excluir"</script>
                    <button onclick="gerenciar('dadosAluno', 'monitorPass', act2); return false;">
                        <i class="fa fa-minus-circle"></i>
                        Excluir aluno
                    </button>
                </label>
                <label class="btn">
                    <button onclick="ocorrencia(); return false;">
                        <i class="fa fa-times-circle"></i>
                        Ocorrência
                    </button>
                </label>
                <label class="btn">
                    <button class="only-mob" onclick="closeModal('dados_aluno'); return false;">
                        <i class="fa fa-arrow-left"></i>
                        Voltar
                    </button>
                </label>
            </div>
        </form>
    </aside>

    <section id="lista_alunos">
        <h1>Alunos cadastrados</h1>
        <ul>
            <li>
                <label><strong>Nome</strong></label>
                <label><i class="fa fa-book"></i></label>
            </li>
            <?php if ($this->alunos): ?>
                <?php foreach ($this->alunos as $k => $a): ?>
                    <li onclick="dadosAluno('<?=$a['c']?>', '<?= QR_URL ?>')">
                        <label class="nome-aluno" id="al_n<?=$a['c']?>" title="<?=$a['n']?>">
                            <?= $a['n'] ?>
                        </label>
                        <label class="turma-aluno" id="al_t<?=$a['c']?>" title="<?=$a['t']?>">
                            <?= $a['t'] ?>
                        </label>
                    </li>
                <?php endforeach ?>
            <?php else: ?>
                <li>Nenhum aluno cadastrado</li>
            <?php endif ?>
        </ul>
    </section>
</div>
<script>
    if (screen.width < 1024) {
        document.getElementById('dados_aluno').setAttribute('class', 'modal');
    }
</script>
<div id="modals">
    <?php include MODAL_PATH . "/encomenda.modal.php"; ?>
    <?php include MODAL_PATH . "/confirmacao.modal.php"; ?>
    <?php include MODAL_PATH . "/ocorrencia.modal.php"; ?>

    <!-- Modals do menu -->
    <?php include MODAL_PATH . "/iniciar-almoco.modal.php"; ?>
    <?php include MODAL_PATH . "/novo-monitor.modal.php"; ?>
    <?php include MODAL_PATH . "/meus-dados.modal.php"; ?>
</div>
