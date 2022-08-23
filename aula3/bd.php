<?
// Arquivo que vai conter todas as configuracoes do banco de dados e unificar as funcoes
// criar funcao obterConexao()
// Importar o banco disponibilizado pelo prof
// Colocar os links para quando clicar abrir outra página buscando os dados do autor, livro etc


function obterConexao(){
    // Abre a conexão com o banco de dados
    // $conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCODEDADOS);
    $conexao = mysqli_connect('localhost', 'root', 'aluno', 'estante'); //em casa alterar esses dados
    return $conexao;
}

function pesquisarAutoresPorCodigoLivro($codigo){

}

function pesquisarListaAutores(){
    $conexao = obterConexao();
    $comandoSql = "select * from autor";
    $query = mysqli_query($conexao, $comandoSql);
    $resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $resultado;
}