function richtung(richtung){
    $.post('orte.php',{"richtung":richtung},function (data){
        var response = JSON.parse(data);
        $('#text').html(response);
    })}