<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Ticketmarkeds Controller
 *
 * @property \App\Model\Table\TicketmarkedsTable $Ticketmarkeds *
 * @method \App\Model\Entity\Ticketmarked[] paginate($object = null, array $settings = [])
 */
class TicketmarkedsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $query = $this->Ticketmarkeds->find('all')
        ->where(['Ticketmarkeds.user_id' => $this->request->session()->read('Auth.User.id') ])
        ->contain(['Users' , 'Tickets']);
        $ticketmarkeds = $this->paginate($query);
        $this->set(compact('ticketmarkeds'));
        $this->set('_serialize', ['ticketmarkeds']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticketmarked id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketmarked = $this->Ticketmarkeds->get($id, [
            'contain' => ['Users', 'Tickets']
        ]);

        $this->set('ticketmarked', $ticketmarked);
        $this->set('_serialize', ['ticketmarked']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketmarked = $this->Ticketmarkeds->newEntity();
        if ($this->request->is('post')) {
            $ticketmarked = $this->Ticketmarkeds->patchEntity($ticketmarked, $this->request->getData());
            if ($this->Ticketmarkeds->save($ticketmarked)) {
                $this->Flash->success(__('The ticketmarked has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticketmarked could not be saved. Please, try again.'));
        }
        $users = $this->Ticketmarkeds->Users->find('list', ['limit' => 200]);
        $tickets = $this->Ticketmarkeds->Tickets->find('list', ['limit' => 200]);
        $this->set(compact('ticketmarked', 'users', 'tickets'));
        $this->set('_serialize', ['ticketmarked']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticketmarked id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketmarked = $this->Ticketmarkeds->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketmarked = $this->Ticketmarkeds->patchEntity($ticketmarked, $this->request->getData());
            if ($this->Ticketmarkeds->save($ticketmarked)) {
                $this->Flash->success(__('The ticketmarked has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticketmarked could not be saved. Please, try again.'));
        }
        $users = $this->Ticketmarkeds->Users->find('list', ['limit' => 200]);
        $tickets = $this->Ticketmarkeds->Tickets->find('list', ['limit' => 200]);
        $this->set(compact('ticketmarked', 'users', 'tickets'));
        $this->set('_serialize', ['ticketmarked']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticketmarked id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketmarked = $this->Ticketmarkeds->get($id);
        if ($this->Ticketmarkeds->delete($ticketmarked)) {
            $this->Flash->success(__('The ticketmarked has been deleted.'));
        } else {
            $this->Flash->error(__('The ticketmarked could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

 public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('administration');
    }
}
