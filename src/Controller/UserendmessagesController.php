<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

/**
 * Userendmessages Controller
 *
 * @property \App\Model\Table\UserendmessagesTable $Userendmessages *
 * @method \App\Model\Entity\Userendmessage[] paginate($object = null, array $settings = [])
 */
class UserendmessagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $userendmessages = $this->paginate($this->Userendmessages);

        $this->set(compact('userendmessages'));
        $this->set('_serialize', ['userendmessages']);
    }

    /**
     * View method
     *
     * @param string|null $id Userendmessage id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userendmessage = $this->Userendmessages->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('userendmessage', $userendmessage);
        $this->set('_serialize', ['userendmessage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $userendmessage = $this->Userendmessages->newEntity();
        if ($this->request->is('post')) {
            $userendmessage = $this->Userendmessages->patchEntity($userendmessage, $this->request->getData());
            $startdateF = new Time($userendmessage->startdate);
            $endingdateF = new Time($userendmessage->endingdate);
            $userendmessage->startdate = $startdateF->format('Y-m-d h:i:s');
            $userendmessage->endingdate = $endingdateF->format('Y-m-d h:i:s');
            if ($this->Userendmessages->save($userendmessage)) {
                $this->Flash->success(__('The userendmessage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The userendmessage could not be saved. Please, try again.'));
        }
        $users = $this->Userendmessages->Users->find('list', ['limit' => 200]);
        $this->set(compact('userendmessage', 'users'));
        $this->set('_serialize', ['userendmessage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Userendmessage id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userendmessage = $this->Userendmessages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userendmessage = $this->Userendmessages->patchEntity($userendmessage, $this->request->getData());
            if ($this->Userendmessages->save($userendmessage)) {
                $this->Flash->success(__('The userendmessage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The userendmessage could not be saved. Please, try again.'));
        }
        $users = $this->Userendmessages->Users->find('list', ['limit' => 200]);
        $this->set(compact('userendmessage', 'users'));
        $this->set('_serialize', ['userendmessage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Userendmessage id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userendmessage = $this->Userendmessages->get($id);
        if ($this->Userendmessages->delete($userendmessage)) {
            $this->Flash->success(__('The userendmessage has been deleted.'));
        } else {
            $this->Flash->error(__('The userendmessage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
