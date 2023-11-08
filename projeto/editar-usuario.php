<h1>Editar Usuario</h1>
<?php
  $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
  $res = $conn->query($sql);
  $row = $res->fetch_object();
?>
<form method="POST" action="?page=salvar">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value=<?php print $row->id; ?> required>

        <label for="name">Nome:</label>
        <input type="text" name="nome" value=<?php print $row->nome; ?> required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" value=<?php print $row->email; ?> required>
        <br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>
        <br>
        <label for="senha">Data de Nascimento:</label>
        <input type="date" name="data_nasc" value=<?php print $row->email; ?> required>
        <br>
        <button type="submit">Enviar </button>
        <!-- <input type="submit" value="Adicionar"> -->
</form>

