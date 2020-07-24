<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee[]|\Cake\Collection\CollectionInterface $employees
 */
?>
<div class="employees index content">
    <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Employees') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('EMPLOYEE_ID') ?></th>
                    <th><?= $this->Paginator->sort('FIRST_NAME') ?></th>
                    <th><?= $this->Paginator->sort('LAST_NAME') ?></th>
                    <th><?= $this->Paginator->sort('EMAIL') ?></th>
                    <th><?= $this->Paginator->sort('PHONE_INTEGER') ?></th>
                    <th><?= $this->Paginator->sort('HIRE_DATE') ?></th>
                    <th><?= $this->Paginator->sort('JOB_ID') ?></th>
                    <th><?= $this->Paginator->sort('SALARY') ?></th>
                    <th><?= $this->Paginator->sort('COMMISSION_PCT') ?></th>
                    <th><?= $this->Paginator->sort('MANAGER_ID') ?></th>
                    <th><?= $this->Paginator->sort('DEPARTMENT_ID') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= $this->Number->format($employee->EMPLOYEE_ID) ?></td>
                    <td><?= h($employee->FIRST_NAME) ?></td>
                    <td><?= h($employee->LAST_NAME) ?></td>
                    <td><?= h($employee->EMAIL) ?></td>
                    <td><?= h($employee->PHONE_INTEGER) ?></td>
                    <td><?= h($employee->HIRE_DATE) ?></td>
                    <td><?= h($employee->JOB_ID) ?></td>
                    <td><?= $this->Number->format($employee->SALARY) ?></td>
                    <td><?= $this->Number->format($employee->COMMISSION_PCT) ?></td>
                    <td><?= $this->Number->format($employee->MANAGER_ID) ?></td>
                    <td><?= $this->Number->format($employee->DEPARTMENT_ID) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $employee->EMPLOYEE_ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->EMPLOYEE_ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->EMPLOYEE_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->EMPLOYEE_ID)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
