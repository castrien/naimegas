<?php

use Phinx\Migration\AbstractMigration;

class CreateSchedules extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('schedules');
        $table->addColumn('horario','datetime',['null' => false])
            ->addColumn('servico','string',['null' => false])
            ->create();
    }
}
