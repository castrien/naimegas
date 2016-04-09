<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="clients form large-9 medium-8 columns content">
    <?= $this->Form->create($client) ?>
    <fieldset>
        <legend><?= __('Add Client') ?></legend>
        <?php
            echo $this->Form->input('cpf');
            echo $this->Form->input('rg');
            echo $this->Form->input('nome');
            echo $this->Form->input('endereco');
            echo $this->Form->input('dt_nasc');
            echo $this->Form->input('email');
            echo $this->Form->input('telefone1');
            echo $this->Form->input('telefone2');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
