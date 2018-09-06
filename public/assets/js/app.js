$(document).ready(function(){

    if ($(window).width() < 960) {
        var placement = 'top';
    }else {
        var placement = 'right';
    }

    $('#legalone').popover({
        placement: placement,
        html: true,
        //template: '<div class="popover container"><div class="arrow"></div><a class="list-group-item" href="https://iziquechebabi.novajus.com.br/" target="_blank"><i class="glyphicon glyphicon-globe" style="font-size:1em!important;"></i> Ir para Legal One</a><a class="list-group-item" href="/intranet/andamentos-datacloud"><i class="glyphicon glyphicon-list-alt" style="font-size:1em!important;"></i> Andamentos DataCloud</a><a class="list-group-item" href="/intranet/inserir-custas"><i class="glyphicon glyphicon-usd" style="font-size:1em!important;"></i> Lançamentos de Custas</a><a class="list-group-item" href="/intranet/inserir-andamentos"><i class="glyphicon glyphicon-plus" style="font-size:1em!important;"></i> Inserir Andamentos</a></div>'
        template: '<div class="popover container"><div class="arrow"></div><a class="list-group-item" href="https://iziquechebabi.novajus.com.br/" target="_blank"><i class="glyphicon glyphicon-globe" style="font-size:1em!important;"></i> Ir para Legal One</a><a class="list-group-item" href="/intranet/andamentos-datacloud"><i class="glyphicon glyphicon-list-alt" style="font-size:1em!important;"></i> Andamentos DataCloud</a><a class="list-group-item" href="/intranet/inserir-andamentos"><i class="glyphicon glyphicon-plus" style="font-size:1em!important;"></i> Inserir Andamentos</a></div>'
    });

    $('#agenda').popover({
        placement: placement,
        html: true,
        //template: '<div class="popover container"><div class="arrow"></div><a class="list-group-item" href="/intranet/agenda"><i class="glyphicon glyphicon-calendar" style="font-size:1em!important;"></i> Eventos Agenda</a><a class="list-group-item" href="/intranet/agendamento-massagem"><i class="glyphicon glyphicon-ok-circle" style="font-size:1em!important;"></i> Agendamento Massagem</a></div>'
        template: '<div class="popover container"><div class="arrow"></div><a class="list-group-item" href="/intranet/agenda"><i class="glyphicon glyphicon-calendar" style="font-size:1em!important;"></i> Eventos Agenda</a></div>'
    });

});