<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 06/04/2016
 * Time: 19:41
 */

namespace App\Controller;


use App\Model\Table\ClientsTable;

class ClientsController extends AppController
{
    public function isAuthorized($user){
        if ($this->request->action === 'add'){
            return true;
        }
        return parent::isAuthorized($user);
    }

    public function show($nome){
        debug($nome);
        $this->paginate = [
            'conditions' => [
                'Clients.nome LIKE ' => $nome,
            ]
        ];

        $this->set('clients', $this->paginate($this->Clients));
    }

    public function index(){

    }

    public function view($id = null){
        $clients = $this->Clients->get($id);
        $this->set('client',$clients);
    }

    public function query(){
        if ($this->request->is(['post','put'])) {

            return $this->redirect(['action' => 'show', $this->request->data(['nome'])]);
        }

    }


    public function edit($id= null){
        $client = $this->Clients->get($id);
        if($this->request->is(['post','put'])){
            $this->Clients->patchEntity($client, $this->request->data);
            if ($this->Clients->save($client)){
                $this->Flash->success(__('Cadastro de cliente atualizado!'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Cliente não pôde ser atualizado'));
        }
        $this->set('client',$client);
    }

    public function add(){
        $client = $this->Clients->newEntity();
        if ($this->request->is('post')){
            $client = $this->Clients->patchEntity($client, $this->request->data);
            if ($this->Clients->save($client)){
                $this->Flash->success(__('Cliente Cadastro com Sucesso!'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possivel incluir o cliente!'));
        }
        $this->set('client',$client);

    }

    public function logout(){
        $this->Flash->success('Voce se desconectou"');
        return $this->redirect($this->Auth->logout());
    }
}