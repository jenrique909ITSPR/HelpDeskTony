<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Ticketnotestypes Controller
 *
 * @property \App\Model\Table\TicketnotestypesTable $Ticketnotestypes *
 * @method \App\Model\Entity\Ticketnotestype[] paginate($object = null, array $settings = [])
 */
class TicketnotestypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ticketnotestypes = $this->paginate($this->Ticketnotestypes);

        $this->set(compact('ticketnotestypes'));
        $this->set('_serialize', ['ticketnotestypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticketnotestype id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketnotestype = $this->Ticketnotestypes->get($id, [
            'contain' => ['Ticketnotes']
        ]);

        $this->set('ticketnotestype', $ticketnotestype);
        $this->set('_serialize', ['ticketnotestype']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketnotestype = $this->Ticketnotestypes->newEntity();
        $ticketnotestype->user_id = $this->request->session()->read('Auth.User.id');
        if ($this->request->is('post')) {
            $ticketnotestype = $this->Ticketnotestypes->patchEntity($ticketnotestype, $this->request->getData());
            if ($this->Ticketnotestypes->save($ticketnotestype)) {
                $this->Flash->success(__('The ticketnotestype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticketnotestype could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketnotestype'));
        $this->set('_serialize', ['ticketnotestype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticketnotestype id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketnotestype = $this->Ticketnotestypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketnotestype = $this->Ticketnotestypes->patchEntity($ticketnotestype, $this->request->getData());
            if ($this->Ticketnotestypes->save($ticketnotestype)) {
                $this->Flash->success(__('The ticketnotestype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticketnotestype could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketnotestype'));
        $this->set('_serialize', ['ticketnotestype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticketnotestype id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketnotestype = $this->Ticketnotestypes->get($id);
        if ($this->Ticketnotestypes->delete($ticketnotestype)) {
            $this->Flash->success(__('The ticketnotestype has been deleted.'));
        } else {
            $this->Flash->error(__('The ticketnotestype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

     public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('administration');
    }
}
