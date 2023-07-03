function validarFormulario() {
	var nome = document.forms["cadastro"]["nome"].value;
	var senha = document.forms["cadastro"]["senha"].value;
	var email = document.forms["cadastro"]["email"].value;
	if (nome == "") {
		alert("Por favor, preencha o campo nome.");
		return false;
	}
	if (senha == "") {
		alert("Por favor, preencha o campo de senha.");
		if(senha < 5)
			alert("Por favor, utilize uma senha maior.");
			return false;
	}
	if (email == "") {
		alert("Por favor, preencha o campo email.");
		return false;
	}
	if (!/^([a-zA-Z0-9]{3,})@/.test(email)) {
		alert("Por favor, insira um e-mail válido.");
		return false;
	}

}

function validarEmail(email) {
	var re = /\S+@\S+.\S+/;
	return re.test(email);
}


/*
$(document).ready(function() {
    $.ajax({
        url: 'Dados.php',
        type: 'post',
        dataType: 'json',
        success: function(data) {
            // Cria a tabela e exibe os dados dos alunos
            var table = $('<table></table>');
            for (var i = 0; i < data.length; i++) {
                var row = $('<tr></tr>');
                row.append('<td>' + data[i].nome + '</td>');
                row.append('<td>' + data[i].email + '</td>');
                table.append(row);
            }
            $('body').append(table);
        }
    });
});
  
  
  function ativar(element) {

  }
  */