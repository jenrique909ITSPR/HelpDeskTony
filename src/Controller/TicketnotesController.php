<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Ticketnotes Controller
 *
 * @property \App\Model\Table\TicketnotesTable $Ticketnotes *
 * @method \App\Model\Entity\Ticketnote[] paginate($object = null, array $settings = [])
 */
class TicketnotesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tickets', 'Users', 'Ticketnotestypes']
        ];
        $ticketnotes = $this->paginate($this->Ticketnotes);

        $this->set(compact('ticketnotes'));
        $this->set('_serialize', ['ticketnotes']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticketnote id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketnote = $this->Ticketnotes->get($id, [
            'contain' => ['Tickets', 'Users', 'Ticketnotestypes']
        ]);

        $this->set('ticketnote', $ticketnote);
        $this->set('_serialize', ['ticketnote']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($ticket_id = null)
    {
        $ticketnote = $this->Ticketnotes->newEntity();
        if ($this->request->is('post')) {
            $ticketnote->user_id = $this->request->session()->read('Auth.User.id');
            $ticketnote->ticket_id = $ticket_id;
            $ticketnote = $this->Ticketnotes->patchEntity($ticketnote, $this->request->getData());
            if ($this->Ticketnotes->save($ticketnote)) {
                $this->Flash->success(__('The ticketnote has been saved.'));

                return $this->redirect(['controller' => 'Tickets' ,'action' => 'view' , $ticket_id]);
            }
            $this->Flash->error(__('The ticketnote could not be saved. Please, try again.'));
        }
        $tickets = $this->Ticketnotes->Tickets->find('list', ['limit' => 200]);
        $users = $this->Ticketnotes->Users->find('list', ['limit' => 200]);
        $ticketnotestypes = $this->Ticketnotes->Ticketnotestypes->find('list', ['limit' => 200]);
        $this->set(compact('ticketnote', 'tickets', 'users', 'ticketnotestypes'));
        $this->set('_serialize', ['ticketnote']);
    }

    public function addpublic($ticket_id = null,$note_id = null)
    {
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['user_id'] = $this->request->session()->read('Auth.User.id');
            $data['ticket_id'] = $ticket_id;
            $data['ticketnotestype_id'] = 1;
            $data['anwser'] = 0;
            $data2['anwser'] = 0;
            $ticketnote = $this->Ticketnotes->newEntities([$data,$data2]);
            $ticketnote[1]->id = $note_id;
            
            if ($this->Ticketnotes->saveMany($ticketnote)) {
                $this->Flash->success(__('The ticketnote has been saved.'));

                return $this->redirect(['controller' => 'Tickets' ,'action' => 'enduserview' , $ticket_id]);
            }
            $this->Flash->error(__('The ticketnote could not be saved. Please, try again.'));
        }

        $this->set('_serialize', ['ticketnote']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticketnote id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketnote = $this->Ticketnotes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketnote = $this->Ticketnotes->patchEntity($ticketnote, $this->request->getData());
            if ($this->Ticketnotes->save($ticketnote)) {
                $this->Flash->success(__('The ticketnote has been saved.'));

                return $this->redirect(['controller' => 'Tickets', 'action' => 'view', $id]);
            }
            $this->Flash->error(__('The ticketnote could not be saved. Please, try again.'));
        }
        $tickets = $this->Ticketnotes->Tickets->find('list', ['limit' => 200]);
        $users = $this->Ticketnotes->Users->find('list', ['limit' => 200]);
        $ticketnotestypes = $this->Ticketnotes->Ticketnotestypes->find('list', ['limit' => 200]);
        $this->set(compact('ticketnote', 'tickets', 'users', 'ticketnotestypes'));
        $this->set('_serialize', ['ticketnote']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticketnote id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketnote = $this->Ticketnotes->get($id);
        if ($this->Ticketnotes->delete($ticketnote)) {
            $this->Flash->success(__('The ticketnote has been deleted.'));
        } else {
            $this->Flash->error(__('The ticketnote could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

 public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('administration');
    }
}
