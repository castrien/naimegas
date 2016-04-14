<?php

use Phinx\Migration\AbstractMigration;

class CreateMarkings extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('markings');
        $table->addColumn('client_id','integer')
            ->addColumn('schedule_id','integer')
            ->addForeignKey('client_id','clients','id',array('delete' => 'cascade', 'update' => 'cascade'))
            ->addForeignKey('schedule_id','schedules','id',array('delete' => 'cascade','update' => 'cascade'))
            ->create();
    }
}
