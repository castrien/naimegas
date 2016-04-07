<h1>Editando Cliente</h1>
<?php
        echo $this->Form->create($client);
        echo $this->Form->input('cpf');
        echo $this->Form->input('nome');
        echo $this->Form->button(__('Salvar'));
        echo $this->Form->end();
?>