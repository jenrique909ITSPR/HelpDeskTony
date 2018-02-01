<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VValesCompraTI Controller
 *
 *
 * @method \App\Model\Entity\VValesCompraTI[] paginate($object = null, array $settings = [])
 */
class VValesCompraTIController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $vValesCompraTI = $this->paginate($this->VValesCompraTI);

        $this->set(compact('vValesCompraTI'));
        $this->set('_serialize', ['vValesCompraTI']);
    }

    /**
     * View method
     *
     * @param string|null $id V Vales Compra T I id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vValesCompraTI = $this->VValesCompraTI->get($id, [
            'contain' => []
        ]);

        $this->set('vValesCompraTI', $vValesCompraTI);
        $this->set('_serialize', ['vValesCompraTI']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vValesCompraTI = $this->VValesCompraTI->newEntity();
        if ($this->request->is('post')) {
            $vValesCompraTI = $this->VValesCompraTI->patchEntity($vValesCompraTI, $this->request->getData());
            if ($this->VValesCompraTI->save($vValesCompraTI)) {
                $this->Flash->success(__('The v vales compra t i has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The v vales compra t i could not be saved. Please, try again.'));
        }
        $this->set(compact('vValesCompraTI'));
        $this->set('_serialize', ['vValesCompraTI']);
    }

    /**
     * Edit method
     *
     * @param string|null $id V Vales Compra T I id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vValesCompraTI = $this->VValesCompraTI->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vValesCompraTI = $this->VValesCompraTI->patchEntity($vValesCompraTI, $this->request->getData());
            if ($this->VValesCompraTI->save($vValesCompraTI)) {
                $this->Flash->success(__('The v vales compra t i has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The v vales compra t i could not be saved. Please, try again.'));
        }
        $this->set(compact('vValesCompraTI'));
        $this->set('_serialize', ['vValesCompraTI']);
    }

    /**
     * Delete method
     *
     * @param string|null $id V Vales Compra T I id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vValesCompraTI = $this->VValesCompraTI->get($id);
        if ($this->VValesCompraTI->delete($vValesCompraTI)) {
            $this->Flash->success(__('The v vales compra t i has been deleted.'));
        } else {
            $this->Flash->error(__('The v vales compra t i could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
