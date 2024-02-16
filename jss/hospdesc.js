//Funções após a leitura do documento
$(document).ready(function() {
    //Select para mostrar e esconder divs
    $('#select').on('change',function(){
        var SelectValue='.'+$(this).val();
        $('.forms form').hide();
        $(SelectValue).toggle();
    });
});