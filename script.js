$(document).ready(function() {
    //loadForm(1);
    $('body').on('click', '#last', function(e){
        e.preventDefault;
        window.location.href = "tmp.php";
        /* test 
        permettrait de passer au form10 qui n'est pas affiché mais continue la fonction loadForm et donc
        retourne à la question 1
        $("#q").load("form/form10.php");
        return;
        */
    })
});


function loadForm(elem) {
    formulaire=$(elem).parent('form');
    
    $.ajax({
        url:formulaire.attr('action'),
        type:formulaire.attr('method'),
        data:formulaire.serialize(),
        dataType:'text',
        success:function(html){
            if(html!=undefined)
            {
                if(html!=false)
                {
                     $('.question').slideUp().html(html).slideDown();
                }
                else{
                   alert("Veuillez remplir tous les champs du questionnaire")
                    
                }
               
            }
/*
            if($("#dernier").length==1){
            //alert($(this).attr('id'));
            window.location.href = "tuto2.php";
        }
        */
            
        }
      });

}