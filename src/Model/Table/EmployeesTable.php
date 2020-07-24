<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 *
 * @method \App\Model\Entity\Employee newEmptyEntity()
 * @method \App\Model\Entity\Employee newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employee get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employee findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Employee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employee|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmployeesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('employees');
        $this->setDisplayField('EMPLOYEE_ID');
        $this->setPrimaryKey('EMPLOYEE_ID');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->numeric('EMPLOYEE_ID')
            ->allowEmptyString('EMPLOYEE_ID', null, 'create')
            ->add('EMPLOYEE_ID', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('FIRST_NAME')
            ->maxLength('FIRST_NAME', 20)
            ->allowEmptyString('FIRST_NAME');

        $validator
            ->scalar('LAST_NAME')
            ->maxLength('LAST_NAME', 25)
            ->allowEmptyString('LAST_NAME');

        $validator
            ->scalar('EMAIL')
            ->maxLength('EMAIL', 25)
            ->allowEmptyString('EMAIL')
            ->add('EMAIL', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('PHONE_INTEGER')
            ->maxLength('PHONE_INTEGER', 20)
            ->allowEmptyString('PHONE_INTEGER');

        $validator
            ->date('HIRE_DATE')
            ->allowEmptyDate('HIRE_DATE');

        $validator
            ->scalar('JOB_ID')
            ->maxLength('JOB_ID', 10)
            ->allowEmptyString('JOB_ID');

        $validator
            ->numeric('SALARY')
            ->allowEmptyString('SALARY');

        $validator
            ->numeric('COMMISSION_PCT')
            ->allowEmptyString('COMMISSION_PCT');

        $validator
            ->numeric('MANAGER_ID')
            ->allowEmptyString('MANAGER_ID');

        $validator
            ->numeric('DEPARTMENT_ID')
            ->allowEmptyString('DEPARTMENT_ID');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['EMPLOYEE_ID']));
        $rules->add($rules->isUnique(['EMAIL']));

        return $rules;
    }
}
