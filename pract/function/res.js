$(document).ready(function() {
    $("#res").change(function() {
        get_r();
    });
});

function get_r() {
    var res = $("#res");
    var number = parseFloat($(".number").val());
    var out = parseInt($("#demension").val());
    var inp = parseInt($("#demension_in").val());
        
        res.load(
            "index.php",
            {
                number: number,
                diminsion: out,
                diminsion_in: inp
            }
        );
};