<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Cadastrar Cliente'),['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Buscar Cliente'), ['action' => 'query']) ?> </li>
        <li><?= $this->Html->link(__('Verificar Horários'), ['action' => 'query']) ?> </li>
        <li><?= $this->Html->link(__('Sair'), ['controler' => 'Users','action' => 'logout']) ?></li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($client->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($client->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('CPF') ?></th>
            <td><?= h($client->cpf) ?></td>
        </tr>
        <tr>
            <th><?= __('RG') ?></th>
            <td><?= h($client->rg) ?></td>
        </tr>
        <tr>
            <th><?= __('Data de Nascimento') ?></th>
            <td><?= h($client->dt_nasc) ?></td>
        </tr>
        <tr>
            <th><?= __('Endereço') ?></th>
            <td><?= h($client->endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('E-mail') ?></th>
            <td><?= h($client->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefone 1') ?></th>
            <td><?= h($client->telefone1) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefone 2') ?></th>
            <td><?= h($client->telefone2) ?></td>
        </tr>

        <tr>
            <th><?= __('Criado') ?></th>
            <td><?= h($client->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modificado') ?></th>
            <td><?= h($client->modified) ?></td>
        </tr>
    </table>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acões para este cliente') ?></li>
        <li><?= $this->Html->link(__('Editar Cliente'), ['action' => 'edit', $client->id]) ?> </li>
        <li><?= $this->Html->link(__('Agendar Horário'), ['controller' => 'Schedules','action' => 'agendar', $client->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Cliente'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?> </li>
    </ul>
</nav>

