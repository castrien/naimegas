<?php

    namespace App\Model\Entity;
    use Cake\Auth\DefaultPasswordHasher;
    use Cake\ORM\Entity;

    /**
 * Created by PhpStorm.
 * User: Casa
 * Date: 05/04/2016
 * Time: 21:58
 */

    class User extends Entity{
        protected function _setPassword($value){
            $hasher = new DefaultPasswordHasher();
            return $hasher->hash($value);
        }
    }