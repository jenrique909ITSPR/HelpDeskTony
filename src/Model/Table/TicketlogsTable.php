<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ticketlogs Model
 *
 * @property \App\Model\Table\TicketsTable|\Cake\ORM\Association\BelongsTo $Tickets
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\GroupsTable|\Cake\ORM\Association\BelongsTo $Groups
 *
 * @method \App\Model\Entity\Ticketlog get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ticketlog newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ticketlog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ticketlog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ticketlog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ticketlog[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ticketlog findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TicketlogsTable extends Table
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

        $this->setTable('ticketlogs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Tickets', [
            'foreignKey' => 'ticket_id'
        ]);
    
        $this->belongsTo('Users', [
            'className' => 'Users',
            'foreignKey' => 'user_id',
            'propertyName' => 'user',
        ]);

        $this->belongsTo('Groups', [
            'className' => 'Groups',
            'foreignKey' => 'group_id',
            'propertyName' => 'group',
        ]);
        
        $this->belongsTo('Tickettypes', [
            'foreignKey' => 'tickettype_id',
            'strategy' => 'select'
        ]);
        $this->belongsTo('TicketStatuses', [
            'foreignKey' => 'ticket_status_id',
            'strategy' => 'select'
        ]);
        $this->belongsTo('Sources', [
            'foreignKey' => 'source_id',
            'strategy' => 'select'
        ]);
        $this->belongsTo('Itemcodes', [
            'foreignKey' => 'itemcode_id',
            'strategy' => 'select'
        ]);
         
        $this->belongsTo('Ticketimpacts', [
            'foreignKey' => 'ticketimpact_id',
            'strategy' => 'select'
        ]);
        $this->belongsTo('Ticketurgencies', [
            'foreignKey' => 'ticketurgency_id',
            'strategy' => 'select'
        ]);
        $this->belongsTo('Ticketpriorities', [
            'foreignKey' => 'ticketpriority_id',
            'strategy' => 'select'
        ]);
        $this->belongsTo('ParentTickets', [
            'className' => 'Tickets',
            'foreignKey' => 'parent_id',
            'strategy' => 'select'
        ]);
        $this->belongsTo('Hdcategories', [
            'foreignKey' => 'hdcategory_id',
            'strategy' => 'select'
        ]);
        
        $this->belongsTo('Branches', [
            'foreignKey' => 'branch_id',
            'joinType' => 'left',
            'strategy' => 'select'
        ]);
        
        $this->hasMany('Ticketmarkeds', [
            'foreignKey' => 'ticket_id',
            'strategy' => 'select'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

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
        $rules->add($rules->existsIn(['ticket_id'], 'Tickets'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['group_id'], 'Groups'));

        return $rules;
    }
}
