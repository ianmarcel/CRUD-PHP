<h1>Novo Usuario</h1>
<form method="POST" action="?page=salvar">
        <input type="hidden" name="acao" value="cadastrar">
        
        <label for="name">Nome:</label>
        <input type="text" name="nome" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>
        <br>
        <label for="senha">Data de Nascimento:</label>
        <input type="date" name="data_nasc" required>
        <br>
        <button type="submit">Enviar </button>
        <!-- <input type="submit" value="Adicionar"> -->
</form>

