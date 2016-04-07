<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 06/04/2016
 * Time: 19:49
 */

namespace App\Model\Entity;


use Cake\ORM\Entity;

class Client extends Entity
{
    protected $_accessible = [
            'cpf' => true,
            'rg' => true,
            'nome' => true,
            'endereco' => true,
            'dt_nasc' => true,
            'email' => true,
            'telefone1' => true,
            'telefone2' => true
    ];
}