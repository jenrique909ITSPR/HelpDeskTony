<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Positiontypebranches Model
 *
 * @property \App\Model\Table\BranchesTable|\Cake\ORM\Association\BelongsTo $Branches
 * @property \App\Model\Table\PositiontypesTable|\Cake\ORM\Association\BelongsTo $Positiontypes
 * @property \App\Model\Table\PositionsTable|\Cake\ORM\Association\HasMany $Positions
 * @property \App\Model\Table\ItemcategoriesTable|\Cake\ORM\Association\BelongsToMany $Itemcategories
 *
 * @method \App\Model\Entity\Positiontypebranch get($primaryKey, $options = [])
 * @method \App\Model\Entity\Positiontypebranch newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Positiontypebranch[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Positiontypebranch|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Positiontypebranch patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Positiontypebranch[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Positiontypebranch findOrCreate($search, callable $callback = null, $options = [])
 */class PositiontypebranchesTable extends Table
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

        $this->setTable('positiontypebranches');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Branches', [
            'foreignKey' => 'branch_id',
            'strategy' => 'select'
        ]);
        $this->belongsTo('Positiontypes', [
            'foreignKey' => 'positiontype_id'
        ]);
        $this->hasMany('Positions', [
            'foreignKey' => 'positiontypebranch_id'
        ]);
        $this->belongsToMany('Itemcategories', [
            'foreignKey' => 'positiontypebranch_id',
            'targetForeignKey' => 'itemcategory_id',
            'joinTable' => 'positiontypebranches_itemcategories'
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
            ->integer('qty')            ->allowEmpty('qty');
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
        $rules->add($rules->existsIn(['branch_id'], 'Branches'));
        $rules->add($rules->existsIn(['positiontype_id'], 'Positiontypes'));

        return $rules;
    }
}
