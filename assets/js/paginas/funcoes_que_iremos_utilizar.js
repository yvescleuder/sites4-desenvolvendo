/*
	type = Método (POST ou GET)
	url = Link de onde está a nossa ação do formulário
	data = Dados que serão enviados para o nosso PHP
	dataType = Qual tipo de retorno que ele está esperando (iremos usar json)
	beforeSend = Antes de receber a resposta (error ou success) essa ação é executada
	error = Se a requisição, valição etc for erro
	success = Se a requisição, valição etc for sucesso
*/

$.ajax({
    type: 'POST',
    url: '/app/action/inserir.php',
    data: '',
    dataType: 'json',
    beforeSend: function(){},
    error: function(){},
    success: function(){}
});



/**
 * Essa função pega a nossa URL e separa onde tem o caractere /
 * sendo assim ela torna-se um vetor onde você pode acessar
 * pela sua posição, ex: pageURL[4]
 */
var pageURL = window.location.href.split('/');

// Limpar um formulário
$("#formulario_id").trigger("reset");