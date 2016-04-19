<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Menu Principal'), ['controller' => 'Clients','action' => 'index']) ?></li>
    </ul>
</nav>
<div class="schedules form large-9 medium-8 columns content">



    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Query Client') ?></legend>
        <?php
        echo $this->Form->input('horario');
        echo $this->Form->input('servico');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

