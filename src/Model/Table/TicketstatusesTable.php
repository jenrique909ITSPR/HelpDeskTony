<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ticketstatuses Model
 *
 * @property \App\Model\Table\TickettypesTable|\Cake\ORM\Association\BelongsToMany $Tickettypes
 *
 * @method \App\Model\Entity\Ticketstatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ticketstatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ticketstatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ticketstatus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ticketstatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ticketstatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ticketstatus findOrCreate($search, callable $callback = null, $options = [])
 */class TicketstatusesTable extends Table
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

        $this->setTable('ticketstatuses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Tickettypes', [
            'foreignKey' => 'ticketstatus_id',
            'targetForeignKey' => 'tickettype_id',
            'joinTable' => 'ticketstatuses_tickettypes'
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
        $validator
            ->allowEmpty('value_order');
        return $validator;
    }
}
