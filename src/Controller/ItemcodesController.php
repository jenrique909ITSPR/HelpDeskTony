<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

/**
 * Itemcodes Controller
 *
 * @property \App\Model\Table\ItemcodesTable $Itemcodes *
 * @method \App\Model\Entity\Itemcode[] paginate($object = null, array $settings = [])
 */
class ItemcodesController extends AppController
{
     public function initialize()
    {
         parent::initialize();
        $this->loadComponent('Filters');


    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $query = $this->Itemcodes->find()
        ->contain(['Items', 'Invoices','Positions','Insureds' ,'Statusitems', 'Currencies']);
        if($this->request->is('post')){
            $query = $this->Filters->Filtrado($this->request->getData(),$query);
        }
        $items = $this->Itemcodes->Items->find('list', ['limit' => 200]);
        $invoices = $this->Itemcodes->Invoices->find('list', ['limit' => 200]);
        $statusitems = $this->Itemcodes->Statusitems->find('list', ['limit' => 200]);
        $insureds = $this->Itemcodes->Insureds->find('list', ['limit' => 200]);
        $itemcodes = $this->paginate($query);
        $this->set(compact(['itemcodes','insureds','items','invoices','statusitems']));
        $this->set('_serialize', ['itemcodes']);
    }


    /**
     * View method
     *
     * @param string|null $id Itemcode id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itemcode = $this->Itemcodes->get($id, [
            'contain' => ['Items', 'Invoices', 'Statusitems','Positions','Insureds' ,'Currencies', 'StockmovesDetails' => ['Stockmoves' =>['Users','Warehouses2','Warehouses','Movereasons'] ], 'Tickets']
        ]);

        $this->set('itemcode', $itemcode);
        $this->set('_serialize', ['itemcode']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($invoice=null)
    {   
        $itemcode = $this->Itemcodes->newEntity();
        if(!empty($invoice)){
            $query = $this->Itemcodes->find('all')->where(['invoice_id' => $invoice])
            ->contain(['Invoices'])->first();
            if (!empty($query)) {
                $itemcode = $query;
            }
        }
        if ($this->request->is(['post','patch','put'])) {

            $entities = $this->getEntities($this->request->getData(),$invoice);
             $itemcodes = $this->Itemcodes->newEntities($entities);
            //$itemcode = $this->Itemcodes->patchEntity($itemcodes, $entities,['associated' =>['Items'] ]);
            if ($this->Itemcodes->saveMany($itemcodes)) {
             if($this->addStockmove($itemcodes)){
                $this->Flash->success(__('The itemcode has been saved.'));
                return $this->redirect(['action' => 'add' , $itemcodes[0]['invoice_id'] ]);
                
              }
            }
            $this->Flash->error(__('The itemcode could not be saved. Please, try again.'));
            
        }
        $items = $this->Itemcodes->Items->find('list', ['limit' => 200]);
        //$invoices = $this->Itemcodes->Invoices->find('list', ['limit' => 200]);
        $statusitems = $this->Itemcodes->Statusitems->find('list', ['limit' => 200]);
        $positionbranches = $this->Itemcodes->Positions->find('list', ['limit' => 200]);
        $insureds = $this->Itemcodes->Insureds->find('list', ['limit' => 200]);
        $currencies = $this->Itemcodes->Currencies->find('list', ['limit' => 200]);
        $itemcategories = $this->Itemcodes->Items->Itemcategories->find('list');
        $itemtypes = $this->Itemcodes->Items->Itemtypes->find('list');
        $brands = $this->Itemcodes->Items->Brands->find('list');
        $warehouses = $this->Itemcodes->Invoices->Warehouses->find('list');

        $this->set(compact('itemcode','brands','purchaseorders','itemtypes','itemcategories','insureds','items', 'invoices', 'statusitems', 'positionbranches', 'currencies','warehouses'));
        $this->set('_serialize', ['itemcode']);
    }
 

    public function getEntities($data=null,$invoiceD=null)
    {   $dataEntities = array();
        if(empty($invoiceD)){
            $invoiceTable = TableRegistry::get('Invoices');
            $invoice = $invoiceTable->newEntity($data['invoices']);
            if($invoiceTable->save($invoice)){
                $data['invoice_id'] = $invoice->id;
            }    
        }else{
            $data['invoice_id'] = $invoiceD;
        } 
        foreach ($data['itemcodes'] as $key => $value) {
            $data['serial'] = $value;
            $data['statusitem_id'] = 1;
            $data['insured_id'] = 2;
            $data['currency_id'] = $data['items']['currency_id'];
            $data['cost'] = $data['items']['unit_cost'];
            array_push($dataEntities,$data);
        }
        return $dataEntities;
    }
    public function addStockmove($itemcodes=null)
    {
        $stockmovesTable = TableRegistry::get('Stockmoves');
        $data = [
            'warehouse_id' => 495,
            'warehouse_2' => 495,
            'movereason_id' => 3,
            'receiver' => 0,
            'packages' => 1,
            'user_id' => $this->request->session()->read('Auth.User.id'),
            'notes' => 'Alta por compra',
            'completed' => 1,
            'stockmoves_details'=> ''
        ];
        $details = array();
        foreach ($itemcodes as $key => $value) {
            array_push($details, ['itemcode_id' => $value['id'], 'reason' => 'Alta por compra' ,'item_id'=>$value['item_id'],'qty' => 1, 'confirmed' => 1 ]);
        }
        $data['stockmoves_details'] = $details;
        $stockmove = $stockmovesTable->newEntity($data, ['associated' => ['StockmovesDetails']]);
      
        if($stockmovesTable->save($stockmove)){
         return true;
        }
        return false;

    }

    /**
     * Edit method
     *
     * @param string|null $id Itemcode id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itemcode = $this->Itemcodes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itemcode = $this->Itemcodes->patchEntity($itemcode, $this->request->getData());
            if ($this->Itemcodes->save($itemcode)) {
                $this->Flash->success(__('The itemcode has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The itemcode could not be saved. Please, try again.'));
        }
        $items = $this->Itemcodes->Items->find('list', ['limit' => 200]);
        $invoices = $this->Itemcodes->Invoices->find('list', ['limit' => 200]);
        $statusitems = $this->Itemcodes->Statusitems->find('list', ['limit' => 200]);
        $insureds = $this->Itemcodes->Insureds->find('list', ['limit' => 200]);
        $positionbranches = $this->Itemcodes->Positions->find('list', ['limit' => 200]);
        $currencies = $this->Itemcodes->Currencies->find('list', ['limit' => 200]);
        $this->set(compact('itemcode','insureds' ,'items', 'invoices', 'statusitems', 'positionbranches', 'currencies'));
        $this->set('_serialize', ['itemcode']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Itemcode id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itemcode = $this->Itemcodes->get($id);
        if ($this->Itemcodes->delete($itemcode)) {
            $this->Flash->success(__('The itemcode has been deleted.'));
        } else {
            $this->Flash->error(__('The itemcode could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function showitem()
    {
        $this->autoRender = false;
        $result = array();
        //$rs = mysql_query("select * from nodes where parentId=$id");
        $rs = $this->Itemcodes->find()
            ->contain(['Items'])->
            where(['Itemcodes.serial' => $this->request->query('q')])->first();
        if(empty($rs) || empty($this->request->query('q'))){
            echo "";
        }else{
            echo json_encode($rs->item->name,JSON_UNESCAPED_UNICODE);
        }

        die();
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('items');
    }
    public function verify()
    {
        $this->autoRender = false;
        $result = array();
        $rs = $this->Itemcodes->find()
            ->where(['serial' => $this->request->query('q')])->first();

        if(empty($rs) || empty($this->request->query('q'))){
            echo '0';
        }else{
            echo '1';
        }

        die();
    }

}
