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

    }