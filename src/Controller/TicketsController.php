<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Mailer\Email;


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
     public function initialize()
    {
         parent::initialize();

        $this->loadComponent('Tickettype');
        $this->loadComponent('Messages');

    }

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

    public function index($typeView = null,$idTickettype = null)
    {

        $query = $this->Tickets->find('all')->where(['user_id' => $this->request->session()->read('Auth.User.id')])
            ->contain(['Tickettypes', 'TicketStatuses', 'Sources', 'Itemcodes', 'Users', 'Groups', 'Ticketimpacts', 'Ticketurgencies', 'Ticketpriorities', 'Hdcategories', 'Ticketnotes', 'Ticketlogs','Branches','Userrequerieds','Userautors'])
            ->order(['Tickets.created' => 'DESC']);
            $this->paginate = ['limit' => $this->limit_data ];

        if (!is_null($typeView)){
             $this->request->session()->write('typeViewTickets', $typeView);
            //Aqui se cargan el contador de tipos de tickes
            $query = $this->viewTicketsSelection($typeView,$query);
            if (!is_null($idTickettype)) {
                //cargar tipos del  filtrados
                $query->where(['Tickets.tickettype_id' => $idTickettype ]);
            }
        }else{
            $this->request->session()->write('typeViewTickets', 'default');
        }

        $this->set('tickets', $this->paginate($query));
        $this->set(compact('tickets'));
        $this->set('_serialize', ['tickets']);

    }


    public function viewTicketsSelection($id = null ,$query = null)
    {
        switch ($id) {

                case 'group':
                    $query->orWhere(['Tickets.group_id' => $this->request->session()->read('Auth.User.group_id')]);

                    break;
                case 'all':
                   $query2 = $this->Tickets->find('all')
                        ->contain(['Tickettypes', 'TicketStatuses', 'Sources', 'Itemcodes', 'Users', 'Groups', 'Ticketimpacts', 'Ticketurgencies', 'Ticketpriorities', 'Hdcategories', 'Ticketnotes', 'Ticketlogs','Branches','Userrequerieds','Userautors'])
                        ->order(['Tickets.created' => 'DESC']);;
                    $this->paginate = ['limit' => $this->limit_data ];

                    $query = $query2;
                break;
            }

        return $query;
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
      $itemcodeM= $this->Tickets->get($id,[
       'contain' => ['Itemcodes']
     ]);

    // echo $itemcodeM->itemcode->serial;

      $dataMove = array(
    "id" => $itemcodeM->id,
    //"itemcode" => $itemcodeM->itemcode->serial,
      );

        $this->set('dataMove',$dataMove);

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
            'contain' => ['Tickettypes', 'TicketStatuses', 'Sources', 'Itemcodes', 'Users', 'Groups', 'Ticketimpacts', 'Ticketurgencies', 'Ticketpriorities', 'Hdcategories', 'Ticketnotes' => ['Users'], 'Ticketlogs' =>['Users' , 'Groups'],'Branches','Userrequerieds','Userautors']
            ]);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticket = $this->Tickets->get($id, [
            'contain' => []
            ]);
            $itemcode = $this->Tickets->Itemcodes->findBySerial($this->request->getData('itemcode_id'))->first();
            $ticket->itemcode = $itemcode;
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success(__('Datos del ticket actualizados '));
                return $this->redirect(['action' => 'view' , $ticket->id]);
            }
            $this->Flash->error(__('Error al actualizar datos'));
        }

        $this->set('ticket', $ticket);
        $this->set('_serialize', ['ticket']);
        $ticketnotestypesTable = TableRegistry::get('Ticketnotestypes');
        $tickettypes = $this->Tickets->Tickettypes->find('list', ['limit' => 200]);

        $ticketStatuses = $this->Tickets->TicketStatuses->find('list', ['limit' => 200]);
        $sources = $this->Tickets->Sources->find('list', ['limit' => 200]);
        $itemcodes = $this->Tickets->Itemcodes->find('list', ['limit' => 200]);
        $users = $this->Tickets->Users->find('list', ['limit' => 200]);
        $groups = $this->Tickets->Groups->find('list', ['limit' => 200]);
        $ticketimpacts = $this->Tickets->Ticketimpacts->find('list', ['limit' => 200]);
        $ticketurgencies = $this->Tickets->Ticketurgencies->find('list', ['limit' => 200]);
        $ticketpriorities = $this->Tickets->Ticketpriorities->find('list', ['limit' => 200]);
        $parentTickets = $this->Tickets->ParentTickets->find('list', ['limit' => 200]);
        $hdcategories = $this->Tickets->Hdcategories->find('list');
        $branches = $this->Tickets->Branches->find('list',['limit' => 200]);
        $ticketnotestypes = $ticketnotestypesTable->find('list',['limit' => 200]);
        $dataTree = array();

        $this->set(compact('tickettypes', 'ticketnotestypes','ticketStatuses', 'sources', 'itemcodes', 'users', 'groups', 'ticketimpacts', 'ticketurgencies', 'ticketpriorities','hdcategories','parentTickets','branches'));

        /*$tickets = $this->Ticketnotes->Tickets->find('list', ['limit' => 200]);
        $users = $this->Ticketnotes->Users->find('list', ['limit' => 200]);
        $ticketnotestypes = $this->Ticketnotes->Ticketnotestypes->find('list', ['limit' => 200]);
        $this->set(compact('ticketnote', 'tickets', 'users', 'ticketnotestypes'));*/

    }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if($this->request->is('ajax')){
            echo($this->request->getData('categorySearch'));

        }else{
            $ticket = $this->Tickets->newEntity();
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());

           if ($this->request->is('post')) {

                $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
                $mail= $this->request->session()->read('System.mail.sender');
                if ($this->Tickets->save($ticket)) {

                    $this->Flash->success(__('Ticket creado correctamente'));
                    $this->_mailsender('Creado',$ticket->id, $mail,$ticket->user_requeried);
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The ticket could not be saved. Please, try again.'));
            }

        $ticket->group_id = $this->request->session()->read('Auth.User.group_id');
        $ticket->user_id = $this->request->session()->read('Auth.User.id');
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
        $hdcategories = $this->Tickets->Hdcategories->find('all');
        $ticket->ip = $this->request->clientIp();
        $branches = $this->Tickets->Branches->find('list',['limit' => 200]);

        $this->set(compact('ticket', 'tickettypes', 'ticketStatuses', 'sources', 'itemcodes', 'users', 'groups', 'ticketimpacts', 'ticketurgencies', 'ticketpriorities', 'dataTreeJson','parentTickets', 'ip','branches'));
        $this->set('_serialize', ['ticket']);
        }

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
      $itemcodeM= $this->Tickets->get($id,[
       'contain' => ['Itemcodes']
     ]);

    // echo $itemcodeM->itemcode->serial;

      $dataMove = array(
    "id" => $itemcodeM->id,
    "itemcode" => $itemcodeM->itemcode->serial,
      );

        $this->set('dataMove',$dataMove);

        $ticket = $this->Tickets->get($id, [
            'contain' => ['Tickettypes', 'TicketStatuses', 'Sources', 'Itemcodes', 'Users', 'Groups', 'Ticketimpacts', 'Ticketurgencies', 'Ticketpriorities', 'Hdcategories', 'Ticketnotes' => ['Users'], 'Ticketlogs' =>['Users' , 'Groups'],'Branches','Userrequerieds','Userautors']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datarequest = $this->request->getData();
            $datarequest['ticketlogs'] = $this->ticketLog($ticket,$datarequest);
            $itemcode = $this->Tickets->Itemcodes->find('all')->where(['serial' => $datarequest['itemcodeid']]);
            $itemcodedata = $itemcode->toArray();
            if (empty($itemcodedata)) {
                $datarequest['itemcode_id'] = null;
            }else{$datarequest['itemcode_id'] = $itemcodedata[0]->id;}

            $ticket = $this->Tickets->patchEntity($ticket, $datarequest,['associated' => ['Ticketlogs']]);

            if ($this->Tickets->save($ticket)) {

                $this->Flash->success(__('Datos del ticket actualizados '));
                return $this->redirect(['action' => 'view' , $ticket->id]);
            }
            $this->Flash->error(__('Error al actualizar datos'));
            return $this->redirect(['action' => 'view' , $ticket->id]);
        }

        $tickettypes = $this->Tickets->Tickettypes->find('list', ['limit' => 200]);
        $ticketStatuses = $this->Tickets->TicketStatuses->find('list', ['limit' => 200]);
        $sources = $this->Tickets->Sources->find('list', ['limit' => 200]);
        $itemcodes = $this->Tickets->Itemcodes->find('list', ['limit' => 200]);
        $users = $this->Tickets->Users->find('list', ['limit' => 200]);
        $groups = $this->Tickets->Groups->find('list', ['limit' => 200]);
        $ticketimpacts = $this->Tickets->Ticketimpacts->find('list', ['limit' => 200]);
        $ticketurgencies = $this->Tickets->Ticketurgencies->find('list', ['limit' => 200]);
        $ticketpriorities = $this->Tickets->Ticketpriorities->find('list', ['limit' => 200]);
        $parentTickets = $this->Tickets->ParentTickets->find('list', ['limit' => 200]);
        $hdcategories = $this->Tickets->Hdcategories->find('all');
        $branches = $this->Tickets->Branches->find('list',['limit' => 200]);
        $dataTree = array();
        foreach ($hdcategories as $key => $value) {
            array_push($dataTree, ['id' => $value->id , 'name' => $value->title , 'parentId' => $value->parent_id]);
        }
         $dataTreeJson = json_encode($dataTree);
        $this->set(compact('ticket', 'tickettypes', 'ticketStatuses', 'sources', 'itemcodes', 'users', 'groups', 'ticketimpacts', 'ticketurgencies', 'ticketpriorities', 'dataTreeJson','parentTickets','branches'));
        $this->set('_serialize', ['ticket']);
    }

    public function ticketLog($ticket=null,$dataEdit=null)
    {  $data = array();
       foreach($dataEdit as $key => $value) {
                if($value != $ticket[$key]){
                    //debug('cambio '.$key.$value.'-'.$ticket[$key]);
                   array_push($data,
                    ['ticket_id' => $ticket['id'],
                        'user_id' => $this->request->session()->read('Auth.User.id'),
                        'group_id' => $this->request->session()->read('Auth.User.group_id'),
                        'field' => $key ,
                        'valueprev' => $this->getValueRelated($key,$ticket[$key]) ,
                        'valuelater' => $this->getValueRelated($key,$value) ]);
                }

        }
        return $data;
    }

    public function getValueRelated($table=null,$value=null)
    {   $tableString=$this->getTableName($table);
        $id = 'id';
        switch ($tableString) {
            case 'Branches':
                $id = 'SUCURSAL';
                break;
            case 'default':
                return $value;
                break;
        }
        $tableE = TableRegistry::get($tableString);
        $entity = $tableE->find('list')->where([$id => $value]);
        $result = $entity->toArray();
        if (empty($result)) {
            return '';
        }
        return $result[$value];
    }
    public function getTableName($table=null){
        switch ($table) {
            case 'tickettype_id':
                return 'Tickettypes';
                break;
            case 'ticket_status_id':
                return 'TicketStatuses';
                break;
            case 'source_id':
                return 'Sources';
                break;
            case 'user_id':
                return 'Users';
                break;
            case 'group_id':
                return 'Groups';
                break;
            case 'user_autor':
                return 'Users';
                break;
            case 'user_requeried':
                return 'Users';
                break;
            case 'ticketimpact_id':
                return 'Ticketimpacts';
                break;
            case 'ticketurgency_id':
                return 'Ticketurgencies';
                break;
            case 'ticketpriority_id':
                return 'Ticketpriorities';
                break;
            case 'parent_id':
                return 'ParentTickets';
                break;
            case 'hdcategory_id':
                return 'Hdcategories';
                break;
            case 'branch_id':
                return 'Branches';
                //$id = 'SUCURSAL';
                break;
            default:
                return 'default';
        }
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
        $tickettypes = $this->Tickets->Tickettypes->find('list', ['limit' => 200]);
        $ticketStatuses = $this->Tickets->TicketStatuses->find('list', ['limit' => 200]);
        $sources = $this->Tickets->Sources->find('list', ['limit' => 200]);
        $itemcodes = $this->Tickets->Itemcodes->find('list', ['limit' => 200]);
        $users = $this->Tickets->Users->find('list', ['limit' => 200]);
        $groups = $this->Tickets->Groups->find('list', ['limit' => 200]);
        $ticketimpacts = $this->Tickets->Ticketimpacts->find('list', ['limit' => 200]);
        $ticketurgencies = $this->Tickets->Ticketurgencies->find('list', ['limit' => 200]);
        $parentTickets = $this->Tickets->ParentTickets->find('list', ['limit' => 200]);
        $ticketpriorities = $this->Tickets->Ticketpriorities->find('list', ['limit' => 200]);
        $hdcategories = $this->Tickets->Hdcategories->find('list', ['limit' => 200]);
        $this->set(compact('ticket', 'tickettypes', 'ticketStatuses', 'sources', 'itemcodes', 'users', 'groups', 'ticketimpacts', 'ticketurgencies', 'ticketpriorities', 'hdcategories','parentTickets'));
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
        $ticketlog->field = 'Tickettype';
         if ($this->request->is('get')){
            if ($ticket->tickettype_id == 2) {
                $ticket->tickettype_id = 1;
                $ticketlog->valueprev = 'PROBLEMA';
                $ticketlog->valuelater = 'INCIDENTE';
            }else{
                $ticket->tickettype_id = 2;
                $ticketlog->valueprev = 'INCIDENTE';
                $ticketlog->valuelater = 'PROBLEMA';
            }
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
            if ($this->Tickets->save($ticket)) {
                if ($ticketlogsTable->save($ticketlog)) {
                    $this->Flash->success(__('TICKET GUARDADO CON EXITO'));
                    return $this->redirect(['action' => 'view' , $id]);
                }

            }
            $this->Flash->error(__('Error al cambiar de estado :('));

         }

    }

     public function team() {
         $query = 'SELECT count(t.tickettype_id)as total, tt.name  FROM tickets t inner join tickettypes tt on tt.id = t.tickettype_id group by t.tickettype_id ';

        $connection = ConnectionManager::get('default');
        $dataChart = $connection->execute($query)->fetchAll('assoc');
        $dataChartJson = array();
        foreach ($dataChart as $key => $value) {
             array_push($dataChartJson, [$value['name'] ,$value['total']]);

         }

         $this->set('dataChartJson',json_encode($dataChartJson,JSON_NUMERIC_CHECK));

    }



    public function enduserindex() {
        $this->viewBuilder()->layout('enduser');

        $this->set('messages',$this->Messages->loadUserEndMessages());
        $query = $this->Tickets->find('all')->where(['Tickets.user_autor' => $this->request->session()->read('Auth.User.id')])
            ->contain(['Tickettypes', 'TicketStatuses', 'Sources', 'Itemcodes', 'Userrequerieds','Userautors' ,'Users', 'Groups', 'Ticketimpacts', 'Ticketurgencies', 'Userrequerieds','Userautors','Ticketpriorities', 'Hdcategories'])
            ->order(['Tickets.id' => 'DESC']);
        $this->paginate = ['limit' => $this->limit_data];
         $this->paginate = [
        'limit' => $this->limit_data ];
        $this->set('tickets', $this->paginate($query));

        $this->set(compact('tickets'));
        $this->set('_serialize', ['tickets']);
    }

    public function enduseradd($tickettype_created = null) {
        $this->viewBuilder()->layout('enduser');
        $this->set('messages',$this->Messages->loadUserEndMessages());
        $ticket = $this->Tickets->newEntity();
        switch ($tickettype_created) {
          case 1:
            $ticket->tickettype_id = 1;
            break;
          case 2:
            $ticket->tickettype_id = 4;
            break;
          default:
              $this->Flash->error(__('Opcion invalida'));
              return $this->redirect(['action' => 'enduserindex']);
            break;
        }
        if ($this->request->is('post')) {
             $ticket->ticket_status_id = 1;
             $itemcode = $this->Tickets->Itemcodes->findBySerial($this->request->getData('itemcode_id'))->first();
            $ticket->itemcode = $itemcode;
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->data,['associated' => ['Ticketnotes']]);
            $ticket->ticketnotes[0]->ticketnotestype_id = 1;
            $ticket->ticketnotes[0]->user_id = $this->request->session()->read('Auth.User.id');
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success(__('Ticket creado correctamente'));

                return $this->redirect(['action' => 'enduserindex']);
            }
            $this->Flash->error(__('The ticket could not be saved. Please, try again.'));
        }

        $ticket->group_id = $this->request->session()->read('Auth.User.group_id');
        $ticket->user_id = $this->request->session()->read('Auth.User.id');
        $tickettypes = $this->Tickets->Tickettypes->find('list', ['limit' => 200]);
        $ticketStatuses = $this->Tickets->TicketStatuses->find('list', ['limit' => 200]);
        $sources = $this->Tickets->Sources->find('list', ['limit' => 200]);
        $itemcodes = $this->Tickets->Itemcodes->find('list', ['limit' => 200]);
        $users = $this->Tickets->Users->find('list', ['limit' => 200]);
        $ticket->user_autor = $this->request->session()->read('Auth.User.id');
        $groups = $this->Tickets->Groups->find('list', ['limit' => 200]);
        $parentTickets = $this->Tickets->ParentTickets->find('list', ['limit' => 200]);
        $ticketimpacts = $this->Tickets->Ticketimpacts->find('list', ['limit' => 200]);
        $ticketurgencies = $this->Tickets->Ticketurgencies->find('list', ['limit' => 200]);
        $ticketpriorities = $this->Tickets->Ticketpriorities->find('list', ['limit' => 200]);
        $hdcategories = $this->Tickets->Hdcategories->find('list', ['limit' => 200]);
        $ticket->ip = $this->request->clientIp();
        $this->set(compact('ticket', 'tickettypes', 'ticketStatuses', 'sources', 'itemcodes', 'users', 'groups', 'ticketimpacts', 'ticketurgencies', 'ticketpriorities', 'hdcategories','parentTickets', 'ip'));
        $this->set('_serialize', ['ticket']);
    }

    public function enduserview($id = null) {
        $this->viewBuilder()->layout('enduser');
        $this->set('messages',$this->Messages->loadUserEndMessages());
        if ($this->request->is("get")){
            if(is_null($id)){
                $this->Flash->error(__('El ticket ingresado no existe'));
                return $this->redirect(['action' => 'enduserindex']);
            }

             $ticket = $this->Tickets->get($id, [
            'contain' => ['Tickettypes', 'TicketStatuses','Ticketnotes' => ['Users'] ,'Sources', 'Itemcodes', 'Users', 'Groups', 'Ticketimpacts', 'Ticketurgencies', 'Userrequerieds','Userautors','Ticketpriorities', 'Hdcategories',  'Ticketlogs']
            ]);

        }

        $this->set('ticket', $ticket);
        $this->set('_serialize', ['ticket']);
    }

    function _mailsender($subject =null, $dataid = null, $sender = null, $receiver = null){

     $datamail = $this->Tickets->get($dataid, [
         'contain' => ['Tickettypes', 'TicketStatuses', 'Sources', 'Itemcodes','Userrequerieds','Userautors', 'Users', 'Groups', 'Ticketimpacts', 'Ticketurgencies', 'Ticketpriorities', 'Hdcategories','Userautors','Userrequerieds']
     ]);

     $users = TableRegistry::get('Users');
     $query = $users->find();
     $query = $users
     ->find()
     ->select(['id', 'username'])
     ->where(['id ' => $receiver]);
     foreach ($query as $users) {
       $recipient = $users->username;
     }


     $data= array(
    [   'Ticket ID: '=> $dataid,
        'Titulo: '=> $datamail->title,
        'Tipo: '=> $datamail->tickettype->name,
        'Categoria: '=> $datamail->hdcategory->title,
        'Asignado a: '=> $datamail->user->name,
        'Solicitado por: '=> $datamail->userrequeried->name,
        'Creado por: '=> $datamail->userautor->name,
        'Impacto: '=> $datamail->ticketimpact->name,
        'Urgencia: '=> $datamail->ticketurgency->name,
        'Prioridad: '=> $datamail->ticketpriority->name,
        'Estado: '=> $datamail->ticket_status->name
       ]
     );


     foreach ($data[0] as $key => $value) {
       echo ($key.' '.$value."\n");
     }

     $cadena= '';
     foreach ($data[0] as $key => $value) {
     $cadena = $cadena.$key.' '.$value."\n";
     }
     $email = new Email('default');
     $email->from([$sender => 'mail.tony.mx'])
     ->to($sender)
     ->subject('Ticket #'.$dataid.' '. $subject)
     ->send(
       $cadena
     );

   }


    public function beforeRender(Event $event)
    {
        if (!is_null($this->request->session()->read('Auth.User.id'))){
            $results = $this->Tickettype->getTotal( $this->request->session()->read('typeViewTickets'));
            $this->set('ticketrows',$results );

        }

    }
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('tickets');

    }


public function alerts (){

 header('Content-Type: text/event-stream');
 header('Cache-Control: no-cache');
 $alerts = $this->Tickets->find('all')->where(['user_id' => $this->request->session()->read('Auth.User.id')])
   ->contain(['TicketStatuses'])
   ->where(['alert_count'=> 1]);
   $alerts->select(['count' => $alerts->func()->count('*')]);
   foreach ($alerts as $key => $value) {
    echo "data:({$value['count']})\n\n";
   }

flush();
}
public function editchecked($id=null){

   if($this->request->is('Ajax')) { //<!-- Ajax Detection
       $this->autoRender = false;

  /*     $operation= $_POST['operation'];
       echo $operation;
    */
      $elements= $_POST['value_to_send'];
      $arraycheck= array();

    foreach($elements as $element => $value)
    {
        array_push($arraycheck,$value);
    }

$ticket = $this->Tickets->find('all')
  ->where(['id IN'=> $arraycheck]);



    if ($this->request->is('post')){
        $ticketdata= array();
      foreach ($ticket as $key => $value) {
        $ticketlog= array();
        array_push($ticketlog,[
          'ticket_id' => $value['id'],
          'user_id' => $value['user_id'],
          'group_id' => $value['group_id'],
          'field' => 'tickettype_id',
          'valueprev' => '',
          'valuelater' => ''
        ]);

        if ($value['tickettype_id'] == 2) {
          $value['tickettype_id']= 1;
          $ticketlog->valueprev = 'PROBLEMA';
          $ticketlog->valuelater = 'INCIDENTE';
        }else{
          $value['tickettype_id'] = 2;
          $ticketlog->valueprev = 'INCIDENTE';
          $ticketlog->valuelater = 'PROBLEMA';
        }
        array_push($ticketdata,['ticketlogs'=> $ticketlog,
        'id'=>$value['id']]);
      }
      $ticket= $this->Tickets->patchEntities($ticket,$ticketdata,['associated'=>['Ticketlogs']]);

      if ($this->Tickets->saveMany($ticket)) {
              $this->Flash->success(__('Tickets Modificados con exito'));
          }else{
               $this->Flash->error(__('Error al cambiar de estado :('));
          }

      }
    }

   }

 }
