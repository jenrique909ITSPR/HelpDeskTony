<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Hdcategories Controller
 *
 * @property \App\Model\Table\HdcategoriesTable $Hdcategories *
 * @method \App\Model\Entity\Hdcategory[] paginate($object = null, array $settings = [])
 */
class HdcategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentHdcategories']
        ];
        $hdcategories = $this->paginate($this->Hdcategories);

        $this->set(compact('hdcategories'));
        $this->set('_serialize', ['hdcategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Hdcategory id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hdcategory = $this->Hdcategories->get($id, [
            'contain' => ['ParentHdcategories', 'Articles', 'ChildHdcategories', 'Hdtemplate', 'Tickets']
        ]);

        $this->set('hdcategory', $hdcategory);
        $this->set('_serialize', ['hdcategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hdcategory = $this->Hdcategories->newEntity();
        if ($this->request->is('post')) {
            $hdcategory = $this->Hdcategories->patchEntity($hdcategory, $this->request->getData());
            if ($this->Hdcategories->save($hdcategory)) {
                $this->Flash->success(__('The hdcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hdcategory could not be saved. Please, try again.'));
        }
        $parentHdcategories = $this->Hdcategories->ParentHdcategories->find('list', ['limit' => 200]);
        $articles = $this->Hdcategories->Articles->find('list', ['limit' => 200]);
        $this->set(compact('hdcategory', 'parentHdcategories', 'articles'));
        $this->set('_serialize', ['hdcategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hdcategory id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $hdcategory = $this->Hdcategories->get($id, [
            'contain' => ['Articles']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hdcategory = $this->Hdcategories->patchEntity($hdcategory, $this->request->getData());
            if ($this->Hdcategories->save($hdcategory)) {
                $this->Flash->success(__('The hdcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hdcategory could not be saved. Please, try again.'));
        }
        $parentHdcategories = $this->Hdcategories->ParentHdcategories->find('list', ['limit' => 200]);
        $articles = $this->Hdcategories->Articles->find('list', ['limit' => 200]);
        $this->set(compact('hdcategory', 'parentHdcategories', 'articles'));
        $this->set('_serialize', ['hdcategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hdcategory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hdcategory = $this->Hdcategories->get($id);
        if ($this->Hdcategories->delete($hdcategory)) {
            $this->Flash->success(__('The hdcategory has been deleted.'));
        } else {
            $this->Flash->error(__('The hdcategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function categoriesview()
    {   
        $ticketsTable = TableRegistry::get('Tickets');
        
        if($this->request->is('post')){
            $palabra = $this->request->getData('categorySearch');
            if($palabra != ''){
            $hdcategories = $ticketsTable->Hdcategories->find('all');
            
            $hdcategories->where(['Hdcategories.title LIKE' => '%'.$palabra.'%']);
            $dataTree = array();

            foreach ($hdcategories as $key => $value) {
                array_push($dataTree, ['id' => $value->id , 'name' => $value->title , 'parentId' => $value->parent_id]);
            }
             $dataTreeJson = json_encode($dataTree);
            $this->set(compact('ticket', 'tickettypes', 'ticketStatuses', 'sources', 'itemcodes', 'users', 'groups', 'ticketimpacts', 'ticketurgencies', 'ticketpriorities', 'dataTreeJson','parentTickets', 'ip','branches'));
            $this->set('_serialize', ['ticket']);
            }
        }
        
        
    }
}
