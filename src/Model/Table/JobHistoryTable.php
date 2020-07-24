<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JobHistory Model
 *
 * @method \App\Model\Entity\JobHistory newEmptyEntity()
 * @method \App\Model\Entity\JobHistory newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\JobHistory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\JobHistory get($primaryKey, $options = [])
 * @method \App\Model\Entity\JobHistory findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\JobHistory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\JobHistory[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\JobHistory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JobHistory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JobHistory[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\JobHistory[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\JobHistory[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\JobHistory[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class JobHistoryTable extends Table
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

        $this->setTable('job_history');
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
            ->allowEmptyString('EMPLOYEE_ID');

        $validator
            ->date('START_DATE')
            ->allowEmptyDate('START_DATE');

        $validator
            ->date('END_DATE')
            ->allowEmptyDate('END_DATE');

        $validator
            ->scalar('JOB_ID')
            ->maxLength('JOB_ID', 10)
            ->allowEmptyString('JOB_ID');

        $validator
            ->numeric('DEPARTMENT_ID')
            ->allowEmptyString('DEPARTMENT_ID');

        return $validator;
    }
}
