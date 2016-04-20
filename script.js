$(document).ready(function() {
    //loadForm(1);
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
            
            
        }
      });

}
