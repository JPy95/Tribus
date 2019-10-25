$(window).load(function() {

    var aluno = window.location.search.substring(1);

    if(aluno.split('&')[0] === "aluno=true"){
        $('#ExemploModalCentralizado').modal('hide');
    } else {
        $('#ExemploModalCentralizado').modal('show');
    }
    
});