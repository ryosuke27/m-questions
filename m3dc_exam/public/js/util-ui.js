$(function () {

    $.validator.addMethod("valueNotEquals", function(value, element, arg){
        return arg != value;
    }, "選択してください");


    $("#nameForm").validate({
        rules: {
            todohuken: {
                valueNotEquals: "msg"
            },

        },
        messages: {
            todohuken: {
                equalTo: "選択してください"
            },

        },
        errorClass: "error_msg",
        wrapper: "li"
    });
});
