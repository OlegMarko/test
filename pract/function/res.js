/*
$(document).ready(function() {
    $("#get_res").click( function () {
        var number = parseFloat($(".number").val());
        var out = parseInt($("#demension").val());
        var inp = parseInt($("#demension_in").val());
        var res = 1;

        $.ajax({
            url: "index.php",
            type: "POST",
            data: ({
                    get_res: res,
                    number: number, 
                    demension: out, 
                    demension_in: inp
                }),
            cache: false,
            dataType: 'html',
            beforeSend: function () {
                $("#res").text("Очікування результату");
            },
            success: function(html){
                $("#res").text(html);
            }
        });
    });
});
*/

function funcBefore() {
    $("#res").text("Очікування результату...");
}

function funcRes(data) {
    $("#res").html(data);
}


$(document).ready( function () {
    $("#load").bind("click", function () {
        var number = parseFloat($(".number").val());
        var out = parseInt($("#demension").val());
        var inp = parseInt($("#demension_in").val());
        
        $.ajax( {
            url: "function/ajax.php",
            type: "POST",
            data: ({
                number: number,
                demension: out, 
                demension_in: inp
            }),
            dataType: "html",
            beforeSend: funcBefore,
            success: funcRes
        });
    }); 
});