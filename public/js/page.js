$(document).ready(function() {
    $(".type-list").click(function () {
        let typeId = $(this).data('id');
        let select_type = '.product'+typeId;
        $(".selected-type").removeClass('selected-type');
        $(select_type).addClass('selected-type');
    });
});
