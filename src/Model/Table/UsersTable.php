<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 05/04/2016
 * Time: 21:56
 */

namespace App\Model\Table;


use Cake\ORM\Table;

class UsersTable extends Table
{
    public function initialize(array $config){
        $this->addBehavior('Timestamp');
    }
}