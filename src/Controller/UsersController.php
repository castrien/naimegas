<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 05/04/2016
 * Time: 18:25
 */

namespace App\Controller;


use Cake\Controller\Controller;

class UsersController extends AppController
{
    public function index(){
        $this->set('users',$this->paginate($this->Users));
    }

    public function view($id = null){
        $users = $this->Users->get($id);
        $this->set('user',$users);
    }

    public function login(){
        if ($this->request->is('post')){
            $user = $this->Auth->identify();
            if ($user){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Seu usuário ou senha estão incorretos');
        }
    }

    public function add(){
        $user = $this->Users->newEntity();
        if ($this->request->is('post')){
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)){
                $this->Flash->success(__('Cliente Cadastro com Sucesso!'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possivel incluir o cliente!'));
        }
        $this->set('user',$user);

    }

    public function logout(){
        $this->Flash->success('Voce se desconectou"');
        return $this->redirect($this->Auth->logout());
    }
}