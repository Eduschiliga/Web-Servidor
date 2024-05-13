function showDeleteModal(nmrProcesso) {
    document.getElementById('deleteModal').style.display = 'block';
    document.getElementById('numero_processo').innerHTML = `Número do processo: <strong>${nmrProcesso}</strong>`;
    document.getElementById('confirmDelete').onclick = function() {
        window.location.href = '../../../controller/processo/processos.dados.controller.php?acao=deletar&nmrProcesso=' + nmrProcesso;
    };
}

window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    const deleted = urlParams.get('deleted');
    const nmrProcesso = urlParams.get('nmrProcesso');

    if (deleted === 'true' && nmrProcesso) {
        showConfirmModal(nmrProcesso);
    }
};

function showConfirmModal(nmrProcesso) {
    document.getElementById('confirmModal').style.display = 'block';
    document.getElementById('numero_processo').innerHTML = `<strong>${nmrProcesso}</strong>`;
}