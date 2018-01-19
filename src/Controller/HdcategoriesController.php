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
        
        
    }


    public function loadcategories($id=null)
    {
        
       $this->autoRender = false;
        $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
        $result = array();
        //$rs = mysql_query("select * from nodes where parentId=$id");
        $rs = $this->Hdcategories->find()
        ->where(['parent_id' => $id]);
        
        foreach ($rs as $key => $value) {
            $node = array();
            $node['id'] = $value['id'];
            $node['text'] = $value['title'];
            $node['state'] = $this->has_childs($value['id']) ? 'closed' : 'open';
            array_push($result,$node);  
        }
        echo json_encode($result,JSON_UNESCAPED_UNICODE);
        die(); 
    }


    public function has_childs($id=null)
    {
        //$rs = mysql_query("select count(*) from nodes where parentId=$id");
        $rs = $this->Hdcategories->find()
        ->where(['parent_id' => $id]);
        $rs->select(['count' => $rs->func()->count('*')]);
        $rs = $rs->toArray();
        
        return $rs[0]['count'] > 0 ? true : false;
    }

    
}
