<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Veículo</title>
</head>
<body>
    <h1>Cadastro de Veículo</h1>
    <form action="?acao=<?= isset($veiculo->id) ? 'editar' : 'cadastrar' ?>" method="post">
        <?php if (isset($veiculo->id)): ?>
            <input type="hidden" name="id" value="<?= $veiculo->id ?>">
        <?php endif; ?>
        <label>Modelo:</label><br>
        <input type="text" name="modelo" value="<?= $veiculo->modelo ?? '' ?>"><br><br>

        <label>Ano:</label><br>
        <input type="number" name="ano" value="<?= $veiculo->ano ?? '' ?>"><br><br>

        <label>Valor da Diária:</label><br>
        <input type="text" name="valor_diaria" value="<?= $veiculo->valor_diaria ?? '' ?>"><br><br>

        <label>Categoria:</label><br>
        <input type="text" name="categoria" value="<?= $veiculo->categoria ?? '' ?>"><br><br>

        <input type="submit" value="Salvar">
    </form>
    <br>
    <a href="?acao=index">Voltar à lista</a>
</body>
</html>
