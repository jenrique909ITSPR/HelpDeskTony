<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Itemcodes Controller
 *
 * @property \App\Model\Table\ItemcodesTable $Itemcodes
 *
 * @method \App\Model\Entity\Itemcode[] paginate($object = null, array $settings = [])
 */
class ItemcodesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {


        $this->paginate = [
            'contain' => ['Items', 'Invoices', 'Statusitems', 'Positionbranches']
            ,'limit' => $this->limit_data
        ];
        $query = $this->Itemcodes->find('All');

        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->loadComponent('Filters');
            $query = $this->Filters->Filtrado($this->request->getData(), $query);
        }


        $itemcodes = $this->paginate($query);
        $items = $this->Itemcodes->Items->find('list');
        $statusitems = $this->Itemcodes->Statusitems->find('list');
        $invoices = $this->Itemcodes->Invoices->find('list');
        $branches = $this->Itemcodes->Positionbranches->Branches->find('list');

        $this->set(compact('itemcodes', 'statusitems','items','invoices','branches'));
        $this->set('_serialize', ['itemcodes']);

        /*
        $query = $this->Articles->find('popular')->where(['author_id' => 1]);
        $this->set('articles', $this->paginate($query));
        */
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
            'contain' => ['Items', 'Invoices', 'Statusitems', 'Positionbranches', 'StockmovesDetails', 'Tickets']
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
        $positionbranches = $this->Itemcodes->Positionbranches->find('list', ['limit' => 200]);
        $this->set(compact('itemcode', 'items', 'invoices', 'statusitems', 'positionbranches'));
        $this->set('_serialize', ['itemcode']);
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
        $positionbranches = $this->Itemcodes->Positionbranches->find('list', ['limit' => 200]);
        $this->set(compact('itemcode', 'items', 'invoices', 'statusitems', 'positionbranches'));
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


}
