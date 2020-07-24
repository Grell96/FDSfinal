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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employee->EMPLOYEE_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employee->EMPLOYEE_ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees form content">
            <?= $this->Form->create($employee) ?>
            <fieldset>
                <legend><?= __('Edit Employee') ?></legend>
                <?php
                    echo $this->Form->control('FIRST_NAME');
                    echo $this->Form->control('LAST_NAME');
                    echo $this->Form->control('EMAIL');
                    echo $this->Form->control('PHONE_INTEGER');
                    echo $this->Form->control('HIRE_DATE', ['empty' => true]);
                    echo $this->Form->control('JOB_ID');
                    echo $this->Form->control('SALARY');
                    echo $this->Form->control('COMMISSION_PCT');
                    echo $this->Form->control('MANAGER_ID');
                    echo $this->Form->control('DEPARTMENT_ID');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
