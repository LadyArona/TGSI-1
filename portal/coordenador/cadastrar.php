<?php
    include("cabecalho.php");
    include("../navbar.php");
    include("navbar_coordenador.php");
?>

<div id="conteudo">
	<h2>Cadastro de Usuário</h2>
	<form action="insere-usuario.php" method="POST">
		<p><label for="">Nome Categoria:</label></p>
		<input type="text" name="nome">

		<p><label for="">Descrição:</label></p>
		<textarea name="descricao" cols="30" rows="10"></textarea>
		<p><input type="submit" value="salvar"></p>
	</form>
	<?php
		if (isset($_GET['mensagem'])) {
			echo $_GET['mensagem'];
		}
	?>

</div>

<?php
	include("../rodape.php");
?>