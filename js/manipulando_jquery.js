//Do menu da tela inicial
$("#traco-menu").on('mouseover', function() {
    //Ao passar o mouse em cima do menu-sanduiche ele aumenta o menu lateral para 270px
    $("#nav-menu").attr('style', 'width: 270px!important');
    $("#btnConsult").attr('style', 'display: block, margin-top: -60px !important;');
});

$("#btn-sanduiche").click(function() {
    //Ao clicar no menu-sanduiche ele reduz o menu lateral para 71px
    $("#nav-menu").attr('style', 'width: 71px!important');
    $("#btnConsult").attr('style', 'display: none');
});

//-----------------------------------------------------------------------------------------------


//Ajax para cadastrar
$('#btnCadastrar').click(function() {
    var obj = {
        nome : $("#nome").val(),
        endereco : $("#endereco").val(),
        telefone : $("#telefone").val(),
        email : $("#email").val(),
        data_nascimento : $("#data_nascimento").val()
    };

    console.log(obj);

    /*Usando o AJAX*/
    $.ajax({
        url: "app/conexao.php?req=1",

        type: "POST",

        dataType: "TEXT",

        data: obj,

        beforeSend: function()
        {
        },
        success: function(data)
        {
            $("#spResultado").html(data);
        }

       //Esse done serve para limpar os formulários no final
    }).done(function(data){
        $("#nome").val(' '),
        $("#endereco").val(' '),
        $("#telefone").val(' '),
        $("#email").val(' '),
        $("#data_nascimento").val(' ')
    });
});


//-----------------------------------------------------------------------------------------------


//Ajax para Update
$('#btnEditar').click(function() {
    var obj2 = {
        cod_pessoa: $("#cod_pessoa").val(),
        nome : $("#nome").val(),
        endereco : $("#endereco").val(),
        telefone : $("#telefone").val(),
        email : $("#email").val(),
        data_nascimento : $("#data_nascimento").val()
    };
    console.log(obj2);

    /*Usando o AJAX*/
    $.ajax({
        url: "app/conexao.php?req=2",

        type: "POST",

        dataType: "TEXT",

        data: obj2,

        beforeSend: function()
        {
        },
        success: function(data)
        {
            $("#spResultado").html(data);
        }

    }).done(function(data){
        //Depois o done vai executar esse location e voltar para consulta.php
        window.location.href = 'consulta.php';
    });
});


//-----------------------------------------------------------------------------------------------


//Ajax para Delete
$('#deletar').click(function(event) {
    event.preventDefault();
    var obj3 = {
        cod_pessoa: $("#cod_pessoa").val(),
    };
    console.log(obj3);

    /*Usando o AJAX*/
    $.ajax({
        url: "app/conexao.php?req=3",

        type: "POST",

        dataType: "TEXT",

        data: obj3,

        beforeSend: function()
        {
        },
        success: function(data)
        {
            $("#spResultado").html(data);
        }
    }).done(function(data){
        //Depois o done vai executar esse location e voltar para consulta.php
        window.location.href = 'consulta.php';
    });
});

