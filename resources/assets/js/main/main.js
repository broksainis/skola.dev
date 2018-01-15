$(function(){
    $('[data-js-type=open-remove]').on('click', function(e) {
        $.ajax({
            url: "deleteCategory",
            method: "POST",
            dataType: "json",
            data: { id: $("[data-js=open-remove]").find('span').attr('id') },
            success: function(result) {
                console.log("Success : ", result);
            },
            error: function(error) {
                console.log("AJAX ERROR: ", error);
            }
        });

    });



}