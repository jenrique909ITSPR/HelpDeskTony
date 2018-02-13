<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
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
                $stockmoves->where(['parent_id is null']);
                
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
       $stockmove = $this->Stockmoves->newEntity();

        if ($this->request->is('post')) {
            debug($this->request->getData());
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
        $stockmove->user_id = $this->request->session()->read('Auth.User.id');
        $this->set(compact('stockmove', 'warehouses', 'movereasons', 'shippers', 'users'));
        $this->set('_serialize', ['stockmove']);

    }

    public function getSerials($data = null)
    {
        foreach ($data['itemcodes'] as $key => $value) {
            $serial = $this->Stockmoves->StockmovesDetails->Itemcodes->find()->select(['Itemcodes.id'])->where(['Itemcodes.serial' => $value]);
            $data['stockmoves_details'] = $serial->itemcode->id;
        }
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
}
