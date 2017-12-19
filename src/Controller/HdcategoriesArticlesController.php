<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HdcategoriesArticles Controller
 *
 * @property \App\Model\Table\HdcategoriesArticlesTable $HdcategoriesArticles *
 * @method \App\Model\Entity\HdcategoriesArticle[] paginate($object = null, array $settings = [])
 */
class HdcategoriesArticlesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Hdcategories', 'Articles']
        ];
        $hdcategoriesArticles = $this->paginate($this->HdcategoriesArticles);

        $this->set(compact('hdcategoriesArticles'));
        $this->set('_serialize', ['hdcategoriesArticles']);
    }

    /**
     * View method
     *
     * @param string|null $id Hdcategories Article id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hdcategoriesArticle = $this->HdcategoriesArticles->get($id, [
            'contain' => ['Hdcategories', 'Articles']
        ]);

        $this->set('hdcategoriesArticle', $hdcategoriesArticle);
        $this->set('_serialize', ['hdcategoriesArticle']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hdcategoriesArticle = $this->HdcategoriesArticles->newEntity();
        if ($this->request->is('post')) {
            $hdcategoriesArticle = $this->HdcategoriesArticles->patchEntity($hdcategoriesArticle, $this->request->getData());
            if ($this->HdcategoriesArticles->save($hdcategoriesArticle)) {
                $this->Flash->success(__('The hdcategories article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hdcategories article could not be saved. Please, try again.'));
        }
        $hdcategories = $this->HdcategoriesArticles->Hdcategories->find('list', ['limit' => 200]);
        $articles = $this->HdcategoriesArticles->Articles->find('list', ['limit' => 200]);
        $this->set(compact('hdcategoriesArticle', 'hdcategories', 'articles'));
        $this->set('_serialize', ['hdcategoriesArticle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hdcategories Article id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hdcategoriesArticle = $this->HdcategoriesArticles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hdcategoriesArticle = $this->HdcategoriesArticles->patchEntity($hdcategoriesArticle, $this->request->getData());
            if ($this->HdcategoriesArticles->save($hdcategoriesArticle)) {
                $this->Flash->success(__('The hdcategories article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hdcategories article could not be saved. Please, try again.'));
        }
        $hdcategories = $this->HdcategoriesArticles->Hdcategories->find('list', ['limit' => 200]);
        $articles = $this->HdcategoriesArticles->Articles->find('list', ['limit' => 200]);
        $this->set(compact('hdcategoriesArticle', 'hdcategories', 'articles'));
        $this->set('_serialize', ['hdcategoriesArticle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hdcategories Article id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hdcategoriesArticle = $this->HdcategoriesArticles->get($id);
        if ($this->HdcategoriesArticles->delete($hdcategoriesArticle)) {
            $this->Flash->success(__('The hdcategories article has been deleted.'));
        } else {
            $this->Flash->error(__('The hdcategories article could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
