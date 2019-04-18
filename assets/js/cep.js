
$(document).ready(function () {

    $('#selectPessoa').click(function () {
        // verifica se há dados setados
        if(document.forms['formulario']["numero"].value != "" ||
            document.forms['formulario']["complemento"].value != "" ||
            document.forms['formulario']["estado"].value != "")
        {
            var res = confirm("Deseja realmente mudar o nome?");
            if (res) {
                document.getElementById('endereco').value = ("");
                document.getElementById('bairro').value = ("");
                document.getElementById('cidade').value = ("");
                document.getElementById('estado').value = ("");
                document.getElementById('numero').value = ("");
                document.getElementById('complemento').value = ("");
                document.getElementById('cep').value = ("");
            } else {

            }
        }
    });

});

