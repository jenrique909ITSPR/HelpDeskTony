<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */


   public function beforeFilter(Event $event)
{

  parent::beforeFilter($event);
    // Allow users to register and logout.
    // You should not add the "login" action to allow list. Doing so would
    // cause problems with normal functioning of AuthComponent.
    $this->Auth->allow(['login', 'logout']);
}


public function login()
{
    $this->viewBuilder()->setLayout('login');
      if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            $this->Auth->setUser($user);
            if ($this->request->session()->read('Auth.User.role_id') == '5') return $this->redirect(['controller' => 'Tickets','action' => 'enduserindex']);
            return $this->redirect('/');
        }
        $this->Flash->error_login('Your username or password is incorrect.');
        }
}

public function logout()
{
    $this->Flash->error_login('You are now logged out.');
        return $this->redirect($this->Auth->logout());
}

    public function index()
    {

       $this->set('users', $this->Users->find('all'));
        $this->paginate = [
            'contain' => [ 'Statususers', 'Groups', 'Roles']
            ,'limit' => $this->limit_data
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }


    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

      if (!$id) {
            throw new NotFoundException(__('Invalid user'));
        }

        $user = $this->Users->get($id);
        $this->set(compact('user'));

        $user = $this->Users->get($id, [
            'contain' => [ 'Statususers', 'Groups', 'Roles', 'Articles'  , 'Movereasontemplates', 'Ticketnotes', 'Stockmoves', 'Ticketlogs', 'Tickets']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        //$positionbranches = $this->Users->Positionbranches->find('list', ['limit' => 200]);
        $statususers = $this->Users->Statususers->find('list', ['limit' => 200]);
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'statususers', 'groups', 'roles'));
        $this->set('_serialize', ['user']);


    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        //$positionbranches = $this->Users->Positionbranches->find('list', ['limit' => 200]);
        $statususers = $this->Users->Statususers->find('list', ['limit' => 200]);
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'positionbranches', 'statususers', 'groups', 'roles'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function myaccount($id = null)  {
        if($this->request->session()->read('Auth.User.role_id') == '5') $this->viewBuilder()->layout('enduser');
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The information has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The information could not be saved. Please, try again.'));
        }
        //$positionbranches = $this->Users->Positionbranches->find('list', ['limit' => 200]);
        //$statususers = $this->Users->Statususers->find('list', ['limit' => 200]);
        //$groups = $this->Users->Groups->find('list', ['limit' => 200]);
        //$roles = $this->Users->Roles->find('list', ['limit' => 200]);
        //$this->set(compact('user', 'positionbranches', 'statususers', 'groups', 'roles'));
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
}
