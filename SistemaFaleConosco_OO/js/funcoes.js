function abrirUrl(url, divId, idOpcao){
  // Remove as classes das opções da página
  $('ul li').each(function(i)
  {
    console.log($(this).attr('class', "")); 

  });

  $.get(url, function(data, status){
        document.getElementById(divId).innerHTML = data;
        $("#"+idOpcao).attr('class', 'active');
        console.log($(idOpcao))


		});
}



function salvarMensagem(){
	var formulario = $("#formFaleConosco");
   var url = formulario.attr('action');
	$.ajax({
        type: "POST",
        url: url,
        dataType:'json',
        data: formulario.serialize(), // serializes the form's elements.
        success: function(data)
        {
            if(data.result == true){
              alert(data.msg)
              $("#formFaleConosco")[0].reset()
            }  
        }
    });   
}

function excluirMensagem(id){
  $.ajax({
    type: "GET",
    url: "excluirMensagem.php?id="+id,
    dataType:'json',
    success: function(data)
    {
        if(data.result == true){
          alert(data.msg)
          abrirUrl('paginaListarMensagens.php', 'mainContent', 'opcaoListarMensagens');
        }  
    }
});   
}

function getMensagens(){
    
    $.ajax({
        type: "GET",
        url: "getMensagens.php",
        dataType:'json',// serializes the form's elements.
        success: function(response)
        {
            var tbody = '';
            $.each(response, function (i, item) {
                tbody += '<tr><td>' + item.nome + '</td><td>' + item.email + '</td><td>' + item.telefone + '</td> <td>' + item.mensagem + '</td></tr>';
            });
            $('#tbodyMensagens').append(tbody);      
        }
    });           
}
