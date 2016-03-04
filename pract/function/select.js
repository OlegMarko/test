$(document).ready(function() {
    $("#category").change(function() {
        var category = parseInt($("#category").val());
        selectCategory(category);
    });
});

$(document).ready(function() {
    $("#category_insert").change(function() {
        var category = parseInt($("#category_insert").val());
        selectCategoryInsert(category);
    });
});


function selectCategory(category) {
    var demension = $("#demension");
    var demension2 = $("#demension_in");
    
    if (category > 0) {
        $("#divdemension").fadeIn("slow");
        $("#divdemension_in").fadeIn("slow");
        
        demension.attr("disabled", false);
        demension2.attr("disabled", false);
        
        demension.load(
            "index.php",
            {category: category}
        );
        
        demension2.load(
            "index.php",
            {category: category}
        );
    }
}

function selectCategoryInsert(category) {
    var demension3 = $("#demension_insert");
    
    if (category > 0) {
        $("#divdemension_insert").fadeIn("slow");
        
        demension3.attr("disabled", false);
        
        demension3.load(
            "index.php",
            {category: category}
        );
    }
}