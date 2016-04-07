<h1>Blog articles</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

    <?php foreach ($clients as $client): ?>
    <tr>
        <td><?= $client->id ?></td>
        <td>
            <?= $this->Html->link($client->nome, ['action' => 'view', $client->id]) ?>
        </td>
        <td>
            <?= $client->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>