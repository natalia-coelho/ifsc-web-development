
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-4">
                <h1 class="text-center">Fale Conosco</h1>
                <form id="formFaleConosco" name="formFaleConosco" class="form-horizontal" method="post" action="salvarMensagem.php">
                    <div class="form-group">
                    	<label for="bine">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Ex: José da Silva" required/>
                    </div>
                    <div class="form-group">
                    	<label for="email">E-mail</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="exemplo@exemplo.com" required/>
                    </div>
                    <div class="form-group">
	                    <label for="telefone">Telefone</label>
                        <input type="text" id="telefone" name="telefone" class="form-control" placeholder="(00) 00000-0000" required/>
                    </div>
                    <div class="form-group">
                    	<label for="mensagem">Mensagem</label>
                        <textarea rows="3" id="mensagem" name="mensagem" class="form-control" placeholder="Mensagem" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="button" id="btnEnviar" class="btn btn-outline-success btn-block pull-right" value="Enviar" onclick="salvarMensagem()"/>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


