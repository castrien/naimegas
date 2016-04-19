<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 13/04/2016
 * Time: 22:11
 */

namespace App\Model\Table;


use Cake\ORM\Table;

class SchedulesTable extends Table
{
    public function initialize(array $config){
        $this->addBehavior('Timestamp');
    }

    public function agendar($data){
        $schedule = $this->Schedules->newEntity();
        $schedule = $this->Schedules->patchEntity($schedule, $data);
        if($this->Schedules->save($schedule)){
            return $schedule;
        }
    }

}