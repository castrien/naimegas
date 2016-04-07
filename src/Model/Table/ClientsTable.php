<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 06/04/2016
 * Time: 19:49
 */

namespace App\Model\Table;
use Cake\Database\Query;
use Cake\ORM\Table;


class ClientsTable extends Table
{
    public function initialize(array $config){
        $this->addBehavior('Timestamp');
    }

    public function findClient(Query $query, array $options){
        $fields = [
            'Clients.nome',
            'Clients.cpf',
        ];
        return $this->find()
            ->distinct($fields)
            ->matching(['Tags', function ($q) use ($options){
            return $q->where(['Tags.nome IN' => $options['tags']]);
        });
    }
}