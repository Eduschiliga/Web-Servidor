<?php
require ('../model/Processo.php');

$processo = new Processo();
$dadosAggregados = $processo->getDadosAggregados();
$processosDoDia = $processo->getProcessosDoDia();
?>
<main>
    <section>
        <h1>Dados sobre Processos e Honorários</h1>
        <table>
            <thead>
            <tr>
                <th>Total de Processos</th>
                <th>Total de Honorários</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $dadosAggregados['total_processos']; ?></td>
                <td>R$ <?php echo $dadosAggregados['total_honorarios']; ?></td>
            </tr>
            </tbody>
        </table>
    </section>

    <section>
        <h1>Processos do dia</h1>
        <table>
            <thead>
            <tr>
                <th>Número do processo</th>
                <th>Cliente</th>
                <th>Próximo prazo</th>
                <th colspan="1">Opções</th>
            </tr>
            </thead>
            <tbody>
            <?php if (empty($processosDoDia)): ?>
                <tr>
                    <td colspan="5">Nenhum processo encontrado para hoje.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($processosDoDia as $processo): ?>
                    <tr>
                        <td><?php echo $processo['numeroprocesso']; ?></td>
                        <td><?php echo $processo['cliente']; ?></td>
                        <td><?php echo $processo['proximoprazo']; ?></td>
                        <td><a href="../controller/processo/processos.dados.controller.php?acao=visualizar&nmrProcesso=<?php echo $processo['numeroprocesso']; ?>"><img src="../images/icons/visibility_icon.png" alt="Ícone Visualizar"></a></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </section>
</main>