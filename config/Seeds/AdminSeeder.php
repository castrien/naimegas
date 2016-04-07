<?php

/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 06/04/2016
 * Time: 19:00
 */
class AdminSeeder extends \Phinx\Seed\AbstractSeed
{
    public function run()
    {
        $value = 'claudio190340';
        $hasher = new DefaultPasswordHasher();
        $value = $hasher->hash($value);

        $data = array(
            array(
                'username' => 'claudio3333',
                'password' => $value,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            )
        );

        $users = $this->table('users');
        $users->insert($data)
            ->save();
    }
}