var httpRequest;
if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    httpRequest = new XMLHttpRequest();
}


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


function salvarForm(){
	var formulario = $("#formTeste");
    var url = formulario.attr('action');

    $.ajax({
           type: "POST",
           url: url,
		       dataType:'json',
           data: formulario.serialize(), // serializa os elementos do formulario.
           success: function(data)
           {
          alert(data.msg); // Mostra a resposta do PHP - apenas para teste.
          if(data.result == true){
            formulario.reset();
          }
				
           }
         });
}