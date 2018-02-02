<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


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
            'contain' => ['Items', 'Invoices', 'Statusitems','Positions','Insureds' ,'Currencies', 'StockmovesDetails', 'Tickets']
        ]);

        $this->set('itemcode', $itemcode);
        $this->set('_serialize', ['itemcode']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itemcode = $this->Itemcodes->newEntity();
        if ($this->request->is('post')) {
            $entities = $this->getEntities($this->request->getData());
             $itemcodes = $this->Itemcodes->newEntities($entities);
            //$itemcode = $this->Itemcodes->patchEntity($itemcodes, $entities,['associated' =>['Items'] ]);
            if ($this->Itemcodes->saveMany($itemcodes)) {
                $this->Flash->success(__('The itemcode has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The itemcode could not be saved. Please, try again.'));
            
            
            $this->Flash->success(__('The itemcode has been saved.'));
            return $this->redirect(['action' => 'index']);
        }
        $items = $this->Itemcodes->Items->find('list', ['limit' => 200]);
        $invoices = $this->Itemcodes->Invoices->find('list', ['limit' => 200]);
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
    public function getEntities($data=null)
    {   $dataEntities = array();
        $invoiceTable = TableRegistry::get('Invoices');
        $invoice = $invoiceTable->newEntity($data['invoices']);
        if($invoiceTable->save($invoice)){
            $data['invoice_id'] = $invoice->id;
        }
        foreach ($data['itemcodes'] as $key => $value) {
            $data['serial'] = $value;
            $data['statusitem_id'] = 1;
            array_push($dataEntities,$data);
        }
        return $dataEntities;
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
}
