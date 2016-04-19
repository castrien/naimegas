<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 13/04/2016
 * Time: 22:18
 */

namespace App\Controller;


use App\Model\Table\SchedulesTable;

class SchedulesController extends AppController
{
    public function isAuthorized($user){
        if ($this->request->action === 'add'){
            return true;
        }
        return parent::isAuthorized($user);
    }

    public function agendar($id){
        if($this->request->is(['post'])) {
            if($schedule = SchedulesTable::agendar($this->request->data)){
                $this->Flash->success(__('Horário Agendado'));
                return $this->redirect(['controller' => 'markings','action' => 'att',$id,$schedule->id]);
            }
        }

       // $this->set('schedule',$schedule);
    }


    public function display(){
    /*    $this->paginate = [
            'conditions' => [
                'Clients.nome LIKE ' => '%'.$nome.'%',
            ]
        ]; */

        $this->set('schedules', $this->paginate($this->Schedules));
    }

    public function aux(){
        $this->loadModel('Markings');

    }
}