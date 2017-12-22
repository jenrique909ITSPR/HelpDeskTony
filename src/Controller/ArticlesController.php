<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles *
 * @method \App\Model\Entity\Article[] paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */


     public function initialize()
    {
         parent::initialize();


        $this->loadComponent('Messages');

    }


     public function index()

    {
        $this->paginate = [
            'contain' => ['Hdcategories', 'Users']
            ,'limit' => $this->limit_data
        ];
        $articles = $this->paginate($this->Articles);

        $this->set(compact('articles'));
        $this->set('_serialize', ['articles']);

        $hdcategories = TableRegistry::get('Hdcategories')->find();



        $dataTree = array();
        foreach ($hdcategories as $key => $value) {
            array_push($dataTree, ['id' => $value->id , 'name' => $value->title , 'parentId' => $value->parent_id]);
        }
         $dataTreeJson = json_encode($dataTree);
        $this->set(compact('ticket', 'tickettypes', 'ticketStatuses', 'sources', 'itemcodes', 'users', 'groups', 'ticketimpacts', 'ticketurgencies', 'ticketpriorities', 'dataTreeJson','parentTickets', 'ip','branches'));
        $this->set('_serialize', ['ticket']);
    }

    public function enduserindex()
    {
      $this->viewBuilder()->layout('enduser');
      $this->set('messages',$this->Messages->loadUserEndMessages());
        $this->paginate = [
            'contain' => ['Hdcategories', 'Users']
        ];
        $articles = $this->paginate($this->Articles);

        $this->set(compact('articles'));
        $this->set('_serialize', ['articles']);

        $hdcategories = TableRegistry::get('Hdcategories')->find();



        $dataTree = array();
        foreach ($hdcategories as $key => $value) {
            array_push($dataTree, ['id' => $value->id , 'name' => $value->title , 'parentId' => $value->parent_id]);
        }
         $dataTreeJson = json_encode($dataTree);
        $this->set(compact('ticket', 'tickettypes', 'ticketStatuses', 'sources', 'itemcodes', 'users', 'groups', 'ticketimpacts', 'ticketurgencies', 'ticketpriorities', 'dataTreeJson','parentTickets', 'ip','branches'));
        $this->set('_serialize', ['ticket']);
    }

    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => ['Users', 'Roles', 'Hdcategories', 'Articlefiles']
        ]);

        $this->set('article', $article);
        $this->set('_serialize', ['article']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $users = $this->Articles->Users->find('list', ['limit' => 200]);
        $roles = $this->Articles->Roles->find('list', ['limit' => 200]);
        $hdcategories = $this->Articles->Hdcategories->find('list', ['limit' => 200]);
        $this->set(compact('article', 'users', 'roles', 'hdcategories'));
        $this->set('_serialize', ['article']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => ['Roles', 'Hdcategories']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $users = $this->Articles->Users->find('list', ['limit' => 200]);
        $roles = $this->Articles->Roles->find('list', ['limit' => 200]);
        $hdcategories = $this->Articles->Hdcategories->find('list', ['limit' => 200]);
        $this->set(compact('article', 'users', 'roles', 'hdcategories'));
        $this->set('_serialize', ['article']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('The article has been deleted.'));
        } else {
            $this->Flash->error(__('The article could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
