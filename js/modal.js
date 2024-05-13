window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    const deleted = urlParams.get('deleted');
    const create = urlParams.get('create');
    const edit = urlParams.get('editar');
    const nmrProcesso = urlParams.get('nmrProcesso');

    if (deleted === 'true' && nmrProcesso) {
        showConfirmModal(nmrProcesso);
    }

    if (create === 'true' && nmrProcesso) {
        showCreateModal(nmrProcesso);
    }

    if (edit === 'true' && nmrProcesso) {
        showEditModal(nmrProcesso);
    }
};

function showConfirmModal(nmrProcesso) {
    document.getElementById('confirmModal').style.display = 'block';
    document.getElementById('numero_processo').innerHTML = `<strong>${nmrProcesso}</strong>`;
}

function showCreateModal(nmrProcesso) {
    document.getElementById('createModal').style.display = 'block';
    document.getElementById('numero_processo_create').innerHTML = `<strong>${nmrProcesso}</strong>`;
}

function showEditModal(nmrProcesso) {
    document.getElementById('editModal').style.display = 'block'; // Certifique-se de ter um modal com id 'editModal'
    document.getElementById('numero_processo_edit').innerHTML = `<strong>${nmrProcesso}</strong>`; // E um span com id 'numero_processo_edit'
}
