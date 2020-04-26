$("#submit").click(function(e){
        e.preventDefault();
        var ville = $("#ville").val();
        console.log(ville);
        $.ajax({
            url : 'http://api.openweathermap.org/data/2.5/weather?q=' + ville +'&appid=c1cd85bc46c942cdead8b1cc7c89ef45',
            success: function(resultat) {
                console.log(resultat);
                var sky = resultat.weather[0].main;
                var temp = (resultat.main.temp - 273.15).toFixed(2);
                $('#displayCityName').html(resultat.name);
                $('#displayTemp').html(temp);
                $('#displayWeather').html(resultat.weather[0].main);
                $('#skyImage').css({"display": ""});
                $('#degres').css({"display": ""});
                if(sky == "Clear"){
                    $('#skyImage').attr('src','soleil.png');
                }
                if(sky == "Clouds"){
                    $('#skyImage').attr('src','soleil-nuages.png');
                }
                if(sky == "clear sky"){
                    $('#skyImage').attr('src','nuages.png');
                }
                if(sky == "Rain"){
                    $('#skyImage').attr('src','pluie.png');
                }

            },
            error: function(xhr, message, status){
                console.log(message);
            }
        })
    
})

$("#ville").keyup(function(e){
    var ville = $("#ville").val();
    console.log(ville);
    $.ajax({
        url :  'https://geo.api.gouv.fr/communes?nom=' + ville + '&fields=departement&boost=population&limit=5&autocomplete=1',
        success: function(resultat) {
            console.log(resultat);
            tableCity = [];
            for($i = 0; $i < resultat.length; $i++){
                tableCity.push(resultat[$i].nom);
            }

            $('#ville').autocomplete({source:tableCity});
        },
        error: function(xhr, message, status){
            console.log(message);
        }
    })
})
