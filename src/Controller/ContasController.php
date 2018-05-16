<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contas Controller
 *
 * @property \App\Model\Table\ContasTable $Contas
 *
 * @method \App\Model\Entity\Conta[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $contas = $this->paginate($this->Contas);

        $contasJson = json_encode($contas);
        $this->response->type('json');
        $this->response->body($contasJson);
        return $this->response;
    }

    /**
     * View method
     *
     * @param string|null $id Conta id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conta = $this->Contas->get($id, [
            'contain' => []
        ]);

        $this->set('conta', $conta);
    }


    public function add()
    {        
        $conta = $this->Contas->newEntity();
        $conta = $this->Contas->patchEntity($conta, $this->request->getData());
        if($this->Contas->save($conta)){
            $response['status']='200';
            $response['message']='OK: A conta foi salva' ;
            $response['conta']= $conta;
            $responseJson = json_encode($response);
            $this->response->type('json');
            $this->response->body($responseJson);
            return $this->response;
        }
        $response['status']='400';
        $response['message']='Bad Rquest: A conta não foi salva, formato e/ou dados inválidos.' ;
         $response['conta']= $conta;
        $responseJson = json_encode($response);
        $this->response->type('json');
        $this->response->body($responseJson);
        return $this->response;
    }

    // use o postman com o método post /contas/deposito.json
    public function deposito()
    {   
        $deposito = $this->request->getData();
        
        $conta = $this->Contas->get($deposito['idConta']);
        $conta['saldo'] += $deposito['valorDeposito'];
        if($this->Contas->save($conta)){
            $response['status']='200';
            $response['message']='OK: o deposito foi realizado!' ;
            $response['conta']= $conta;
            $responseJson = json_encode($response);
            $this->response->type('json');
            $this->response->body($responseJson);
            return $this->response;
        }
        $response['status']='400';
        $response['message']='Bad Rquest: O deposito nao foi realizado, formato e/ou dados inválidos.' ;
        $response['conta']= $conta;
        $responseJson = json_encode($response);
        $this->response->type('json');
        $this->response->body($responseJson);
        return $this->response;
    }

    /**
     * Edit method
     *
     * @param string|null $id Conta id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conta = $this->Contas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conta = $this->Contas->patchEntity($conta, $this->request->getData());
            if ($this->Contas->save($conta)) {
                $this->Flash->success(__('The conta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conta could not be saved. Please, try again.'));
        }
        $this->set(compact('conta'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Conta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conta = $this->Contas->get($id);
        if ($this->Contas->delete($conta)) {
            $this->Flash->success(__('The conta has been deleted.'));
        } else {
            $this->Flash->error(__('The conta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
