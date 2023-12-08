document.addEventListener("DOMContentLoaded", function() {
    var $deleteForm = jQuery('#delete-form');
    var $checkboxes = jQuery('.table input[type="checkbox"]');
    var $confirmationModal = jQuery('#confirmationModal');

    jQuery('#confirmationModal').on('show.bs.modal', function (e) {
        if ($checkboxes.filter(':checked').length === 0) {
            e.preventDefault(); // Impede a exibição da mensagem de confirmação
            alert('Selecione pelo menos uma aposta para excluir.');
        }
    });

    jQuery('#delete-button').on('click', function () {
        // Abre o modal apenas se houver checkboxes marcados
        if ($checkboxes.filter(':checked').length > 0) {
            $deleteForm.submit(); // Envie o formulário
        } else {
            alert('Selecione pelo menos uma aposta para excluir.');
        }
    });

    // Manipulador de eventos para a tecla "Enter" pressionada
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            if ($checkboxes.filter(':checked').length > 0) {
                event.preventDefault(); // Impede o comportamento padrão da tecla "Enter"
                $confirmationModal.modal('show'); // Exibe o modal de confirmação
            } else {
                alert('Selecione pelo menos uma aposta para excluir.');
            }
        }
    });
});
