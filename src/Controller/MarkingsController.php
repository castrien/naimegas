<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 13/04/2016
 * Time: 23:08
 */

namespace App\Controller;


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
        $marking = $this->Markings->newEntity(['client_id' => $idc, 'schedule_id' => $ids]);
        $this->Markings->save($marking);
        return $this->redirect(['controller' => 'schedules', 'action' => 'agendar',$idc]);
    }
}