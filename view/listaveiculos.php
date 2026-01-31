<!DOCTYPE html>
<html>
<head>
    <title>Lista de Veículos</title>
</head>
<body>
    <h1>Lista de Veículos</h1>
    <a href="?acao=editar">Cadastrar novo veículo</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Valor Diária</th>
            <th>Categoria</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($veiculos as $v): ?>
            <tr>
                <td><?= $v->id ?></td>
                <td><?= $v->modelo ?></td>
                <td><?= $v->ano ?></td>
                <td><?= $v->valor_diaria ?></td>
                <td><?= $v->categoria ?></td>
                <td>
                    <a href="?acao=editar&id=<?= $v->id ?>">Editar</a> |
                    <a href="?acao=excluir&id=<?= $v->id ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
