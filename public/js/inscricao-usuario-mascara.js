$(document).ready(function(){
    $('.phone_with_ddd').mask('(00)0000-0000');
    $('.mobile_with_ddd').mask('(00)00000-0000');
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.date').mask('00/00/0000');
    $('.cep').mask('00000-000');
    $('.phone').mask('0000-0000');
    $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
    $('.money').mask('000.000.000.000.000,00', {reverse: true});
    $('.money2').mask("#.##0,00", {reverse: true});
    $('.percent').mask('##0,00%', {reverse: true});
 
    $('#inscricao-usuario').submit(function(form){
        $('.phone_with_ddd').unmask();
        $('.cpf').unmask();
        $('.mobile_with_ddd').unmask();
    });
    
    $('#admin-cadastro').submit(function(form){
        $('.cpf').unmask();
    });
});