<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Positiontypebranches Controller
 *
 * @property \App\Model\Table\PositiontypebranchesTable $Positiontypebranches *
 * @method \App\Model\Entity\Positiontypebranch[] paginate($object = null, array $settings = [])
 */
class PositiontypebranchesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Branches', 'Positiontypes']
        ];
        $positiontypebranches = $this->paginate($this->Positiontypebranches);

        $this->set(compact('positiontypebranches'));
        $this->set('_serialize', ['positiontypebranches']);
    }

    /**
     * View method
     *
     * @param string|null $id Positiontypebranch id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $positiontypebranch = $this->Positiontypebranches->get($id, [
            'contain' => ['Branches', 'Positiontypes', 'Itemcategories', 'Positions']
        ]);

        $this->set('positiontypebranch', $positiontypebranch);
        $this->set('_serialize', ['positiontypebranch']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $positiontypebranch = $this->Positiontypebranches->newEntity();
        if ($this->request->is('post')) {
            $positiontypebranch = $this->Positiontypebranches->patchEntity($positiontypebranch, $this->request->getData());
            if ($this->Positiontypebranches->save($positiontypebranch)) {
                $this->Flash->success(__('The positiontypebranch has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The positiontypebranch could not be saved. Please, try again.'));
        }
        $branches = $this->Positiontypebranches->Branches->find('list', ['limit' => 200]);
        $positiontypes = $this->Positiontypebranches->Positiontypes->find('list', ['limit' => 200]);
        $itemcategories = $this->Positiontypebranches->Itemcategories->find('list', ['limit' => 200]);
        $this->set(compact('positiontypebranch', 'branches', 'positiontypes', 'itemcategories'));
        $this->set('_serialize', ['positiontypebranch']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Positiontypebranch id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $positiontypebranch = $this->Positiontypebranches->get($id, [
            'contain' => ['Itemcategories']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $positiontypebranch = $this->Positiontypebranches->patchEntity($positiontypebranch, $this->request->getData());
            if ($this->Positiontypebranches->save($positiontypebranch)) {
                $this->Flash->success(__('The positiontypebranch has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The positiontypebranch could not be saved. Please, try again.'));
        }
        $branches = $this->Positiontypebranches->Branches->find('list', ['limit' => 200]);
        $positiontypes = $this->Positiontypebranches->Positiontypes->find('list', ['limit' => 200]);
        $itemcategories = $this->Positiontypebranches->Itemcategories->find('list', ['limit' => 200]);
        $this->set(compact('positiontypebranch', 'branches', 'positiontypes', 'itemcategories'));
        $this->set('_serialize', ['positiontypebranch']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Positiontypebranch id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $positiontypebranch = $this->Positiontypebranches->get($id);
        if ($this->Positiontypebranches->delete($positiontypebranch)) {
            $this->Flash->success(__('The positiontypebranch has been deleted.'));
        } else {
            $this->Flash->error(__('The positiontypebranch could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('administration');
    }
}
