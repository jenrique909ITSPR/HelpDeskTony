<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ticketnotestypes Model
 *
 * @property \App\Model\Table\TicketnotesTable|\Cake\ORM\Association\HasMany $Ticketnotes
 *
 * @method \App\Model\Entity\Ticketnotestype get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ticketnotestype newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ticketnotestype[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ticketnotestype|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ticketnotestype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ticketnotestype[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ticketnotestype findOrCreate($search, callable $callback = null, $options = [])
 */class TicketnotestypesTable extends Table
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

        $this->setTable('ticketnotestypes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Ticketnotes', [
            'foreignKey' => 'ticketnotestype_id'
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
            ->scalar('name')            ->requirePresence('name', 'create')            ->notEmpty('name');
        return $validator;
    }
}
