function  callInput(input){
    $.get('orte.php',{"input":input},function (data){
        var response = JSON.parse(data);
        console.log(response);
    })}