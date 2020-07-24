<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job[]|\Cake\Collection\CollectionInterface $jobs
 */
?>
<div class="jobs index content">
    <?= $this->Html->link(__('New Job'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Jobs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('JOB_ID') ?></th>
                    <th><?= $this->Paginator->sort('JOB_TITLE') ?></th>
                    <th><?= $this->Paginator->sort('MIN_SALARY') ?></th>
                    <th><?= $this->Paginator->sort('MAX_SALARY') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jobs as $job): ?>
                <tr>
                    <td><?= h($job->JOB_ID) ?></td>
                    <td><?= h($job->JOB_TITLE) ?></td>
                    <td><?= $this->Number->format($job->MIN_SALARY) ?></td>
                    <td><?= $this->Number->format($job->MAX_SALARY) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $job->JOB_ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $job->JOB_ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $job->JOB_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $job->JOB_ID)]) ?>
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
