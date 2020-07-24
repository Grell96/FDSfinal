<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Region[]|\Cake\Collection\CollectionInterface $regions
 */
?>
<div class="regions index content">
    <?= $this->Html->link(__('New Region'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Regions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('REGION_ID') ?></th>
                    <th><?= $this->Paginator->sort('REGION_NAME') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($regions as $region): ?>
                <tr>
                    <td><?= $this->Number->format($region->REGION_ID) ?></td>
                    <td><?= h($region->REGION_NAME) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $region->REGION_NAME]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $region->REGION_NAME]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $region->REGION_NAME], ['confirm' => __('Are you sure you want to delete # {0}?', $region->REGION_NAME)]) ?>
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
