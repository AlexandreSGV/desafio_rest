<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Transacoes Controller
 *
 * @property \App\Model\Table\TransacoesTable $Transacoes
 *
 * @method \App\Model\Entity\Transaco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TransacoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $transacoes = $this->paginate($this->Transacoes);

        $this->set(compact('transacoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Transaco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transaco = $this->Transacoes->get($id, [
            'contain' => []
        ]);

        $this->set('transaco', $transaco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transaco = $this->Transacoes->newEntity();
        if ($this->request->is('post')) {
            $transaco = $this->Transacoes->patchEntity($transaco, $this->request->getData());
            if ($this->Transacoes->save($transaco)) {
                $this->Flash->success(__('The transaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transaco could not be saved. Please, try again.'));
        }
        $this->set(compact('transaco'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Transaco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transaco = $this->Transacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transaco = $this->Transacoes->patchEntity($transaco, $this->request->getData());
            if ($this->Transacoes->save($transaco)) {
                $this->Flash->success(__('The transaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transaco could not be saved. Please, try again.'));
        }
        $this->set(compact('transaco'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Transaco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transaco = $this->Transacoes->get($id);
        if ($this->Transacoes->delete($transaco)) {
            $this->Flash->success(__('The transaco has been deleted.'));
        } else {
            $this->Flash->error(__('The transaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
