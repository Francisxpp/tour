$( '#add-campo' ).click(function() {

    $( "#form" ).append( '<input type="text" name="filial1[]" id="cnpj" placeholder="CNPJ"> <input type="text"  name="filial2[]" id="cep1" placeholder="CEP">\
     <input type="text" name="filial3[]"  id="bairro" placeholder="BAIRRO"> <input type="text" name="filial4[]" id="cidade1" placeholder="CIDADE/UF">\
     <input type="number" name="filial5[]" id="colab" Placeholder="Nº ¹"> <input type="number" name="filial6[]" id="colab" Placeholder="Nº ²">' );
    });