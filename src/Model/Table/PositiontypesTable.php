<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Positiontypes Model
 *
 * @property \App\Model\Table\PositiontypebranchesTable|\Cake\ORM\Association\HasMany $Positiontypebranches
 *
 * @method \App\Model\Entity\Positiontype get($primaryKey, $options = [])
 * @method \App\Model\Entity\Positiontype newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Positiontype[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Positiontype|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Positiontype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Positiontype[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Positiontype findOrCreate($search, callable $callback = null, $options = [])
 */class PositiontypesTable extends Table
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

        $this->setTable('positiontypes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Positiontypebranches', [
            'foreignKey' => 'positiontype_id'
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
            ->scalar('name')            ->allowEmpty('name');
        return $validator;
    }
}
