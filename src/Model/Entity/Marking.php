<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 13/04/2016
 * Time: 22:12
 */

namespace App\Model\Entity;


use Cake\ORM\Entity;

class Marking extends Entity
{
    protected $_accessible = [
        'client_id' => true,
        'schedule_id' => true,
    ];
}