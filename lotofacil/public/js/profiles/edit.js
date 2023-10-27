document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('openEditModalButton').addEventListener('click', function() {
        // Exibe o modal quando o botão "Editar" é clicado
        var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
        confirmationModal.show();
    });
});