<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\ORM\TableRegistry;
/**
 * Stockmoves Controller
 *
 * @property \App\Model\Table\StockmovesTable $Stockmoves
 *
 * @method \App\Model\Entity\Stockmove[] paginate($object = null, array $settings = [])
 */
class StockmovesController extends AppController
{
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('stockmoves');

    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index($id = null)
    {
        $stockmoves = $this->Stockmoves->find('all')
        ->contain(['Warehouses','Warehouses2', 'Userreceivers','Movereasons', 'Shippers', 'Users','StockmovesDetails'])
        ->limit([$this->limit_data]);

         switch ($id) {
            case 1:
                $stockmoves->where(['parent_id' => 0])->orWhere(['completed' => 0]);

            case 2:
                 //$stockmoves->where(['StockmovesDetails.confirmed' => 0]);
            default:

                break;
        }
        $stockmoves = $this->paginate($stockmoves);
        $this->set(compact('stockmoves'));
        $this->set('_serialize', ['stockmoves']);
    }

    /**
     * View method
     *
     * @param string|null $id Stockmove id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stockmove = $this->Stockmoves->get($id, [
            'contain' => ['Warehouses','Warehouses2' ,'Movereasons','Userreceivers', 'Shippers', 'Users', 'StockmovesDetails']
        ]);

        $this->set('stockmove', $stockmove);
        $this->set('_serialize', ['stockmove']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

      //debug ($this->request->query('idM').$this->request->query('itemcodeM'));

      $this->set('idMView',$this->request->query('idM'));
    //  $this->set('itemcodeMView',$this->request->query('itemcodeM'));

       $stockmove = $this->Stockmoves->newEntity();

        if ($this->request->is('post')) {
            $datarequest = $this->getEntities($this->request->getData());
            $stockmove = $this->Stockmoves->patchEntity($stockmove, $datarequest);
            $stockmove->completed = 0;
            if ($this->Stockmoves->save($stockmove)) {
                $this->Flash->success(__('The stockmove has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stockmove could not be saved. Please, try again.'));
        }
        $warehouses = $this->Stockmoves->Warehouses->find('list', ['limit' => 200]);
        $movereasons = $this->Stockmoves->Movereasons->find('list', ['limit' => 200]);
        $shippers = $this->Stockmoves->Shippers->find('list', ['limit' => 200]);
        $users = $this->Stockmoves->Users->find('list', ['limit' => 200]);
        $stockmove->user_id = $this->request->session()->read('Auth.User.id');
        $this->set(compact('stockmove', 'warehouses', 'movereasons', 'shippers', 'users'));
        $this->set('_serialize', ['stockmove']);

    }


    /**
     * Edit method
     *
     * @param string|null $id Stockmove id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stockmove = $this->Stockmoves->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stockmove = $this->Stockmoves->patchEntity($stockmove, $this->request->getData());
            if ($this->Stockmoves->save($stockmove)) {
                $this->Flash->success(__('The stockmove has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stockmove could not be saved. Please, try again.'));
        }
        $warehouses = $this->Stockmoves->Warehouses->find('list', ['limit' => 200]);
        $movereasons = $this->Stockmoves->Movereasons->find('list', ['limit' => 200]);
        $shippers = $this->Stockmoves->Shippers->find('list', ['limit' => 200]);
        $users = $this->Stockmoves->Users->find('list', ['limit' => 200]);
        $this->set(compact('stockmove', 'warehouses', 'movereasons', 'shippers', 'users'));
        $this->set('_serialize', ['stockmove']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Stockmove id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stockmove = $this->Stockmoves->get($id);
        if ($this->Stockmoves->delete($stockmove)) {
            $this->Flash->success(__('The stockmove has been deleted.'));
        } else {
            $this->Flash->error(__('The stockmove could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function direct()
    {
       $stockmove = $this->Stockmoves->newEntity();

        if ($this->request->is('post')) {

            $datarequest = $this->getEntities($this->request->getData());

            $stockmove = $this->Stockmoves->patchEntity($stockmove, $datarequest , ['associated' => ['StockmovesDetails']]);
            $stockmove->packages = 1;
            $stockmove->user_id = $this->request->session()->read('Auth.User.id');
            $stockmove->completed = 1;


            if ($this->Stockmoves->save($stockmove)) {
                $this->Flash->success(__('The stockmove has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stockmove could not be saved. Please, try again.'));
        }
        $warehouses = $this->Stockmoves->Warehouses->find('list', ['limit' => 200]);
        $movereasons = $this->Stockmoves->Movereasons->find('list', ['limit' => 200]);
        $shippers = $this->Stockmoves->Shippers->find('list', ['limit' => 200]);
        $users = $this->Stockmoves->Users->find('list', ['limit' => 200]);
        $stockmove->user_id = $this->request->session()->read('Auth.User.id');
        $this->set(compact('stockmove', 'warehouses', 'movereasons', 'shippers', 'users'));
        $this->set('_serialize', ['stockmove']);

    }

    public function getEntities($data=null)
    {   $dataEntities = array();
        foreach ($data['stockmoves_details']['serial'] as $key => $value) {
            $itemcode = $this->Stockmoves->StockmovesDetails->Itemcodes->find('all')->where(['serial' => $value])->first();
            //$data['stockmoves_details'] = $itemcode->id;
            array_push($dataEntities,['reason' => $data['stockmoves_details']['reason'][$key] , 'itemcode_id' => $itemcode->id, 'item_id' => $itemcode->item_id, 'qty' => 1 , 'confirmed' => 1] );
        }
        $data['stockmoves_details'] = "";
        $data['stockmoves_details'] = $dataEntities;
        return $data;
    }

     public function initialize()
    {
         parent::initialize();
        $this->loadComponent('Messages');

    }

    public function enduseradd($ticket_id = null)
    {
        $this->viewBuilder()->layout('enduser');
        $this->set('messages',$this->Messages->loadUserEndMessages());
        $ticket = $this->Stockmoves->Tickets->find('all')->where(['id' => $ticket_id])->first();
        $stockmove = $this->Stockmoves->newEntity();

        if ($this->request->is('post')) {
            $datarequest = $this->getEntities($this->request->getData());
            $stockmove = $this->Stockmoves->patchEntity($stockmove, $datarequest,['associated' => ['Warehouses','Warehouses2','StockmovesDetails']]);
            $stockmove->completed = 0;
            $stockmove->ticket_id = $ticket_id;
            $stockmove->user_id = $this->request->session()->read('Auth.User.id');
            $stockmove->movereason_id = 8;
            if ($this->Stockmoves->save($stockmove)) {
                if ($this->addticketnote($stockmove)) {
                    $this->Flash->success(__('The stockmove has been saved.'));
                    return $this->redirect(['controller' => 'Tickets','action' => 'enduserindex']);
                }
                return $this->redirect(['action' => 'index']);
                $this->Flash->error(__('The ticketnote could not be saved. Please, try again.'));
            }
            $this->Flash->error(__('The stockmove could not be saved. Please, try again.'));
        }
        $warehouses = $this->Stockmoves->Warehouses->find('list', ['limit' => 200]);
        $movereasons = $this->Stockmoves->Movereasons->find('list', ['limit' => 200]);
        $shippers = $this->Stockmoves->Shippers->find('list', ['limit' => 200]);
        $users = $this->Stockmoves->Users->find('list', ['limit' => 200]);
        
        $stockmove->user_id = $this->request->session()->read('Auth.User.id');
        $this->set(compact('ticket','stockmove', 'warehouses', 'movereasons', 'shippers', 'users'));
        $this->set('_serialize', ['stockmove']);

    }

    public function addticketnote($data=null)
    {
        $noteTable = TableRegistry::get('Ticketnotes');
        $ticketnote = $noteTable->newEntity();
        $ticketnote->ticket_id = $data->ticket_id;
        $warehouse = $this->Stockmoves->Warehouses->get($data->warehouse_id);
        $warehouse2 = $this->Stockmoves->Warehouses->get($data->warehouse_2);
        $series = '';
        foreach ($data->stockmoves_details as $key => $value) {
            $itemcodes = $this->Stockmoves->StockmovesDetails->Itemcodes->get($value['itemcode_id']);
            $items = $this->Stockmoves->StockmovesDetails->Itemcodes->Items->get($value['item_id']);
            $series = $series . $itemcodes->serial . ' - '.$items->name . ' - total: '.$value['qty']."\n";
        }
        $ticketnote->description ='Se genera envio equipo'."\n".
        'Origen: '.$warehouse->name."\n".'Destino: '.$warehouse2->name.
        "\n".' Numeros de Serie: '."\n".$series;
        $ticketnote->user_id = $this->request->session()->read('Auth.User.id');
        $ticketnote->ticketnotestype_id = 1;      
        if ($noteTable->save($ticketnote)) {
            return true;
        }return false;
    }


}
