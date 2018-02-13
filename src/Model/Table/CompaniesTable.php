<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class CompaniesTable extends Table
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

        $this->setTable('V_Companias');
        $this->setDisplayField('Nombre');
        $this->setPrimaryKey('Cia');
        
        $this->hasMany('Branches', [
            'foreignKey' => 'Cia',
            'strategy' => 'select'
        ]);

        $this->hasMany('Invoices', [
            'foreignKey' => 'company_id',
            'strategy' => 'select'
        ]);
       
        /*$this->hasMany('Empleados', [
            'foreignKey' => 'branch_id'
        ]);*/
        
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
            ->integer('Cia')            ->allowEmpty('Cia', 'create');
        $validator
            ->scalar('Nombre')            ->allowEmpty('NOMBRE');
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
        

        return $rules;
    }


    public static function defaultConnectionName() {
        return 'modelSQL';
    }
}
