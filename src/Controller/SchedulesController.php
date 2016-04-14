<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 13/04/2016
 * Time: 22:18
 */

namespace App\Controller;


class SchedulesController extends AppController
{
    public function isAuthorized($user){
        if ($this->request->action === 'add'){
            return true;
        }
        return parent::isAuthorized($user);
    }

    public function agendar($id){
        $schedule = $this->Schedules->newEntity();
        if($this->request->is(['post'])) {
            $schedule = $this->Schedules->patchEntity($schedule, $this->request->data);
            if($this->Schedules->save($schedule)){
                $this->Flash->success(__('Horário Agendado'));
                return $this->redirect(['controller' => 'markings','action' => 'att',$id,$schedule->id]);
            }
        }

        $this->set('schedule',$schedule);
    }
}