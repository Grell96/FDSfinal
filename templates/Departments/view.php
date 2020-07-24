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
            <?= $this->Html->link(__('Edit Department'), ['action' => 'edit', $department->DEPARTMENT_ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Department'), ['action' => 'delete', $department->DEPARTMENT_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $department->DEPARTMENT_ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Departments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Department'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="departments view content">
            <h3><?= h($department->DEPARTMENT_ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('DEPARTMENT NAME') ?></th>
                    <td><?= h($department->DEPARTMENT_NAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('DEPARTMENT ID') ?></th>
                    <td><?= $this->Number->format($department->DEPARTMENT_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('MANAGER ID') ?></th>
                    <td><?= $this->Number->format($department->MANAGER_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('LOCATION ID') ?></th>
                    <td><?= $this->Number->format($department->LOCATION_ID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
