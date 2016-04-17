<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 06/04/2016
 * Time: 19:49
 */

namespace App\Model\Table;

use Cake\ORM\Table;


class ClientsTable extends Table
{
    public function initialize(array $config){
        $this->addBehavior('Timestamp');
    }

    public function add($data){
        $client = $this->Clients->newEntity();
        $client = $this->Clients->patchEntity($client, $data);
        if($this->Clients->save($client)){
            return $client;
        }
    }

    public  function edit($id=null, $data){
            $client = $this->Clients->get($id);
            $this->Clients->patchEntity($client, $data);
                if ($this->Clients->save($client)){
                    return true;
                }
                else{
                    return false;
                }
    }

    public function del($id=null){
        $client = $this->Clients->get($id);
        if ($this->Clients->delete($client)){
            return true;
        }
        else{
            return false;
        }
    }

    }