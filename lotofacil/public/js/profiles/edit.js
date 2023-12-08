document.addEventListener("DOMContentLoaded", function() {
    var modificacoes = false;

    document.getElementById('name').addEventListener('change', function () {
        modificacoes = true;
    });
    document.getElementById('surname').addEventListener('change', function () {
        modificacoes = true;
    });
    document.getElementById('data_nascimento').addEventListener('change', function () {
        modificacoes = true;
    });
    document.getElementById('email').addEventListener('change', function () {
        modificacoes = true;
    });

    document.getElementById('openEditModalButton').addEventListener('click', function() {
        if (modificacoes) {
            $('#confirmationModal').modal('show');
        } else {
            alert("É necessário fazer pelo menos uma alteração para que você possa salvar.");
        }
    });
});