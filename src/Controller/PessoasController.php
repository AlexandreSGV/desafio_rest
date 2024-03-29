<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pessoas Controller
 *
 * @property \App\Model\Table\PessoasTable $Pessoas
 *
 * @method \App\Model\Entity\Pessoa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PessoasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pessoas = $this->paginate($this->Pessoas);

        $pessoasJson = json_encode($pessoas);
        $this->response->type('json');
        $this->response->body($pessoasJson);
        return $this->response;
    }

    /**
     * View method
     *
     * @param string|null $id Pessoa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pessoa = $this->Pessoas->get($id, [
            'contain' => []
        ]);
        $pessoaJson = json_encode($pessoa);
        $this->response->type('json');
        $this->response->body($pessoaJson);
        return $this->response;
    }

    /**
     * metodo funciona ape
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {        
        $pessoa = $this->Pessoas->newEntity();
        $pessoa = $this->Pessoas->patchEntity($pessoa, $this->request->getData());
        if($this->Pessoas->save($pessoa)){
            $response['status']='200';
            $response['message']='OK: A pessoa foi salva' ;
            $response['pessoa']= $pessoa;
            $responseJson = json_encode($response);
            $this->response->type('json');
            $this->response->body($responseJson);
            return $this->response;
        }
        $response['status']='400';
        $response['message']='Bad Rquest: A pessoa não foi salva, formato e/ou dados inválidos.' ;
        $responseJson = json_encode($response);
        $this->response->type('json');
        $this->response->body($responseJson);
        return $this->response;
    }

    /**
     * Edit method
     *
     * @param string|null $id Pessoa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pessoa = $this->Pessoas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pessoa = $this->Pessoas->patchEntity($pessoa, $this->request->getData());
            if ($this->Pessoas->save($pessoa)) {
                $this->Flash->success(__('The pessoa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pessoa could not be saved. Please, try again.'));
        }
        $this->set(compact('pessoa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pessoa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pessoa = $this->Pessoas->get($id);
        if ($this->Pessoas->delete($pessoa)) {
            $this->Flash->success(__('The pessoa has been deleted.'));
        } else {
            $this->Flash->error(__('The pessoa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
