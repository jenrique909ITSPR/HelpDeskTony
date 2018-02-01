<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Insureds Controller
 *
 *
 * @method \App\Model\Entity\Insured[] paginate($object = null, array $settings = [])
 */
class InsuredsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $insureds = $this->paginate($this->Insureds);

        $this->set(compact('insureds'));
        $this->set('_serialize', ['insureds']);
    }

    /**
     * View method
     *
     * @param string|null $id Insured id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $insured = $this->Insureds->get($id, [
            'contain' => []
        ]);

        $this->set('insured', $insured);
        $this->set('_serialize', ['insured']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $insured = $this->Insureds->newEntity();
        if ($this->request->is('post')) {
            $insured = $this->Insureds->patchEntity($insured, $this->request->getData());
            if ($this->Insureds->save($insured)) {
                $this->Flash->success(__('The insured has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The insured could not be saved. Please, try again.'));
        }
        $this->set(compact('insured'));
        $this->set('_serialize', ['insured']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Insured id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $insured = $this->Insureds->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $insured = $this->Insureds->patchEntity($insured, $this->request->getData());
            if ($this->Insureds->save($insured)) {
                $this->Flash->success(__('The insured has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The insured could not be saved. Please, try again.'));
        }
        $this->set(compact('insured'));
        $this->set('_serialize', ['insured']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Insured id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $insured = $this->Insureds->get($id);
        if ($this->Insureds->delete($insured)) {
            $this->Flash->success(__('The insured has been deleted.'));
        } else {
            $this->Flash->error(__('The insured could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
