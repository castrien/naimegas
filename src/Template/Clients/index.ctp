<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('AÇÕES') ?></li>
        <li><?= $this->Html->link(__('Cadastrar Cliente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Encontrar Cliente'), ['action' => 'view', $client->id]) ?></li>
        <li><?= $this->Html->link(__('Marcar Horário'), ['action' => 'edit']) ?></li>
        <li><?= $this->Html->link(__('Verificar Horário'), ['action' => 'view']) ?></li>
        <li><?= $this->Html->link(__('Sair'),['controller' => 'Users'], ['action' => 'logout']) ?></li>
    </ul>
</nav>

