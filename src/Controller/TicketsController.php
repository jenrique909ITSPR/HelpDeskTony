<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Dompdf\Adapter\CPDF;
use Dompdf\Dompdf;
use Dompdf\Exception;
use Cake\Core\Configure;
use Dompdf\Options;

/**
 * Tickets Controller
 *
 * @property \App\Model\Table\TicketsTable $Tickets
 *
 * @method \App\Model\Entity\Ticket[] paginate($object = null, array $settings = [])
 */

class TicketsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

     public function favorite($id = null){
       $ticket = $this->Tickets->get($id, [
           'contain' => []
       ]);
       $Ticketfavourites = TableRegistry::get('Ticketmarkeds');
       $ticketfavs =  $Ticketfavourites->newEntity();



       $ticketfavs->ticket_id= $ticket->id;
       $ticketfavs->user_id= $this->request->session()->read('Auth.User.id');

       if ($Ticketfavourites->save($ticketfavs)) {
        // The $article entity contains the id now
        $id = $ticketfavs->id;
      }
      return $this->redirect(['controller' => 'Ticketmarkeds', 'action' => 'index']);

     }

    public function index($id = null)
    {
        if (is_null($id)){
           $query = $this->Tickets->find('all')->where(['user_id' => $this->request->session()->read('Auth.User.id') ])
             ->contain(['Tickettypes', 'TicketStatuses', 'Sources', 'Itemcodes', 'Users', 'Groups', 'Ticketimpacts', 'Ticketurgencies', 'Ticketpriorities', 'Hdcategories'])
             ;

             $this->set('tickets', $this->paginate($query));


        }else{
            $query = $this->Tickets->find('all')->where(['tickettype_id' => $id , 'user_id' => $this->request->session()->read('Auth.User.id') ])
             ->contain(['Tickettypes', 'TicketStatuses', 'Sources', 'Itemcodes', 'Users', 'Groups', 'Ticketimpacts', 'Ticketurgencies', 'Ticketpriorities', 'Hdcategories'])
             ;
            $this->set('tickets', $this->paginate($query));

        }
        $this->set(compact('tickets'));
        $this->set('_serialize', ['tickets']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */



    public function view($id = null)
    {
        if ($this->request->is("get")){
             $idTicket = $this->request->query('searchticket');

            if (is_null($id)){
                $id = $idTicket;
            }
            if(is_null($idTicket) && is_null($id)){

                $this->Flash->error(__('El ticket ingresado no existe'));
                return $this->redirect(['action' => 'index']);
            }
            $ticketSearch = $this->Tickets->findById($id)->first();
            if (empty($ticketSearch)) {
                $this->Flash->error(__('El ticket ingresado no existe'));
                return $this->redirect(['action' => 'index']);
            }

             $ticket = $this->Tickets->get($id, [
            'contain' => ['Tickettypes', 'TicketStatuses', 'Sources', 'Itemcodes', 'Users', 'Groups', 'Ticketimpacts', 'Ticketurgencies', 'Ticketpriorities', 'Hdcategories', 'Internalnotes', 'Publicnotes', 'Ticketlogs', 'Ticketsfiles','ParentTickets','ChildTickets']
            ]);
        }
        $this->dataOptions();
        $this->set('ticket', $ticket);
        $this->set('_serialize', ['ticket']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticket = $this->Tickets->newEntity();
        if ($this->request->is('post')) {
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success(__('Ticket creado correctamente'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket could not be saved. Please, try again.'));
        }
        $this->set('ticket', $ticket);
        $this->dataOptions();
        $this->set('_serialize', ['ticket']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticket = $this->Tickets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success(__('Datos del ticket actualizados '));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error al actualizar datos'));
        }
        $this->set('ticket', $ticket);
        $this->dataOptions();
        $this->set('_serialize', ['ticket']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticket = $this->Tickets->get($id);
        if ($this->Tickets->delete($ticket)) {
            $this->Flash->success(__('El ticket ha sido borrado'));
        } else {
            $this->Flash->error(__('The ticket could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function clonar($id=null)
    {
        $ticket = $this->Tickets->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticket = $this->Tickets->newEntity();
            $dataTicket = $this->request->getData();

            $ticket = $this->Tickets->patchEntity($ticket, $dataTicket);
            $ticket->parent_id = $id;
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success(__('El ticket ha sido clonado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se puede clonar :('));
        }
        $this->set('ticket', $ticket);
        $this->dataOptions();
        $this->set('_serialize', ['ticket']);


    }



    public function changueStateTicket($id=null)
    {
         $ticket = $this->Tickets->get($id, [
            'contain' => []
        ]);
        $ticketlogsTable = TableRegistry::get('Ticketlogs');
        $ticketlog = $ticketlogsTable->newEntity();
        $ticketlog->ticket_id  = $id;
        $ticketlog->user_id = $ticket->user_id;
        $ticketlog->group_id = $ticket->group_id;
        $ticketlog->user_transfer = $ticket->user_id;
        $ticketlog->group_transfer = $ticket->group_id;
        $ticketlog->new_status = $ticket->ticket_status_id;


         if ($this->request->is('get')){
            if ($ticket->tickettype_id == 4) {
                $ticket->tickettype_id = 1;
                $ticketlog->coments = 'CAMBIO A INCIDENTE';
            }else{
                $ticket->tickettype_id = 4;
                $ticketlog->coments = 'CAMBIO A SOLICITUD';
            }
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
            if ($this->Tickets->save($ticket)) {
                if ($ticketlogsTable->save($ticketlog)) {
                    $this->Flash->success(__('EL TICKET '.$ticketlog->coments));
                    return $this->redirect(['action' => 'view' , $id]);
                }

            }
            $this->Flash->error(__('Error al cambiar de estado :('));



         }

    }

      public function print($filename=null)
    {
        $this->viewBuilder()
            ->className('Dompdf.Pdf')
            ->layout('Dompdf.default')
            ->options(['config' => [
                'filename' => $filename,
                'render' => 'browser',
            ]]);
    }
    public function dataOptions()
    {
      $tickettypes = $this->Tickets->Tickettypes->find('list', ['limit' => 200]);
      $ticketStatuses = $this->Tickets->TicketStatuses->find('list', ['limit' => 200]);
      $sources = $this->Tickets->Sources->find('list', ['limit' => 200]);
      $itemcodes = $this->Tickets->Itemcodes->find('list', ['limit' => 200]);
      $users = $this->Tickets->Users->find('list', ['limit' => 200]);
      $groups = $this->Tickets->Groups->find('list', ['limit' => 200]);
      $parentTickets = $this->Tickets->ParentTickets->find('list', ['limit' => 200]);
      $ticketimpacts = $this->Tickets->Ticketimpacts->find('list', ['limit' => 200]);
      $ticketurgencies = $this->Tickets->Ticketurgencies->find('list', ['limit' => 200]);
      $ticketpriorities = $this->Tickets->Ticketpriorities->find('list', ['limit' => 200]);
      $hdcategories = $this->Tickets->Hdcategories->find('list', ['limit' => 200]);
      $this->set(compact('ticket', 'tickettypes', 'ticketStatuses', 'sources', 'itemcodes', 'users', 'groups', 'ticketimpacts', 'ticketurgencies', 'ticketpriorities', 'hdcategories','parentTickets'));
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('tickets');
    }

    public function exportcsv($id=null){

		$this->response->download('export.csv');
		$data = $this->Tickets->find('all')->toArray();
		$_serialize = 'data';
   		$this->set(compact('data', '_serialize'));
		$this->viewBuilder()->className('CsvView.Csv');
		return;
 }

}
