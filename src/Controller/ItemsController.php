<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items *
 * @method \App\Model\Entity\Item[] paginate($object = null, array $settings = [])
 */
class ItemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Itemcategories', 'Currencies', 'Brands', 'Itemtypes', 'ParentItems']
        ];
        $items = $this->paginate($this->Items);

        $this->set(compact('items'));
        $this->set('_serialize', ['items']);
    }

    /**
     * View method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => ['Itemcategories', 'Currencies', 'Brands', 'Itemtypes', 'ParentItems', 'Itemcodes', 'ChildItems', 'StockmovesDetails', 'Stocks']
        ]);

        $this->set('item', $item);
        $this->set('_serialize', ['item']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $item = $this->Items->newEntity();
        if ($this->request->is('post') ) {
            $item = $this->Items->patchEntity($item, $this->request->getData());
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['controller'=>'Itemcodes', 'action' => 'add']);

            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $itemcategories = $this->Items->Itemcategories->find('list', ['limit' => 200]);
        $currencies = $this->Items->Currencies->find('list', ['limit' => 200]);
        $brands = $this->Items->Brands->find('list', ['limit' => 200]);
        $itemtypes = $this->Items->Itemtypes->find('list', ['limit' => 200]);
        $parentItems = $this->Items->ParentItems->find('list', ['limit' => 200]);
        $this->set(compact('item', 'itemcategories', 'currencies', 'brands', 'itemtypes', 'parentItems'));
        $this->set('_serialize', ['item']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $item = $this->Items->patchEntity($item, $this->request->getData());
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $itemcategories = $this->Items->Itemcategories->find('list', ['limit' => 200]);
        $currencies = $this->Items->Currencies->find('list', ['limit' => 200]);
        $brands = $this->Items->Brands->find('list', ['limit' => 200]);
        $itemtypes = $this->Items->Itemtypes->find('list', ['limit' => 200]);
        $parentItems = $this->Items->ParentItems->find('list', ['limit' => 200]);
        $this->set(compact('item', 'itemcategories', 'currencies', 'brands', 'itemtypes', 'parentItems'));
        $this->set('_serialize', ['item']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $item = $this->Items->get($id);
        if ($this->Items->delete($item)) {
            $this->Flash->success(__('The item has been deleted.'));
        } else {
            $this->Flash->error(__('The item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function loaditems($id=null)
    {
       $this->autoRender = false;
        $result = array();
        //$rs = mysql_query("select * from nodes where parentId=$id");
        $rs = $this->Items->find()
            ->contain(['Itemcategories','Itemtypes'])->
            where(['Items.name LIKE' => '%'.$this->request->query('q').'%']);
        foreach ($rs as $key => $value) {
            array_push($result,$value['name']);
        }
        echo json_encode($result,JSON_UNESCAPED_UNICODE);
        die();
    }

    public function loaditemsadd($id = null)
    {
       $this->autoRender = false;
       $q = isset($_POST['q']) ? $_POST['q'] : '';
        $result = array();
        //$rs = mysql_query("select * from nodes where parentId=$id");
        $rs = $this->Items->find()
            ->contain(['Itemcodes'])
            ->where(['Items.name LIKE' => '%'. $q .'%']);

        echo json_encode($rs,JSON_UNESCAPED_UNICODE);
        die();
    }



}
