<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * TicketstatusesTickettypes Controller
 *
 * @property \App\Model\Table\TicketstatusesTickettypesTable $TicketstatusesTickettypes *
 * @method \App\Model\Entity\TicketstatusesTickettype[] paginate($object = null, array $settings = [])
 */
class TicketstatusesTickettypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TicketStatuses', 'Tickettypes']
        ];
        $ticketstatusesTickettypes = $this->paginate($this->TicketstatusesTickettypes);

        $this->set(compact('ticketstatusesTickettypes'));
        $this->set('_serialize', ['ticketstatusesTickettypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticketstatuses Tickettype id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketstatusesTickettype = $this->TicketstatusesTickettypes->get($id, [
            'contain' => ['TicketStatuses', 'Tickettypes']
        ]);

        $this->set('ticketstatusesTickettype', $ticketstatusesTickettype);
        $this->set('_serialize', ['ticketstatusesTickettype']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketstatusesTickettype = $this->TicketstatusesTickettypes->newEntity();
        if ($this->request->is('post')) {
            $ticketstatusesTickettype = $this->TicketstatusesTickettypes->patchEntity($ticketstatusesTickettype, $this->request->getData());
            if ($this->TicketstatusesTickettypes->save($ticketstatusesTickettype)) {
                $this->Flash->success(__('The ticketstatuses tickettype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticketstatuses tickettype could not be saved. Please, try again.'));
        }
        $ticketStatuses = $this->TicketstatusesTickettypes->TicketStatuses->find('list', ['limit' => 200]);
        $tickettypes = $this->TicketstatusesTickettypes->Tickettypes->find('list', ['limit' => 200]);
        $this->set(compact('ticketstatusesTickettype', 'ticketStatuses', 'tickettypes'));
        $this->set('_serialize', ['ticketstatusesTickettype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticketstatuses Tickettype id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketstatusesTickettype = $this->TicketstatusesTickettypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketstatusesTickettype = $this->TicketstatusesTickettypes->patchEntity($ticketstatusesTickettype, $this->request->getData());
            if ($this->TicketstatusesTickettypes->save($ticketstatusesTickettype)) {
                $this->Flash->success(__('The ticketstatuses tickettype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticketstatuses tickettype could not be saved. Please, try again.'));
        }
        $ticketStatuses = $this->TicketstatusesTickettypes->TicketStatuses->find('list', ['limit' => 200]);
        $tickettypes = $this->TicketstatusesTickettypes->Tickettypes->find('list', ['limit' => 200]);
        $this->set(compact('ticketstatusesTickettype', 'ticketStatuses', 'tickettypes'));
        $this->set('_serialize', ['ticketstatusesTickettype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticketstatuses Tickettype id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketstatusesTickettype = $this->TicketstatusesTickettypes->get($id);
        if ($this->TicketstatusesTickettypes->delete($ticketstatusesTickettype)) {
            $this->Flash->success(__('The ticketstatuses tickettype has been deleted.'));
        } else {
            $this->Flash->error(__('The ticketstatuses tickettype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('administration');
    }
}

