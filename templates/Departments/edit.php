<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Department $department
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $department->DEPARTMENT_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $department->DEPARTMENT_ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Departments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="departments form content">
            <?= $this->Form->create($department) ?>
            <fieldset>
                <legend><?= __('Edit Department') ?></legend>
                <?php
                    echo $this->Form->control('DEPARTMENT_NAME');
                    echo $this->Form->control('MANAGER_ID');
                    echo $this->Form->control('LOCATION_ID');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
