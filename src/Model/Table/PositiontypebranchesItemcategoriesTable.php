<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PositiontypebranchesItemcategories Model
 *
 * @property \App\Model\Table\PositiontypebranchesTable|\Cake\ORM\Association\BelongsTo $Positiontypebranches
 * @property \App\Model\Table\ItemcategoriesTable|\Cake\ORM\Association\BelongsTo $Itemcategories
 *
 * @method \App\Model\Entity\PositiontypebranchesItemcategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\PositiontypebranchesItemcategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PositiontypebranchesItemcategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PositiontypebranchesItemcategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PositiontypebranchesItemcategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PositiontypebranchesItemcategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PositiontypebranchesItemcategory findOrCreate($search, callable $callback = null, $options = [])
 */class PositiontypebranchesItemcategoriesTable extends Table
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

        $this->setTable('positiontypebranches_itemcategories');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Positiontypebranches', [
            'foreignKey' => 'positiontypebranch_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Itemcategories', [
            'foreignKey' => 'itemcategory_id',
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
        $validator
            ->integer('qty')            ->requirePresence('qty', 'create')            ->notEmpty('qty');
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
        $rules->add($rules->existsIn(['positiontypebranch_id'], 'Positiontypebranches'));
        $rules->add($rules->existsIn(['itemcategory_id'], 'Itemcategories'));

        return $rules;
    }
}
