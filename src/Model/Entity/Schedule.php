<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 13/04/2016
 * Time: 22:06
 */

namespace App\Model\Entity;


use Cake\ORM\Entity;

class Schedule extends Entity
{
    protected $_accessible = [
        'horario' => true,
        'servico' => true,
];
}