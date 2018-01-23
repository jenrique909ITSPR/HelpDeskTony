<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class PurchaseordersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companies','Branches','Branchrequests','Departments','Departmentrequires','Suppliers']
        ];
        $purchaseorders = $this->paginate($this->Purchaseorders);
        
        $this->set(compact('purchaseorders'));
        $this->set('_serialize', ['purchaseorders']);
    }

    /**
     * View method
     *
     * @param string|null $id Branch id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $purchaseorder = $this->Purchaseorders->get($id, [
            'contain' => ['Companies','Purchasedescriptions','Branches','Branchrequests','Departments','Departmentrequires','Suppliers','Purchaseinvoices']]
        );

        $this->set('purchaseorder', $purchaseorder);
        $this->set('_serialize', ['purchaseorder']);
    }
    public function beforeFilter(Event $event) {
            parent::beforeFilter($event);
            $this->viewBuilder()->layout('administration');
        }
}
