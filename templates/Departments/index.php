<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Department[]|\Cake\Collection\CollectionInterface $departments
 */
?>
<div class="departments index content">
    <?= $this->Html->link(__('New Department'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Departments') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('DEPARTMENT_ID') ?></th>
                    <th><?= $this->Paginator->sort('DEPARTMENT_NAME') ?></th>
                    <th><?= $this->Paginator->sort('MANAGER_ID') ?></th>
                    <th><?= $this->Paginator->sort('LOCATION_ID') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($departments as $department): ?>
                <tr>
                    <td><?= $this->Number->format($department->DEPARTMENT_ID) ?></td>
                    <td><?= h($department->DEPARTMENT_NAME) ?></td>
                    <td><?= $this->Number->format($department->MANAGER_ID) ?></td>
                    <td><?= $this->Number->format($department->LOCATION_ID) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $department->DEPARTMENT_ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $department->DEPARTMENT_ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $department->DEPARTMENT_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $department->DEPARTMENT_ID)]) ?>
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
