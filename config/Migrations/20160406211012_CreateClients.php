<?php
use Migrations\AbstractMigration;

class CreateClients extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('clients');
        $table->addColumn('cpf','string', ['null' => false, 'limit' => 11,'type' => 'unique'])
            ->addColumn('rg','string', ['null' => false,'limit' => 10,'type' => 'unique'])
            ->addColumn('nome','string', ['null' => false,'type' => 'unique'])
            ->addColumn('endereco','string', ['null' => false,])
            ->addColumn('dt_nasc','date', ['null' => false,])
            ->addColumn('email','string', ['null' => true,'type' => 'unique'])
            ->addColumn('telefone1','string', ['null' => false,'limit' => 9,])
            ->addColumn('telefone2','string', ['null' => true,'limit' => 9,])
            ->addColumn('created','datetime',[ 'null' => false,])
            ->addColumn('modified','datetime', ['null' => false,])
            ->create();


    }
}
