var result ='';  // variável global que guarda o response do ajax, para economizar requisições

// requisição para API que retorna as navas do Star Wars
$.ajax({
    type: "GET",
    url: "https://swapi.co/api/starships/",
    contentType: "application/json; charset=utf-8",
    success: function(data) {
        result = data;
       for(var i in data.results) {
            // Adicionando dinamicamente as linhas da tabela
            var linha = '<tr>' +
                '            <td>'+data.results[i]['model']+'</td>\n' +
                '            <td>'+data.results[i]['name']+'</td>\n' +
                '            <td>'+data.results[i]['manufacturer']+'</td>\n' +
                '            <td><button class="btn btn-dark mais" onclick=vermais('+i+')>ver mais</button></td>\n' +
                '       </tr>';
            $("#naves").append(linha);
         }
    },
    error: function(data) { FailureCallBack(data); }
});

// função que monta e mostra o Modal ao clicar no botão Ver mais, presente na tabela
function vermais(nave) {
    $('#nome-nave').text(result.results[nave]['name']);
    $('#modelo').text('Modelo: '+result.results[nave]['model']);
    $('#carga').text('Capacidade de Carga: '+result.results[nave]['cargo_capacity']);
    $('#tripulantes').text('Número de tripulantes: '+result.results[nave]['crew']);
    $('#hyperdrive').text('Taxa de hyperdrive: '+result.results[nave]['hyperdrive_rating']);
    $('#comprimento').text('Comprimento: '+result.results[nave]['length']);
    $('#passengers').text('Número de passageiros: '+result.results[nave]['passengers']);
    $('#fabricante').text('Fabricante: '+result.results[nave]['manufacturer']);
    $('#velocidade').text('Velocidade máxima na atmosfera: '+result.results[nave]['max_atmosphering_speed']);
    $('#filmes').text('Filmes em que a nave aparece:');

    // faz requisições com as urls dos filmes, para obter o nome e o número do epsódio dos mesmos
    for(var i in result.results[nave]['films']){
        $.ajax({
            type: "GET",
            url: result.results[nave]['films'][i],
            contentType: "application/json; charset=utf-8",
            success: function(data) {
                $('#filmes').append('<p>Episode '+ data['episode_id'] +' - '+ data['title'] + '</p>');
            },
            error: function(data) { FailureCallBack(data); }
        });

    }
    $('#modalNave').modal('show');
}

