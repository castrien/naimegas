<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 13/04/2016
 * Time: 23:08
 */

namespace App\Controller;


use App\Model\Table\MarkingsTable;

class MarkingsController extends AppController
{
    public function isAuthorized($user){
        if ($this->request->action === 'add'){
            return true;
        }
        return parent::isAuthorized($user);
    }

    public function att($idc, $ids){
        debug('id_client = '.$idc.'     id_schedule = '. $ids);
        if (MarkingsTable::att($idc, $ids)) {
            return $this->redirect(['controller' => 'schedules', 'action' => 'agendar', $idc]);
        }
        else{
            $this->Flash->error(__('Error, não foi possível atualizar a marcação'));
        }
    }

    public function displayMarking(){

    }
}