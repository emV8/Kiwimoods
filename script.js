$(document).ready(function() {
    loadForm(1);
});

function loadForm(i) {
    var url = 'http://127.0.0.1/kiwimoods/form'+i+'.php';
    $.get(url, function(result) {
        $('#question').html(result);
        $('.suivant').click(function(event) {
            event.preventDefault();
            var nextUrl = 'http://127.0.0.1/kiwimoods/resform'+1+'.php';
            var postData = getFormResults();
            $.post(nextUrl, postData, function (result) {
                if (1 == result && i < 11) {
                    loadForm(i+1);
                }
            });
        });
    });
}

function getFormResults() {
    var result = {};
    $('.row_result').each(function() {
        var titre = $(this).attr('name');
        $(this).children('td').each(function(titre) {
            if ($(this).attr('required') == 'required') {
                result[titre] = $(this).val();
            }
        });
    });
    
    console.log(result);
    return result;
}