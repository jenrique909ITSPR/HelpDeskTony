<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * PositiontypebranchesItemcategories Controller
 *
 * @property \App\Model\Table\PositiontypebranchesItemcategoriesTable $PositiontypebranchesItemcategories *
 * @method \App\Model\Entity\PositiontypebranchesItemcategory[] paginate($object = null, array $settings = [])
 */
class PositiontypebranchesItemcategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        
        
        $this->paginate = [
            'contain' => ['Positiontypebranches', 'Itemcategories']
        ];
        $positiontypebranchesItemcategories = $this->paginate($this->PositiontypebranchesItemcategories);
        $this->set(compact('positiontypebranchesItemcategories'));
        $this->set('_serialize', ['positiontypebranchesItemcategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Positiontypebranches Itemcategory id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $positiontypebranchesItemcategory = $this->PositiontypebranchesItemcategories->get($id, [
            'contain' => ['Positiontypebranches', 'Itemcategories']
        ]);

        $this->set('positiontypebranchesItemcategory', $positiontypebranchesItemcategory);
        $this->set('_serialize', ['positiontypebranchesItemcategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $positiontypebranchesItemcategory = $this->PositiontypebranchesItemcategories->newEntity();
        if ($this->request->is('post')) {
            $positiontypebranchesItemcategory = $this->PositiontypebranchesItemcategories->patchEntity($positiontypebranchesItemcategory, $this->request->getData());
            if ($this->PositiontypebranchesItemcategories->save($positiontypebranchesItemcategory)) {
                $this->Flash->success(__('The positiontypebranches itemcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The positiontypebranches itemcategory could not be saved. Please, try again.'));
        }
        $positiontypebranches = $this->PositiontypebranchesItemcategories->Positiontypebranches->find('list',[ 'keyField' => 'id',
                'valueField' => 'cadena'])
        ->contain(['Branches','Positiontypes']);
        $concat = $positiontypebranches->func()->concat([
            'Branches.name' => 'identifier',
            ' - ',
            'Positiontypes.name' => 'identifier'
        ]);
        $positiontypebranches->select(['id','cadena' => $concat]);


        $itemcategories = $this->PositiontypebranchesItemcategories->Itemcategories->find('list', ['limit' => 200]);
        $this->set(compact('positiontypebranchesItemcategory', 'positiontypebranches', 'itemcategories'));
        $this->set('_serialize', ['positiontypebranchesItemcategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Positiontypebranches Itemcategory id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $positiontypebranchesItemcategory = $this->PositiontypebranchesItemcategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $positiontypebranchesItemcategory = $this->PositiontypebranchesItemcategories->patchEntity($positiontypebranchesItemcategory, $this->request->getData());
            if ($this->PositiontypebranchesItemcategories->save($positiontypebranchesItemcategory)) {
                $this->Flash->success(__('The positiontypebranches itemcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The positiontypebranches itemcategory could not be saved. Please, try again.'));
        }
        $positiontypebranches = $this->PositiontypebranchesItemcategories->Positiontypebranches->find('list', ['limit' => 200]);
        $itemcategories = $this->PositiontypebranchesItemcategories->Itemcategories->find('list', ['limit' => 200]);
        $this->set(compact('positiontypebranchesItemcategory', 'positiontypebranches', 'itemcategories'));
        $this->set('_serialize', ['positiontypebranchesItemcategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Positiontypebranches Itemcategory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $positiontypebranchesItemcategory = $this->PositiontypebranchesItemcategories->get($id);
        if ($this->PositiontypebranchesItemcategories->delete($positiontypebranchesItemcategory)) {
            $this->Flash->success(__('The positiontypebranches itemcategory has been deleted.'));
        } else {
            $this->Flash->error(__('The positiontypebranches itemcategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('administration');
    }
}
