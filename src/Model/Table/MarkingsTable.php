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
}