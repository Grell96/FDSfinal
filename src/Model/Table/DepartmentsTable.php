<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Departments Model
 *
 * @method \App\Model\Entity\Department newEmptyEntity()
 * @method \App\Model\Entity\Department newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Department[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Department get($primaryKey, $options = [])
 * @method \App\Model\Entity\Department findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Department patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Department[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Department|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Department saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Department[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Department[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Department[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Department[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DepartmentsTable extends Table
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

        $this->setTable('departments');
        $this->setDisplayField('DEPARTMENT_ID');
        $this->setPrimaryKey('DEPARTMENT_ID');
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
            ->numeric('DEPARTMENT_ID')
            ->allowEmptyString('DEPARTMENT_ID', null, 'create')
            ->add('DEPARTMENT_ID', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('DEPARTMENT_NAME')
            ->maxLength('DEPARTMENT_NAME', 30)
            ->allowEmptyString('DEPARTMENT_NAME');

        $validator
            ->numeric('MANAGER_ID')
            ->allowEmptyString('MANAGER_ID');

        $validator
            ->numeric('LOCATION_ID')
            ->allowEmptyString('LOCATION_ID');

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
        $rules->add($rules->isUnique(['DEPARTMENT_ID']));

        return $rules;
    }
}
