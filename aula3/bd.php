<?
// Arquivo que vai conter todas as configuracoes do banco de dados e unificar as funcoes
// criar funcao obterConexao()

function obterConexao(){
    // Abre a conexão com o banco de dados
    // $conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCODEDADOS);
    $conexao = mysqli_connect('localhost', 'root', 'aluno', 'estante'); //em casa alterar esses dados
}

function pesquisarAutoresPorCodigoLivro($codigo){

}

function pesquisarListaAutores(){
    $conexao = obterConexao();
    $comandoSql = "select * from autor";
    $query = mysqli_query($conexao, $comandoSql);
    $resultado - mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $resultado;
}