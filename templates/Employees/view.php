<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->EMPLOYEE_ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->EMPLOYEE_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->EMPLOYEE_ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees view content">
            <h3><?= h($employee->EMPLOYEE_ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('FIRST NAME') ?></th>
                    <td><?= h($employee->FIRST_NAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('LAST NAME') ?></th>
                    <td><?= h($employee->LAST_NAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('EMAIL') ?></th>
                    <td><?= h($employee->EMAIL) ?></td>
                </tr>
                <tr>
                    <th><?= __('PHONE INTEGER') ?></th>
                    <td><?= h($employee->PHONE_INTEGER) ?></td>
                </tr>
                <tr>
                    <th><?= __('JOB ID') ?></th>
                    <td><?= h($employee->JOB_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('EMPLOYEE ID') ?></th>
                    <td><?= $this->Number->format($employee->EMPLOYEE_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('SALARY') ?></th>
                    <td><?= $this->Number->format($employee->SALARY) ?></td>
                </tr>
                <tr>
                    <th><?= __('COMMISSION PCT') ?></th>
                    <td><?= $this->Number->format($employee->COMMISSION_PCT) ?></td>
                </tr>
                <tr>
                    <th><?= __('MANAGER ID') ?></th>
                    <td><?= $this->Number->format($employee->MANAGER_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('DEPARTMENT ID') ?></th>
                    <td><?= $this->Number->format($employee->DEPARTMENT_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('HIRE DATE') ?></th>
                    <td><?= h($employee->HIRE_DATE) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
