<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Job'), ['action' => 'edit', $job->JOB_ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Job'), ['action' => 'delete', $job->JOB_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $job->JOB_ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Jobs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Job'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="jobs view content">
            <h3><?= h($job->JOB_ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('JOB ID') ?></th>
                    <td><?= h($job->JOB_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('JOB TITLE') ?></th>
                    <td><?= h($job->JOB_TITLE) ?></td>
                </tr>
                <tr>
                    <th><?= __('MIN SALARY') ?></th>
                    <td><?= $this->Number->format($job->MIN_SALARY) ?></td>
                </tr>
                <tr>
                    <th><?= __('MAX SALARY') ?></th>
                    <td><?= $this->Number->format($job->MAX_SALARY) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
