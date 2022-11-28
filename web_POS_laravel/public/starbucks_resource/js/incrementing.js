jQuery(document).ready(($) => {
    $('.quantity').on('click', '.plus', function(e) {
        let $input = $(this).prev('input.qty');
        let val = parseInt($input.val());
        $input.val(val + 1).change();
    });

    $('.quantity').on('click', '.minus', function(e) {
        let $input = $(this).next('input.qty');
        var val = parseInt($input.val());
        if (val > 0) {
            $input.val(val - 1).change();
        }
    });
    $('modal-content').on('shown.bs.modal', function() {
        $('close').trigger('focus');
    });
    const modal = document.querySelector('#modal');
    const openModal = document.querySelector('.open-button');
    const closeModal = document.querySelector('.close-button');

    openModal.addEventListener('click', () => {
        modal.showModal();
    });

    closeModal.addEventListener('click', () => {
        modal.close();
    });
});