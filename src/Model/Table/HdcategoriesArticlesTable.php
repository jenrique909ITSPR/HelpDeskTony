<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HdcategoriesArticles Model
 *
 * @property \App\Model\Table\HdcategoriesTable|\Cake\ORM\Association\BelongsTo $Hdcategories
 * @property \App\Model\Table\ArticlesTable|\Cake\ORM\Association\BelongsTo $Articles
 *
 * @method \App\Model\Entity\HdcategoriesArticle get($primaryKey, $options = [])
 * @method \App\Model\Entity\HdcategoriesArticle newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HdcategoriesArticle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HdcategoriesArticle|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HdcategoriesArticle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HdcategoriesArticle[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HdcategoriesArticle findOrCreate($search, callable $callback = null, $options = [])
 */class HdcategoriesArticlesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('hdcategories_articles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Hdcategories', [
            'foreignKey' => 'hdcategory_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Articles', [
            'foreignKey' => 'article_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')            ->allowEmpty('id', 'create');
        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['hdcategory_id'], 'Hdcategories'));
        $rules->add($rules->existsIn(['article_id'], 'Articles'));

        return $rules;
    }
}
