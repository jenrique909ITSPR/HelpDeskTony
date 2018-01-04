<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Positiontypes Controller
 *
 * @property \App\Model\Table\PositiontypesTable $Positiontypes *
 * @method \App\Model\Entity\Positiontype[] paginate($object = null, array $settings = [])
 */
class PositiontypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $positiontypes = $this->paginate($this->Positiontypes);

        $this->set(compact('positiontypes'));
        $this->set('_serialize', ['positiontypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Positiontype id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $positiontype = $this->Positiontypes->get($id, [
            'contain' => ['Positiontypebranches']
        ]);

        $this->set('positiontype', $positiontype);
        $this->set('_serialize', ['positiontype']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $positiontype = $this->Positiontypes->newEntity();
        if ($this->request->is('post')) {
            $positiontype = $this->Positiontypes->patchEntity($positiontype, $this->request->getData());
            if ($this->Positiontypes->save($positiontype)) {
                $this->Flash->success(__('The positiontype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The positiontype could not be saved. Please, try again.'));
        }
        $this->set(compact('positiontype'));
        $this->set('_serialize', ['positiontype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Positiontype id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $positiontype = $this->Positiontypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $positiontype = $this->Positiontypes->patchEntity($positiontype, $this->request->getData());
            if ($this->Positiontypes->save($positiontype)) {
                $this->Flash->success(__('The positiontype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The positiontype could not be saved. Please, try again.'));
        }
        $this->set(compact('positiontype'));
        $this->set('_serialize', ['positiontype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Positiontype id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $positiontype = $this->Positiontypes->get($id);
        if ($this->Positiontypes->delete($positiontype)) {
            $this->Flash->success(__('The positiontype has been deleted.'));
        } else {
            $this->Flash->error(__('The positiontype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('administration');
    }
}
