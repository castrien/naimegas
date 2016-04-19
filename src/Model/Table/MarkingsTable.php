<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 13/04/2016
 * Time: 22:14
 */

namespace App\Model\Table;


use Cake\ORM\Table;

class MarkingsTable extends Table
{
    public function initialize(array $config){
        $this->addBehavior('Timestamp');
    }

    public function att($idc, $ids){
        $marking = $this->Markings->newEntity(['client_id' => $idc, 'schedule_id' => $ids]);
        if ($this->Markings->save($marking)){
            return true;
        }
        else
            return false;

    }
}