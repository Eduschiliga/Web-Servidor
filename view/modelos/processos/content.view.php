<?php
    //require ('../../../model/Usuario.php');
    require ('../../../model/Processo.php');
    require ('../../../database/Conexao.php');
    $processo = new Processo();
    $usuario = unserialize($_SESSION['usuario']);
    $processos = $processo->listarTodos($usuario->getId());
?>

<main>
    <h1>Processos</h1>
    <section class="container-busca">
        <form method="get" action="../../../controller/processo/processos.dados.controller.php">
            <label class="barra-busca">
                <input type="text" maxlength="16" name="nmrProcesso" placeholder="Informe o número do processo..." class="input-processo">
                <button type="submit"><img src="../../../images/icons/search_icon.png" alt="Ícone de busca"></button>
            </label>
        </form>
    </section>

    <section class="container-button">
        <ul>
            <li><a href="../../../controller/processo/processos.dados.controller.php?acao=incluir" class="button-acao"><img src="../../../images/icons/incluir.png" alt="Icon Incluir">INCLUIR</a></li>
        </ul>
    </section>

    <table>
        <thead>
        <tr>
            <th>Número do Processo</th>
            <th>Cliente</th>
            <th>Descrição</th>
            <th>Escritório</th>
            <!--<th>Próximo prazo</th>-->
            <th colspan="3" style="text-align: center">Opções</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($processos as $processo): ?>
            <tr>
                <td><?php echo $processo->getNmrProcesso(); ?></td>
                <td><?php echo $processo->getCliente(); ?></td>
                <td><?php echo $processo->getDescricao(); ?></td>
                <td><?php echo $processo->getEscritorio() ? 'Sim' : 'Não'; ?></td>
                <td><a href="../../../controller/processo/processos.dados.controller.php?acao=editar&nmrProcesso=<?php echo $processo->getNmrProcesso(); ?>"><img src="../../../images/icons/edit_icon.png" alt="Ícone Editar"></a></td>
                <td><a href="../../../controller/processo/processos.dados.controller.php?acao=visualizar&nmrProcesso=<?php echo $processo->getNmrProcesso(); ?>"><img src="../../../images/icons/visibility_icon.png" alt="Ícone Visualizar"></a></td>
                <td><a href="#" onclick="showDeleteModal('<?= $processo->getNmrProcesso(); ?>');"><img src="../../../images/icons/delete.png" alt="Ícone Excluir"></a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Modal de Confirmação -->
    <div id="deleteModal">
        <div class="modal-content">
            <h2>Confirmação de Exclusão</h2>
            <p>Tem certeza que deseja excluir este processo?</p>
            <button id="confirmDelete">Confirmar</button>
            <button onclick="document.getElementById('deleteModal').style.display='none'" class="cancel-button">Cancelar</button>
        </div>
        <div class="modal-background"></div>
    </div>

    <script>
        function showDeleteModal(nmrProcesso) {
            document.getElementById('deleteModal').style.display = 'block';
            document.getElementById('confirmDelete').onclick = function() {
                window.location.href = '../../../controller/processo/processos.dados.controller.php?acao=deletar&nmrProcesso=' + nmrProcesso;
            };
        }
    </script>
</main>

