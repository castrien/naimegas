<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Cadastrar Cliente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Encontrar Cliente'), ['action' => 'query']) ?></li>
    </ul>
</nav>
<div class="clients index large-9 medium-8 columns content">
    <h3><?= __('Clients') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('cpf') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($clients as $client): ?>
        <tr>
            <td><?= $this->Number->format($client->id) ?></td>
            <td><?= h($client->nome) ?></td>
            <td><?= h($client->cpf) ?></td>
            <td><?= h($client->created) ?></td>
            <td><?= h($client->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $client->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->id]) ?>
                <?= $this->Html->link(__('Agendar'), ['controller' => 'Schedules', 'action' => 'agendar', $client->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->id], ['confirm' => __('Tem certeza que quer deletar o cliente: {0}?', $client->nome)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>