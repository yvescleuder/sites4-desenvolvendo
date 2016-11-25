$(document).ready(function() {

	$.ajax({
	    type: 'POST',
	    url: '/app/action/listar.php',
	    data: {
	    	'acao': 'listarCategorias'
	    },
	    dataType: 'json',
	    beforeSend: function(){},
	    success: listarCategorias
	});

	$("#botaoCriarPost").click(function() {
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
		    data: $("#formularioCriarPost").serialize(),
		    dataType: 'json',
		    beforeSend: function(){},
		    error: cadastroErro,
		    success: cadastroSucesso
		});
	});
});

function cadastroErro(resposta) {
	alert(resposta.responseJSON);
}

function cadastroSucesso(resposta) {
	alert(resposta);
}

function listarCategorias(categorias) {
	var categoriasHTML = "";


	categorias.forEach(function(categoria, i) {
		categoriasHTML += '<option value="'+categoria.id+'">'+categoria.nome+'</option>';
	});

	$('#categorias').append(categoriasHTML);
}