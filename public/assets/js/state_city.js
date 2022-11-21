$(document).ready(function() {
                
    $.getJSON('https://servicodados.ibge.gov.br/api/v1/localidades/estados/', {
        id: 10,
    }, function(json) {

        var options = '<option value="">Selecione o estado: </option>';

        for (var i = 0; i < json.length; i++) {

            options += '<option data-id="' + json[i].id + '" value="' + json[i].nome + '" >' + json[
                i].nome + '</option>';

        }

        $("select[name='state']").html(options);

    });



});


$("select[name='state']").change(function() {

    if ($(this).val()) {
        $.getJSON('https://servicodados.ibge.gov.br/api/v1/localidades/estados/' + $(this).find(
            "option:selected").attr('data-id') + '/municipios', {
            id: $(this).find("option:selected").attr('data-id')
        }, function(json) {

            var options = '<option value="">Selecione a cidade:</option>';

            for (var i = 0; i < json.length; i++) {
                options += '<option value="' + json[i].nome + '" >' + json[i].nome + '</option>';
            }

            $("select[name='city']").html(options);
        });

    } else {
        $("select[name='city']").html('<option value="">–  –</option>');
    }

});

